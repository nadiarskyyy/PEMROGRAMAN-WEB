<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Journal - Catatan Harian Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-book me-2"></i>Daily Journal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php?action=home"><i class="fas fa-home me-1"></i>Home</a>
                    <a class="nav-link" href="index.php?action=list"><i class="fas fa-list me-1"></i>Daftar Journal</a>
                    <a class="nav-link" href="index.php?action=create"><i class="fas fa-plus me-1"></i>Tambah Journal</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-4">
        <?php if(isset($_GET['message'])): ?>
            <div class="alert alert-<?php 
                $msg = $_GET['message'];
                if($msg == 'created' || $msg == 'updated' || $msg == 'deleted') echo 'success';
                else echo 'danger';
            ?> alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-center">
                    <i class="fas <?php 
                        if($msg == 'created') echo 'fa-check-circle';
                        elseif($msg == 'updated') echo 'fa-edit';
                        elseif($msg == 'deleted') echo 'fa-trash';
                        else echo 'fa-exclamation-triangle';
                    ?> me-2"></i>
                    <div>
                        <?php
                        switch($_GET['message']) {
                            case 'created': echo "Journal berhasil dibuat!"; break;
                            case 'updated': echo "Journal berhasil diperbarui!"; break;
                            case 'deleted': echo "Journal berhasil dihapus!"; break;
                            case 'error': echo "Terjadi kesalahan!"; break;
                        }
                        ?>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>