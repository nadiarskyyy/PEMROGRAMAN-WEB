<?php include 'header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="fas fa-plus me-2"></i>Tulis Journal Baru</h4>
            </div>
            <div class="card-body">
                <form action="index.php?action=create" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" required 
                               placeholder="Apa yang terjadi hari ini?">
                    </div>
                    
                    <div class="mb-3">
                        <label for="mood" class="form-label">Mood Hari Ini</label>
                        <select class="form-select" id="mood" name="mood" required>
                            <option value="">Pilih mood kamu...</option>
                            <option value="senang">😊 Senang</option>
                            <option value="sedih">😢 Sedih</option>
                            <option value="marah">😠 Marah</option>
                            <option value="netral">😐 Netral</option>
                            <option value="lelah">😴 Lelah</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Journal</label>
                        <textarea class="form-control" id="content" name="content" rows="10" required
                                  placeholder="Ceritakan tentang harimu..."></textarea>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?action=list" class="btn btn-secondary me-md-2">
                            <i class="fas fa-arrow-left me-1"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>Simpan Journal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
