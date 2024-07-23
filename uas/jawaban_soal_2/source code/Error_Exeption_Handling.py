try:
    angka = int(input("Masukkan sebuah angka: "))
    hasil = 10 / angka
except ValueError:
    print("Input harus berupa angka.")
except ZeroDivisionError:
    print("Tidak bisa membagi dengan nol.")
else:
    print(f"Hasil: {hasil}")
finally:
    print("Blok finally selalu dijalankan.")
