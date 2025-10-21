<?php include 'header.php'; ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fas fa-list me-2"></i>Daftar Journal</h2>
        <a href="index.php?action=create" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>Tambah Baru
        </a>
    </div>

    <!-- Menampilkan pesan sukses/error -->
    <?php if(isset($_GET['message'])): ?>
        <div class="alert alert-<?php echo ($_GET['message'] == 'deleted' || $_GET['message'] == 'error') ? 'danger' : 'success'; ?> alert-dismissible fade show" role="alert">
            <?php
            $messages = [
                'created' => 'Journal berhasil dibuat!',
                'updated' => 'Journal berhasil diperbarui!',
                'deleted' => 'Journal berhasil dihapus!',
                'error' => 'Terjadi kesalahan. Silakan coba lagi.',
                'not_found' => 'Journal tidak ditemukan!',
                'invalid_id' => 'ID journal tidak valid!',
                'invalid_data' => 'Data yang dimasukkan tidak valid!'
            ];
            echo $messages[$_GET['message']] ?? 'Aksi berhasil!';
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if(!empty($journals)): ?>
    <div class="row">
        <?php foreach($journals as $row): ?>
        <div class="col-md-6 mb-4">
            <div class="card journal-card h-100 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><?php echo htmlspecialchars($row['title']); ?></h5>
                    <span class="badge bg-<?php 
                        switch($row['mood']) {
                            case 'senang': echo 'success'; break;
                            case 'sedih': echo 'info'; break;
                            case 'marah': echo 'danger'; break;
                            case 'lelah': echo 'warning'; break;
                            default: echo 'secondary';
                        }
                    ?>">
                        <?php 
                        $moodIcons = [
                            'senang' => '😊',
                            'sedih' => '😢',
                            'marah' => '😠',
                            'netral' => '😐',
                            'lelah' => '😴'
                        ];
                        echo ($moodIcons[$row['mood']] ?? '📝') . ' ' . ucfirst($row['mood']);
                        ?>
                    </span>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?php 
                        $content = htmlspecialchars($row['content']);
                        $preview = (strlen($content) > 150) ? substr($content, 0, 150) . '...' : $content;
                        echo nl2br($preview);
                        ?>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>
                            Dibuat: <?php echo date('d M Y H:i', strtotime($row['created_at'])); ?>
                        </small>
                        <?php if($row['updated_at'] != $row['created_at']): ?>
                        <small class="text-muted">
                            <i class="fas fa-edit me-1"></i>
                            Diupdate: <?php echo date('d M Y H:i', strtotime($row['updated_at'])); ?>
                        </small>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="btn-group w-100">
                        <a href="index.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                        <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" 
                           class="btn btn-outline-danger btn-sm" 
                           onclick="return confirm('Yakin ingin menghapus journal \"<?php echo addslashes($row['title']); ?>\"?')">
                            <i class="fas fa-trash me-1"></i>Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <div class="text-center py-5">
        <i class="fas fa-book fa-4x text-muted mb-3"></i>
        <h3 class="text-muted">Belum ada journal</h3>
        <p class="text-muted">Mulai menulis journal pertamamu!</p>
        <a href="index.php?action=create" class="btn btn-primary mt-3">
            <i class="fas fa-plus me-2"></i>Tulis Journal Pertama
        </a>
    </div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>