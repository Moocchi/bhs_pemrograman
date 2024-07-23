# Python and database

Aplikasi Python dapat berkomunikasi dengan berbagai jenis database menggunakan pustaka khusus. Salah satu pustaka paling populer untuk mengakses database relasional adalah SQLite, yang merupakan database serverless, atau menggunakan pustaka seperti SQLAlchemy, yang dapat bekerja dengan berbagai jenis database seperti PostgreSQL, MySQL, SQLite, dan lain-lain.

# Penjelasan code

Penjelasan Kode

- import sqlite3: Mengimpor modul SQLite yang sudah termasuk dalam distribusi standar Python.
- sqlite3.connect('contoh.db'): Membuka koneksi ke file database 'contoh.db'. Jika file tidak ada, SQLite akan membuatnya.
- cursor = conn.cursor(): Membuat objek kursor yang digunakan untuk menjalankan perintah SQL.
- cursor.execute('CREATE TABLE IF NOT EXISTS users ...'): Menjalankan perintah SQL untuk membuat tabel jika belum ada.
- cursor.execute('INSERT INTO users (name, age) VALUES ...'): Menambahkan data ke tabel.
- conn.commit(): Menyimpan perubahan ke database.
- cursor.execute('SELECT * FROM users'): Menjalankan perintah SQL untuk mengambil data dari tabel.
- rows = cursor.fetchall(): Mengambil semua baris hasil query.
- for row in rows: Loop untuk menampilkan data.
- cursor.close() dan conn.close(): Menutup kursor dan koneksi ke database.