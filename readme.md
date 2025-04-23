# WordPress + MariaDB dengan Docker Compose

Repositori ini menyediakan konfigurasi Docker Compose untuk menjalankan WordPress secara lokal menggunakan MariaDB sebagai database backend.

## 📦 Struktur Proyek

```
.
├── db-data/        # Volume untuk penyimpanan data MariaDB
├── wp-data/        # Volume untuk penyimpanan data WordPress
├── .env            # File konfigurasi environment variables
└── docker-compose.yml
```

## 🚀 Cara Menjalankan

### 1. Buat file `.env`

Buat file `.env` di root direktori proyek dan isi dengan konfigurasi berikut:

```env
WORDPRESS_PORT=8080
MYSQL_DATABASE=namadb
MYSQL_USER=userdb
MYSQL_PASSWORD=passdb
MYSQL_ROOT_PASSWORD=rootpass
```

> Ganti nilai variabel sesuai kebutuhanmu.

### 2. Jalankan Docker Compose

```bash
docker-compose up -d
```

WordPress akan dapat diakses melalui: [http://localhost:8080](http://localhost:8080)

### 3. Hentikan Layanan

Untuk menghentikan kontainer:

```bash
docker-compose down
```

Untuk menghapus semua data (hati-hati!):

```bash
docker-compose down -v
```

## ⚙️ Konfigurasi Tambahan

- Data WordPress akan disimpan secara persisten di `./wp-data`
- Data MariaDB akan disimpan secara persisten di `./db-data`
- WordPress akan otomatis restart jika terjadi crash (`restart: always`)

## 📋 Catatan

- Port default WordPress (80) di-mapping ke `${WORDPRESS_PORT}` agar fleksibel dan tidak konflik dengan port 80 lokal.
- Nginx tidak digunakan, WordPress langsung diakses melalui port Docker.

## 🧼 Troubleshooting

- Jika halaman WordPress tidak muncul, pastikan port yang kamu pilih di `.env` tidak sedang digunakan oleh aplikasi lain.
- Cek log dengan:

```bash
docker-compose logs wordpress
docker-compose logs db
```
