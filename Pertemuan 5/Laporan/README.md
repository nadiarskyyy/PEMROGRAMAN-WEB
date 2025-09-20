# 📘 ANALISIS LAPORAN PERTEMUAN 5

Laporan ini berisi kumpulan percobaan dan tugas untuk memahami dasar-dasar JavaScript pada HTML.  
Setiap bagian dilengkapi dengan **output** dan **analisis singkat**.

---

## 🔹 1. Percobaan 1 JavaScript pada file HTML
<img src="output%20image/satu.jpg.png" alt="Output tagScript.html" width="400">

**Analisis:**  
kode tersebut menampilkan dua teks yang muncul berurutan di halaman, yaitu “Program JavaSript Aku di kepala” dan “Program JavaSript Aku di body”. Teks pertama muncul karena document.write() dijalankan di bagian <HEAD>, sehingga ditulis di awal halaman, sedangkan teks kedua muncul dari document.write() di <BODY>, sehingga berada di bagian isi halaman. Kedua teks ini tampil menyambung karena document.write() tidak menambahkan spasi atau baris baru secara otomatis.

---

## 🔹 2. Percobaan 2 Event Tertentu 
<img src="output%20image/tiga.jpg.png" alt="Output eventTertentu.html" width="400">

**Analisis:**  
output ini menggunakan event onclick pada JavaScript untuk menampilkan teks saat tombol diklik. Pada halaman awal, pengguna melihat judul, subjudul, tombol “klik disini”, dan area kosong untuk hasil. Ketika tombol diklik, fungsi tampilkan_nama() dijalankan, yang mengubah isi elemen (div id="hasil")  menggunakan innerHTML menjadi teks “Nama Saya Adalah Nadia resky amanda putri” dalam format (h3). Dengan demikian,event onclick menghubungkan interaksi pengguna dengan aksi JavaScript, sehingga teks muncul di halaman hanya saat tombol ditekan.

---

## 🔹 3. Percobaan 3 Contoh Sederhana 
<img src="output%20image/empat.jpg.png" alt="Output contohSederhana.html" width="400">

**Analisis:**  
output ini menampilkan teks menggunakan document.write() saat halaman dimuat. Script JavaScript menulis dua baris teks ke halaman: pertama “Selamat Belajar Angkatan 2019” diikuti dengan <br> agar berpindah ke baris baru, dan kedua “JavaScript Pemrograman WEB Teknik Komputer”. Akibatnya, ketika halaman dibuka, pengguna melihat kedua teks tersebut ditampilkan berurutan di browser, dengan baris pertama berada di atas dan baris kedua di bawahnya. Fungsi document.write() menulis langsung ke dokumen saat halaman sedang diproses.

---

## 🔹 4. Percobaan 4 Memasukkan data
<img src="output%20image/lima.jpg.png" alt="Output masukkanData.html" width="400">

**Analisis:**  
Kode HTML ini menggunakan JavaScript untuk meminta nama pengguna melalui prompt() dan menampilkannya di halaman. Nama yang dimasukkan disimpan dalam variabel nama dan digabungkan dengan sapaan “Hai, ” menggunakan document.write(). Misalnya, jika pengguna mengetik “Nadia Resky Amanda Putri”, halaman akan menampilkan “Hai, Nadia Resky Amanda Putri”.

---

## 🔹 5. Percobaan 5 Jendela Peringatan dan Konfirmasi
Contoh 1 

<img src="output%20image/enam.jpg.png" alt="Output jendelaPeringatanContoh1.html" width="400">  

Contoh 2

<img src="output%20image/7.jpg.png" alt="Output jendelaPeringatanContoh2.html" width="400">  <img src="output%20image/7d.jpg.png" alt="Output jendelaPeringatanContoh2.html" width="400"> <img src="output%20image/7e.jpg.png" alt="Output jendelaPeringatanContoh2.html" width="400">  

**Analisis: 
Contoh 1** menunjukkan penggunaan window.alert() di JavaScript. Fungsi ini digunakan untuk menampilkan kotak dialog sederhana kepada pengguna dengan sebuah pesan. Dalam kode yang diberikan, window.alert() dipanggil tanpa isi, sehingga ketika dijalankan, browser tetap akan menampilkan kotak dialog alert kosong hanya dengan tombol “OK”. Jika ingin menampilkan pesan, kita bisa menambahkan teks di dalam tanda kurung, misalnya window.alert("Halo, ini pesan alert!"), maka kotak dialog akan menampilkan pesan tersebut. Fungsi alert ini tidak mengembalikan nilai apapun, sehingga hanya berfungsi sebagai pemberitahuan.

**Contoh 2** menunjukkan penggunaan window.confirm() yang digunakan untuk meminta konfirmasi dari pengguna. Fungsi ini menampilkan kotak dialog dengan teks pertanyaan, misalnya "Apakah anda sudah yakin?", serta menyediakan dua tombol: OK dan Cancel. Nilai yang dikembalikan dari kotak konfirmasi ini disimpan di variabel jawaban, di mana jika pengguna menekan OK, nilainya true, sedangkan jika menekan Cancel, nilainya false. Dengan document.write("Jawaban Anda: " + jawaban);, hasil jawaban akan langsung ditampilkan di halaman web. Misalnya, jika pengguna menekan OK, halaman akan menampilkan Jawaban Anda: true, dan jika Cancel, akan menampilkan Jawaban Anda: false.

---

## 🔹 6. Percobaan 6 Mendeklarasikan Variabel
<img src="output%20image/lapan.jpg.png" alt="Output deklarasiVariabel.html" width="400">  

**Analisis:**  
Kode JavaScript ini mendeklarasikan dua variabel, VariabelKu dan VariabelKu2 (dengan nilai 3), lalu mengisi VariabelKu dengan 1234. document.write(VariabelKu*VariabelKu2); menampilkan hasil perkalian keduanya, yaitu 3702, langsung di halaman web.

---

## 🔹 7. Percobaan 7 Global dan Lokal
<img src="output%20image/bilan.jpg.png" alt="Output globalLokal.html" width="400">  <img src="output%20image/bilan2.jpg.png" alt="Output globalLokal.html" width="400"> 

**Analisis: 
Output 1** Pada skrip pertama, terdapat variabel global a = 12 dan b = 4. Fungsi Perkalian_Dengan2(b) mengalikan nilai b dengan 2 dan menyimpan hasilnya kembali ke variabel global a, lalu mengembalikannya. Ketika dipanggil dengan b = 4, hasilnya 8 disimpan ke a. Sehingga, document.write("Dua kali dari ", b, " adalah ", Perkalian_Dengan2(b)); akan menampilkan Dua kali dari 4 adalah 8, dan document.write("Nilai dari a adalah ", a); menampilkan Nilai dari a adalah 8. Variabel global a ikut berubah karena fungsi menggunakan a yang sama.

**Output 2:** Pada skrip kedua, fungsi PerkalianDengan2(b) mendeklarasikan variabel lokal a di dalam fungsi (var a = b * 2;). Artinya, perubahan nilai a hanya terjadi di dalam fungsi dan tidak memengaruhi variabel global a. Saat fungsi dipanggil, nilai hasil perkalian disimpan secara lokal, dan document.write("Nilai dari a adalah", a); tetap menampilkan nilai global a, yaitu 12. Jadi meskipun fungsi menghasilkan 8, nilai global a tidak berubah.

---

## 🔹 8. Percobaan 8 Konversi Tipe Data 
<img src="output%20image/puluh.jpg.png" alt="Output konversiTipeData.html" width="400"> 

**Analisis:**  
Kode ini menunjukkan penggunaan parseInt() dan parseFloat() untuk mengonversi nilai menjadi bilangan bulat atau pecahan. Fungsi parseInt() mengubah angka menjadi bilangan bulat, misalnya parseInt(27.5) menghasilkan 27, dan jika ada karakter non-numerik setelah angka seperti 27A, hasilnya tetap 27. Namun, jika karakter non-numerik berada di depan, seperti A27.5, hasilnya NaN. Begitu juga dengan parseFloat(), misalnya parseFloat(27.5) menghasilkan 27.5, parseFloat(27A) menjadi 27, sedangkan parseFloat(A27.5) menghasilkan NaN. Semua hasil ini ditampilkan langsung di halaman web menggunakan document.write().

---

## 🔹 9. Percobaan 9 OperatorAritmatika 
<img src="output%20image/sebelas.jpg.png" alt="Output aritmatika.html" width="400"> 

**Analisis:**  
Kode HTML dan JavaScript ini menunjukkan contoh operasi matematika dasar yang ditampilkan di halaman web. Fungsi document.write() digunakan untuk menulis hasil operasi langsung ke browser. Pertama, 2 + 3 menghasilkan 5, lalu 20 - 3 menghasilkan 17. Selanjutnya, 2 * 3 menghasilkan 6, dan 40 / 3 menghasilkan 13.3333… sebagai hasil pembagian pecahan. Setiap hasil dipisahkan dengan <BR> agar tampilannya rapi di baris terpisah. Kode ini memperlihatkan penggunaan operator aritmatika dasar: penjumlahan (+), pengurangan (-), perkalian (*), dan pembagian (/).

---

## 🔹 10. Percobaan 10 Operator Logika dan Pembanding 
<img src="output%20image/2belas.jpg.png" alt="Output operatorLogika.html" width="400">  <img src="output%20image/duabelas.jpg.png" alt="Output operatorLogika.html" width="400"> 
<img src="output%20image/duablas.jpg.png" alt="Output operatorLogika.html" width="400"> <img src="output%20image/2blas.jpg.png" alt="Output operatorLogika.html" width="400"> 

**Analisis:**  
Kode HTML dan JavaScript ini menggunakan operator ternary (? :) untuk menentukan hasil berdasarkan input pengguna. Pertama, prompt() meminta pengguna memasukkan nilai antara 0 hingga 100. Nilai yang dimasukkan disimpan di variabel nilai. Selanjutnya, operator ternary memeriksa apakah nilai lebih besar atau sama dengan 60; jika benar, variabel hasil diisi dengan "Lulus", jika salah, diisi "Tidak Lulus". Terakhir, document.write() menampilkan hasil tersebut di halaman web. Dengan cara ini, kode secara singkat menentukan apakah seorang siswa lulus atau tidak berdasarkan nilai yang diberikan.

---

## 🔹 11. TUGAS 1
<img src="output%20image/tgs1.jpg.png" alt="Output tugas1.html" width="300">

**Analisis:**  
Kode ini menunjukkan parseInt() dan parseFloat() untuk mengubah string menjadi angka. parseInt("75.45") jadi 75, parseInt("99B") jadi 99, tapi parseInt("B123.7") jadi NaN. parseFloat("89") jadi 89, namun parseFloat("C78.3") dan "D34.9" menghasilkan NaN. Hasil ditampilkan di halaman dengan document.write().

---

## 🔹 12. TUGAS 2
<img src="output%20image/tgs2.jpg.png" alt="Output tugas2.html" width="300">

**Analisis:**  
Kode HTML dan JavaScript ini menunjukkan penggunaan array bertipe data angka. Array angka berisi elemen [7, 14, 21, 28, 35]. Dengan document.getElementById().innerHTML, kode menampilkan isi array menggunakan join(", "), jumlah elemen dengan angka.length, elemen pertama angka[0], dan elemen terakhir angka[angka.length - 1]. Hasilnya ditampilkan di halaman web secara terstruktur, memperlihatkan cara mengakses dan menampilkan data dari array di JavaScript.

---

## 🔹 13. TUGAS 3
<img src="output%20image/tgs3.jpg.png" alt="Output tugas3.html" width="300"> <img src="output%20image/tgss3.jpg.png" alt="Output tugas3.html" width="300">

**Analisis:**  
dari kode kalkulator ini berupa tampilan interaktif di halaman web. Layar di atas tombol menampilkan angka dan operator saat tombol diklik. Misalnya, jika pengguna menekan tombol 7, +, dan 3, layar akan menampilkan 7+3. Saat tombol = ditekan, fungsi hitung() menghitung ekspresi tersebut dan menampilkan hasilnya, yaitu 10. Jika ekspresi tidak lengkap, misalnya hanya menekan 7 dan +, layar akan menampilkan Error. Semua perhitungan dilakukan secara berurutan berdasarkan input angka dan operator yang dimasukkan.

---

## 🔹 14. TUGAS 4
<img src="output%20image/tgs4.jpg.png" alt="Output tugas4.html" width="400"> <img src="output%20image/tgss4.jpg.png" alt="Output tugas4.html" width="300">
<img src="output%20image/tgsss4.jpg.png" alt="Output tugas4.html" width="300"> 

**Analisis:**  
Kode HTML dan JavaScript ini membuat kalkulator interaktif untuk bangun ruang 3D: bola, balok, dan limas segitiga. Setiap bagian memiliki input untuk memasukkan ukuran yang diperlukan, seperti jari-jari untuk bola, panjang-lebar-tinggi untuk balok, dan luas alas serta tinggi untuk limas. Setelah pengguna menekan tombol “Hitung”, JavaScript menghitung volume dan luas permukaan (jika memungkinkan) menggunakan rumus matematika yang sesuai. Hasil perhitungan kemudian ditampilkan langsung di halaman di bawah setiap form input. Jika input tidak valid atau kosong, akan muncul pesan peringatan agar pengguna memasukkan nilai yang benar. Dengan cara ini, pengguna dapat secara cepat melihat hasil perhitungan volume dan luas permukaan dari masing-masing bangun ruang.

---
