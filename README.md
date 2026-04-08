
# Sistem Pengaduan Masyarakat Cirebon (SIMPELC)

## Deskripsi

**SIMPELC (Sistem Pengaduan Masyarakat Cirebon)** adalah aplikasi berbasis web yang digunakan untuk memudahkan masyarakat dalam menyampaikan pengaduan, laporan, atau aspirasi secara online dengan cepat, mudah, dan transparan.

---

## Tujuan

* Mempermudah masyarakat dalam menyampaikan keluhan
* Meningkatkan pelayanan publik
* Menyediakan sistem pelaporan yang transparan
* Mempercepat tindak lanjut oleh admin

---

## Fitur Utama

### User (Masyarakat)

* Mengirim pengaduan
* Mengunggah bukti (jika ada)
* Melihat status pengaduan

### Admin

* Login admin terpisah
* Melihat data pengaduan
* Mengubah status:

  * ⏳ Proses
  * ✅ Selesai
* Menghapus data pengaduan
* Melihat statistik jumlah pengaduan

---

##  Teknologi yang Digunakan

* **Frontend**: HTML, CSS, Bootstrap 5
* **Backend**: PHP
* **Database**: MySQL

---

##  Struktur Folder

```
/project
│
├── index.php
├── cek_status.php
│
├── /user
│   ├── form.php
│   ├── simpan.php
│
├── /admin
│   ├── login.php
│   ├── dashboard.php
│   ├── aksi.php
│
├── /config
│   ├── koneksi.php
```

---

##  Cara Menjalankan

1. Install XAMPP / Laragon
2. Pindahkan folder project ke:

   ```
   htdocs/
   ```
3. Import database ke MySQL (phpMyAdmin)
4. Jalankan di browser:

   ```
   http://localhost/nama_folder
   ```

---

##  Akses Login Admin (Contoh)

```
Username: admin
Password: admin123
```

---

## Status Pengaduan

* **Menunggu** → Pengaduan baru masuk
* **Proses** → Sedang ditangani
* **Selesai** → Sudah ditindaklanjuti

---

## Keunggulan

* Interface sederhana & user-friendly
* Responsive (bisa di HP & laptop)
* Sistem terpisah antara user & admin
* Proses pengaduan lebih cepat & efisien

---

## Catatan

Project ini dibuat untuk keperluan pembelajaran / tugas kuliah dan masih dapat dikembangkan lebih lanjut.

---

## Pengembangan Selanjutnya

* Notifikasi real-time
* Upload multiple file
* Grafik statistik (chart)
* Sistem login user
* API integration

---


