<?php
require_once 'config/database.php';
require_once 'models/Journal.php';

class JournalController {
    private $db;
    private $journal;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->journal = new Journal($this->db);
    }

    public function create() {
        // Check if form is submitted via POST
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate required fields
            if(empty($_POST['title']) || empty($_POST['content'])) {
                header("Location: index.php?action=create&message=invalid_data");
                exit;
            }

            $this->journal->title = trim($_POST['title']);
            $this->journal->content = trim($_POST['content']);
            $this->journal->mood = $_POST['mood'] ?? 'netral';

            if($this->journal->create()) {
                header("Location: index.php?action=list&message=created");
                exit;
            } else {
                header("Location: index.php?action=create&message=error");
                exit;
            }
        } else {
            // If not POST, redirect to create form
            header("Location: index.php?action=create");
            exit;
        }
    }

    public function read($id = null) {
        if($id && is_numeric($id)) {
            $this->journal->id = (int)$id;
            $journal_data = $this->journal->readOne();
            
            if($journal_data) {
                return $journal_data; // Return the array directly for simplicity
            }
        }
        return false; // Return false if not found
    }

    public function readAll() {
        try {
            $result = $this->journal->readAll();
            return $result ? $result : [];
        } catch(Exception $e) {
            error_log("Error reading journals: " . $e->getMessage());
            return [];
        }
    }

    public function edit() {
        // Handle GET request to show edit form
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            if(!isset($_GET['id']) || empty($_GET['id'])) {
                $this->showErrorPage("ID journal tidak valid");
                return;
            }

            $id = (int)$_GET['id'];
            $journal_data = $this->read($id);
            
            if(!$journal_data) {
                $this->showErrorPage("Journal tidak ditemukan!");
                return;
            }

            // Show edit form
            require_once 'views/edit.php';
        }
    }

    public function update() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate required fields
            if(!isset($_POST['id']) || empty($_POST['id']) || 
               empty($_POST['title']) || empty($_POST['content'])) {
                header("Location: index.php?action=list&message=invalid_data");
                exit;
            }

            $id = (int)$_POST['id'];
            
            // Check if journal exists before updating
            if(!$this->journalExists($id)) {
                header("Location: index.php?action=list&message=not_found");
                exit;
            }

            $this->journal->id = $id;
            $this->journal->title = trim($_POST['title']);
            $this->journal->content = trim($_POST['content']);
            $this->journal->mood = $_POST['mood'] ?? 'netral';

            if($this->journal->update()) {
                header("Location: index.php?action=list&message=updated");
                exit;
            } else {
                header("Location: index.php?action=edit&id=" . $id . "&message=error");
                exit;
            }
        } else {
            // If not POST, redirect to list
            header("Location: index.php?action=list");
            exit;
        }
    }

    public function delete($id) {
        if($id && is_numeric($id)) {
            $this->journal->id = (int)$id;
            
            // Check if journal exists before deleting
            if(!$this->journalExists($id)) {
                header("Location: index.php?action=list&message=not_found");
                exit;
            }

            if($this->journal->delete()) {
                header("Location: index.php?action=list&message=deleted");
                exit;
            } else {
                header("Location: index.php?action=list&message=error");
                exit;
            }
        } else {
            header("Location: index.php?action=list&message=invalid_id");
            exit;
        }
    }

    // Method to check if journal exists
    public function journalExists($id) {
        if($id && is_numeric($id)) {
            $this->journal->id = (int)$id;
            $journal_data = $this->journal->readOne();
            return $journal_data !== false && !empty($journal_data);
        }
        return false;
    }

    // Method to show error page
    private function showErrorPage($message) {
        $error = $message;
        require_once 'views/edit.php'; // You might want to create a dedicated error view
    }

    // Method to list all journals
    public function list() {
        $journals = $this->readAll();
        require_once 'views/list.php';
    }

    // Method to show create form
    public function showCreateForm() {
        require_once 'views/create.php';
    }
}
?>