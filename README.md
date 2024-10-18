Here's an updated README for your Laravel project that includes instructions for running Tailwind CSS with `npm` commands:

```markdown
<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/assets/moodup-logo-color.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Deskripsi Proyek

MoodUp adalah platform kesehatan mental yang dirancang untuk membantu kamu memahami, melacak, dan mengelola kesehatan mental. Website ini menyediakan landing page yang memberikan informasi terkait kesehatan mental, dan dilengkapi dengan kuis berbasis standar SRQ-20 WHO untuk mengevaluasi kondisi mental pengguna. Hasil kuis akan diklasifikasikan menggunakan algoritma Support Vector Machine (SVM), kemudian pengguna akan mendapatkan rekomendasi tindakan yang sesuai berdasarkan hasil tersebut.

## Cara Menjalankan Proyek

### Akses Online:

Platform MoodUp dapat diakses secara online melalui link berikut:  
[https://moodup-beta.vercel.app/](https://moodup-beta.vercel.app/)

### Akses Lokal:

Jika ingin menjalankan secara lokal, berikut langkah-langkahnya:

1. **Kloning Repositori:**
   ```bash
   git clone https://github.com/username/repository.git
   cd repository
   ```

2. **Instalasi Dependensi:**
   - Pastikan Anda sudah menginstal [Composer](https://getcomposer.org/) dan [Node.js](https://nodejs.org/).
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi .env:**
   - Salin file `.env.example` menjadi `.env` dan atur konfigurasi database dan lainnya sesuai kebutuhan.
   ```bash
   cp .env.example .env
   ```

4. **Generate Kunci Aplikasi:**
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database:**
   ```bash
   php artisan migrate
   ```

6. **Jalankan Tailwind CSS:**
   - Untuk mengompilasi file Tailwind CSS, jalankan salah satu dari perintah berikut:
   ```bash
   npm run dev
   ```
   - atau untuk memproduksi versi produksi:
   ```bash
   npm run build
   ```

7. **Jalankan Server Laravel:**
   ```bash
   php artisan serve
   ```

8. **Akses Aplikasi:**
   - Buka browser dan akses `http://localhost:8000` untuk melihat aplikasi MoodUp.

## Penjelasan Setiap File

1. **index.html**
   - Halaman utama yang memberikan edukasi tentang pentingnya menjaga kesehatan mental.

2. **about.html**
   - Informasi lebih lanjut tentang platform MoodUp.

3. **pre-quiz.html**
   - Penjelasan mengenai standar dan cara menjawab kuis.

4. **cond-quiz.html**
   - Pertanyaan terkait kondisi atau suasana hati pengguna sebelum kuis.

5. **quiz.html**
   - Halaman utama kuis dengan 15 pertanyaan berdasarkan SRQ-20 WHO.

6. **after-quiz.html**
   - Halaman yang muncul setelah kuis, berisi pertanyaan lanjutan.

7. **result.html**
   - Menampilkan hasil klasifikasi berdasarkan jawaban pengguna.

8. **saran.html**
   - Feedback pengguna terhadap website MoodUp.

9. **tips.html**
   - Tips untuk menjaga kesehatan mental.

10. **assets/**
    - Folder untuk menyimpan aset seperti gambar, CSS, dan JavaScript.

11. **tailwind.config.js**
    - Konfigurasi untuk Tailwind CSS.

## Catatan

- **Algoritma SVM:** Aplikasi menggunakan algoritma Support Vector Machine untuk klasifikasi hasil kuis.
- **Standar SRQ-20 WHO:** Kuis ini dirancang berdasarkan standar SRQ-20 WHO, alat penilaian kesehatan mental yang diakui.
- **Pengujian Aplikasi:** Anda dapat menguji aplikasi baik secara online maupun lokal dengan mengikuti langkah-langkah di atas.
```