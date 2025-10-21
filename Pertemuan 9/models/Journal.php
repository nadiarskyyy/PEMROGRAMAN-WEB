<?php
class Journal {
    private $conn;
    private $table_name = "journals";

    public $id;
    public $title;
    public $content;
    public $mood;
    public $created_at;
    public $updated_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET title=:title, content=:content, mood=:mood, created_at=NOW(), updated_at=NOW()";
        
        $stmt = $this->conn->prepare($query);

        // Sanitize input
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->mood = htmlspecialchars(strip_tags($this->mood));

        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":mood", $this->mood);

        if($stmt->execute()) {
            return true;
        }
        
        error_log("Error creating journal: " . implode(", ", $stmt->errorInfo()));
        return false;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            error_log("Error reading all journals: " . $exception->getMessage());
            return [];
        }
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        
        try {
            $stmt->execute();
            
            if($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Set semua property
                $this->id = $row['id'];
                $this->title = $row['title'];
                $this->content = $row['content'];
                $this->mood = $row['mood'];
                $this->created_at = $row['created_at'];
                $this->updated_at = $row['updated_at'];
                
                return $row; // Return array data untuk konsistensi
            }
            return false;
            
        } catch(PDOException $exception) {
            error_log("Error reading journal: " . $exception->getMessage());
            return false;
        }
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET title=:title, content=:content, mood=:mood, updated_at=NOW() 
                  WHERE id=:id";
        
        $stmt = $this->conn->prepare($query);

        // Sanitize input
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->mood = htmlspecialchars(strip_tags($this->mood));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":mood", $this->mood);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        
        error_log("Error updating journal: " . implode(", ", $stmt->errorInfo()));
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        
        error_log("Error deleting journal: " . implode(", ", $stmt->errorInfo()));
        return false;
    }

    // Method untuk mendapatkan jumlah total journals
    public function countAll() {
        $query = "SELECT COUNT(*) as total FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }

    // Method untuk mencari journals berdasarkan keyword
    public function search($keyword) {
        $query = "SELECT * FROM " . $this->table_name . " 
                  WHERE title LIKE :keyword OR content LIKE :keyword 
                  ORDER BY created_at DESC";
        
        $stmt = $this->conn->prepare($query);
        
        $keyword = "%{$keyword}%";
        $stmt->bindParam(":keyword", $keyword);
        
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            error_log("Error searching journals: " . $exception->getMessage());
            return [];
        }
    }
}
?>