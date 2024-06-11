# Function (Sets)


1. `add(element)`: Menambahkan elemen baru ke dalam set.
2. `remove(element)`: Menghapus elemen tertentu dari set.
3. `clear()`: Menghapus semua elemen dari set.
4. `size()`: Mengembalikan jumlah elemen dalam set.
5. `contains(element)`: Memeriksa apakah set mengandung elemen tertentu.
6. `union(set)`: Menggabungkan dua set menjadi satu set baru yang berisi semua elemen dari kedua set.
7. `intersection(set)`: Mengembalikan set yang berisi elemen-elemen yang ada di kedua set.
8. `difference(set)`: Mengembalikan set yang berisi elemen-elemen yang ada di set pertama tetapi tidak ada di set kedua.
9. `subset(set)`: Memeriksa apakah set merupakan subset dari set lain.
10. `isEmpty()`: Memeriksa apakah set kosong.
11. `toArray()`: Mengubah set menjadi array.
12. `forEach(callback)`: Menjalankan fungsi callback untuk setiap elemen dalam set.
13. `map(callback)`: Mengembalikan set baru dengan hasil pemanggilan fungsi callback pada setiap elemen.
14. `filter(callback)`: Mengembalikan set baru dengan elemen-elemen yang memenuhi kondisi yang ditentukan oleh fungsi callback.
15. `reduce(callback, initialValue)`: Mengurangi set menjadi satu nilai dengan menggunakan fungsi callback.
16. `some(callback)`: Memeriksa apakah set memiliki setidaknya satu elemen yang memenuhi kondisi yang ditentukan oleh fungsi callback.
17. `every(callback)`: Memeriksa apakah semua elemen dalam set memenuhi kondisi yang ditentukan oleh fungsi callback.
18. `clone()`: Mengembalikan salinan dari set.


# Dictionary

Dictionary adalah struktur data yang digunakan untuk menyimpan pasangan key-value. Key adalah nilai yang unik dan digunakan untuk mengakses value yang terkait. Berikut adalah tiga properti penting dari dictionary:

1. Unordered: Elemen-elemen dalam dictionary tidak memiliki urutan tertentu. Mereka disimpan dan diakses berdasarkan key-nya.

2. Mutable: Dictionary dapat diubah setelah dibuat. Kita dapat menambahkan, mengubah, atau menghapus elemen-elemen di dalamnya.

3. Key-Value Pairs: Setiap elemen dalam dictionary terdiri dari pasangan key dan value. Key digunakan untuk mengakses value yang terkait.

Berikut adalah contoh cara membuat dictionary dan mengakses elemennya dalam Python:

```python
# Membuat dictionary
my_dict = {"name": "John", "age": 25, "city": "New York"}

# Mengakses elemen berdasarkan key
print(my_dict["name"])  # Output: John
print(my_dict["age"])  # Output: 25
print(my_dict["city"])  # Output: New York
```

Untuk menambahkan atau mengubah elemen dalam dictionary, kita dapat menggunakan operator assignment:

```python
# Menambahkan atau mengubah elemen dalam dictionary
my_dict["occupation"] = "Engineer"  # Menambahkan elemen baru
my_dict["age"] = 26  # Mengubah nilai elemen yang sudah ada

print(my_dict)
# Output: {"name": "John", "age": 26, "city": "New York", "occupation": "Engineer"}
```

Untuk menghapus elemen dalam dictionary, kita dapat menggunakan keyword `del`:

```python
# Menghapus elemen dalam dictionary
del my_dict["city"]

print(my_dict)
# Output: {"name": "John", "age": 26, "occupation": "Engineer"}
```

Operator keanggotaan (`in` dan `not in`) dapat digunakan untuk memeriksa apakah sebuah key ada dalam dictionary:

```python
# Memeriksa keanggotaan key dalam dictionary
print("name" in my_dict)  # Output: True
print("city" not in my_dict)  # Output: True
```

Berikut adalah beberapa fungsi bawaan yang dapat digunakan dengan dictionary:

- `keys()`: Mengembalikan daftar semua key dalam dictionary.
- `values()`: Mengembalikan daftar semua value dalam dictionary.
- `items()`: Mengembalikan daftar semua pasangan key-value dalam dictionary.
- `get(key)`: Mengembalikan value yang terkait dengan key yang diberikan. Jika key tidak ada, mengembalikan None (atau nilai default yang ditentukan).
- `pop(key)`: Menghapus elemen dengan key yang diberikan dan mengembalikan valuenya.
- `clear()`: Menghapus semua elemen dalam dictionary.
