import sqlite3

# Membuat atau membuka koneksi ke database
conn = sqlite3.connect("contoh.db")

# Membuat kursor
cursor = conn.cursor()

# Membuat tabel
cursor.execute(
    """
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    name TEXT,
    age INTEGER
)
"""
)

# Menambahkan data ke tabel
cursor.execute(
    """
INSERT INTO users (name, age) VALUES
('Alice', 30),
('Bob', 25)
"""
)

# Commit perubahan
conn.commit()

# Mengambil data dari tabel
cursor.execute("SELECT * FROM users")
rows = cursor.fetchall()

# Menampilkan data
for row in rows:
    print(row)

# Menutup kursor dan koneksi
cursor.close()
conn.close()
