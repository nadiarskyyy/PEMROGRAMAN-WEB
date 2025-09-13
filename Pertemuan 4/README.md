# 🌐 Update Portofolio dengan fitur Galery

Proyek ini adalah website portofolio sederhana yang dibuat menggunakan **HTML5**, **Tailwind CSS**, dan **AOS (Animate On Scroll)**.  
Website ini terdiri dari dua halaman utama:  

- `index.html` → Halaman utama yang berisi beberapa section seperti Home, Learning, Ideas, Hobbies, dan Contact.  
- `gallery.html` → Halaman galeri yang menampilkan kumpulan konten dengan animasi interaktif.  

---

## 🔎 Analisis Kode

### 1. Struktur Dasar (Head)
```html
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio | Computer Engineering</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
Analisis : Bagian <head> mendefinisikan metadata dasar halaman web agar responsif di berbagai perangkat.
Tailwind CSS dihubungkan melalui CDN untuk styling cepat berbasis utility classes. Library AOS dimasukkan
untuk mendukung animasi saat pengguna melakukan scroll.

```
### 2. Navbar
```html
<nav class="fixed top-0 w-full bg-white/30 backdrop-blur-md shadow-md">
  <ul class="flex justify-center space-x-6 py-4">
    <li><a href="#home" class="hover:text-blue-500">Home</a></li>
    <li><a href="#learning" class="hover:text-blue-500">Learning</a></li>
    <li><a href="#ideas" class="hover:text-blue-500">Ideas</a></li>
    <li><a href="#hobbies" class="hover:text-blue-500">Hobbies</a></li>
    <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
  </ul>
</nav>
Analisis : Navbar menggunakan posisi fixed (fixed top-0 w-full) sehingga selalu terlihat
saat user scroll. Tampilan dibuat modern dengan efek transparansi (bg-white/30 backdrop-blur-md).
Menu ditata menggunakan Flexbox (flex justify-center space-x-6) agar sejajar dan rapi.
Efek hover (hover:text-blue-500) memberi interaksi visual.

```
### 3.Hero Section (index.html)
```html
<section id="home" class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-200 to-purple-300">
  <h1 class="text-5xl font-bold">Welcome to My Portfolio</h1>
</section>
Analisis : Bagian Hero memenuhi seluruh tinggi layar (h-screen). Konten diposisikan di
tengah dengan Flexbox (flex items-center justify-center).Latar belakang menggunakan gradient
(bg-gradient-to-r from-blue-200 to-purple-300). Judul ditulis tebal dan besar (text-5xl font-bold)
untuk memberikan kesan profesional.

```
### 4.Section Tambahan (Learning, Ideas, Hobbies, Contact)
```html
<section id="learning" class="py-20 text-center" data-aos="fade-up">
  <h2 class="text-3xl font-semibold mb-6">Learning</h2>
  <p>Berisi materi atau topik pembelajaran terbaru yang sedang dipelajari.</p>
</section>
Analisis : Setiap section diberi padding vertikal (py-20) agar layout rapi.Judul section
dibuat menonjol (text-3xl font-semibold).Efek animasi ditambahkan melalui data-aos="fade-up",
sehingga elemen muncul dengan transisi halus saat di-scroll.

```
### 5.Gallery (gallery.html)
```html
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6">
  <div class="overflow-hidden rounded-xl shadow-md" data-aos="zoom-in">
    <img src="assets/foto1.jpg" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"/>
  </div>
  <div class="overflow-hidden rounded-xl shadow-md" data-aos="zoom-in">
    <img src="assets/foto2.jpg" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300"/>
  </div>
</div>
Analisis : Halaman galeri memakai Grid Layout (grid grid-cols-2 md:grid-cols-4) yang responsif:
dua kolom di layar kecil dan empat kolom di layar lebih besar.Setiap foto ditempatkan dalam
container overflow-hidden rounded-xl shadow-md agar terlihat elegan dengan sudut membulat dan bayangan.
Efek interaktif berupa hover zoom (hover:scale-110 transition-transform duration-300)
membuatpengalaman pengguna lebih dinamis. Animasi tambahan data-aos="zoom-in"
mempercantik saat gambar muncul di-scroll.

