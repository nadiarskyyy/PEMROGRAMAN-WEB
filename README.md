# 📚 Laporan Praktikum Pemrograman Web

Repository ini berisi kumpulan laporan praktikum pemrograman web dari **Pertemuan 1 hingga 3**.  

---

## 📝 Pertemuan 1 – Dasar HTML
### Penjelasan
HTML (HyperText Markup Language) adalah bahasa dasar untuk membuat halaman web.  
Struktur dokumen HTML dimulai dengan `<!DOCTYPE html>`, lalu elemen `<html>`, `<head>`, dan `<body>`.  
Di dalam `<body>`, kita bisa menambahkan teks, judul, dan paragraf.  

### Contoh Kode
```html
<!DOCTYPE html>
<html>
<head><title>Dasar HTML</title></head>
<body>
  <h1>Hello World</h1>
  <p>Ini paragraf.</p>
</body>
</html>
```
---

## Pertemuan 2 – Dasar HTML (Lanjutan)

## 📖 Penjelasan
Pada pertemuan ini, kita belajar elemen HTML yang lebih kompleks untuk membuat halaman web interaktif dan terstruktur.  
Materi utamanya meliputi:  
- Formulir → digunakan untuk menerima input dari pengguna.  
- Tabel→ digunakan untuk menampilkan data dalam baris dan kolom.  
- Semantic HTML → membuat struktur dokumen lebih jelas dengan elemen `<header>`, `<section>`, dan `<footer>`.  

---

## 💻 Contoh Kode

### Formulir
```html
<!DOCTYPE html>
<html>
<head><title>Formulir HTML</title></head>
<body>
  <h2>Formulir Pendaftaran</h2>
  <form>
    Nama: <input type="text"><br>
    Email: <input type="email"><br>
    <button>Kirim</button>
  </form>
</body>
</html>
```
---
# 🎨 Pertemuan 3 – Dasar CSS

## 📖 Penjelasan
CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan halaman web.  
Dengan CSS kita bisa mengubah warna, ukuran font, jarak antar elemen, hingga membuat layout yang lebih menarik.  

Materi utama di pertemuan ini:  
- Cara menambahkan CSS (inline, internal, eksternal)  
- Selektor element, class (`.namaClass`), dan id (`#namaId`)  
- Properti dasar: `color`, `background-color`, `font-family`, `font-size`  
- Layout sederhana dengan `margin`, `padding`, dan `border`  

---

## 💻 Contoh Kode 
```html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pertemuan 3 – CSS Dasar</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
    h1 { color: blue; }
    p { font-size: 16px; }
    .box { margin: 10px; padding: 15px; border: 2px solid #333; }
    #highlight { background: yellow; }
  </style>
</head>
<body>

  <h1>Halo CSS!</h1>
  <p id="highlight">Ini paragraf dengan ID highlight.</p>
  <div class="box">Ini kotak dengan class CSS.</div>

</body>
</html>

```
# 🌐 Pertemuan 4 

## 📖 Penjelasan
Di pertemuan ini kita mulai menggabungkan HTML + CSS menjadi website portofolio sederhana.
Website punya beberapa section: Home, Learning, Ideas, Hobbies, Contact, dan Gallery.Dengan 
menambahkan fitur yang ada di Jobsheet serta gabungan fitur lainnya agar terlihat menarik

