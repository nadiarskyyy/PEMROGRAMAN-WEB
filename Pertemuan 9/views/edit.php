<?php include 'views/header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        <?php echo isset($journal_data) ? 'Edit Journal' : 'Edit Journal'; ?>
                    </h4>
                </div>
                <div class="card-body">
                    
                    <?php if (isset($error)): ?>
                        <!-- Show error message if journal not found -->
                        <div class="alert alert-danger">
                            <strong>Error!</strong> <?php echo $error; ?>
                        </div>
                        <div class="text-center mt-3">
                            <a href="index.php?action=list" class="btn btn-primary">Kembali ke Daftar Journal</a>
                        </div>
                    <?php elseif (isset($journal_data)): ?>
                        <!-- Show edit form if journal exists -->
                        <form action="index.php?action=update" method="POST">
                            <input type="hidden" name="id" value="<?php echo $journal_data['id']; ?>">
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" 
                                       value="<?php echo htmlspecialchars($journal_data['title']); ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="content" class="form-label">Konten</label>
                                <textarea class="form-control" id="content" name="content" 
                                          rows="10" required><?php echo htmlspecialchars($journal_data['content']); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="mood" class="form-label">Mood</label>
                                <select class="form-control" id="mood" name="mood">
                                    <option value="senang" <?php echo ($journal_data['mood'] == 'senang') ? 'selected' : ''; ?>>Senang</option>
                                    <option value="sedih" <?php echo ($journal_data['mood'] == 'sedih') ? 'selected' : ''; ?>>Sedih</option>
                                    <option value="marah" <?php echo ($journal_data['mood'] == 'marah') ? 'selected' : ''; ?>>Marah</option>
                                    <option value="netral" <?php echo ($journal_data['mood'] == 'netral') ? 'selected' : ''; ?>>Netral</option>
                                </select>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="index.php?action=list" class="btn btn-secondary me-md-2">Batal</a>
                                <button type="submit" class="btn btn-primary">Update Journal</button>
                            </div>
                        </form>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

