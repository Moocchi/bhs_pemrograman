import os

total = 0
pesan_pecel = 0
pesan_nasgor = 0
pesan_air = 0
pesan_esteh = 0
pecel_lele = 17000
nasi_goreng = 12000
air_putih = 2000
es_teh = 5000

def Makanan():
    global total, pesan_pecel, pesan_nasgor
    print("Menu Makanan\n")
    print("1. Pecel Lele\n2. Nasi Goreng\n3. Kembali")
    makanan = int(input("\nSilakan Pilih : "))
    if makanan == 1:
        print("\nPecel Lele : Rp. 17.000")
        jumlah_lele = int(input("Masukkan Jumlah : "))
        pesan_pecel += jumlah_lele
        total += jumlah_lele * pecel_lele
        print(f"\nJumlah Pecel Lele: {pesan_pecel}")
        print(f"Total sementara: Rp. {total:,}")
    elif makanan == 2:
        print("\nNasi Goreng : Rp. 12.000")
        jumlah_nasgor = int(input("Masukkan Jumlah : "))
        pesan_nasgor += jumlah_nasgor
        total += jumlah_nasgor * nasi_goreng
        print(f"\nJumlah Nasi Goreng: {pesan_nasgor}")
        print(f"Total sementara: Rp. {total:,}")
    elif makanan == 3:
        menu_awal()
    else:
        print("Pilihan tidak valid.")
    back_to_menu()

def Minuman():
    global total, pesan_air, pesan_esteh
    print("Menu Minuman\n")
    print("1. Air Putih\n2. Es Teh\n3. Kembali")
    minum = int(input("\nSilakan Pilih : "))
    
    if minum == 1:
        print("Air Putih : Rp. 2.000")
        jumlah_air = int(input("Masukkan Jumlah : "))
        pesan_air += jumlah_air
        total += jumlah_air * air_putih
        print(f"\nJumlah Air Putih: {pesan_air}")
        print(f"Total sementara: Rp. {total:,}")
    elif minum == 2:
        print("Es Teh : Rp. 5.000")
        jumlah_esteh = int(input("Masukkan Jumlah : "))
        pesan_esteh += jumlah_esteh
        total += jumlah_esteh * es_teh
        print(f"\nJumlah Es Teh: {pesan_esteh}")
        print(f"Total sementara: Rp. {total:,}")
    elif minum == 3:
        menu_awal()
    else:
        print("Pilihan tidak valid.")
    back_to_menu()

def menu_awal():
    os.system("clear")
    print("Selamat datang")
    print("\n1. Makanan")
    print(f"   Pecel Lele: {pesan_pecel} x Rp. 17.000")
    print(f"   Nasi Goreng: {pesan_nasgor} x Rp. 12.000")
    print("\n2. Minuman")
    print(f"   Air Putih: {pesan_air} x Rp. 2.000")
    print(f"   Es Teh: {pesan_esteh} x Rp. 5.000")
    print("\n3. Exit")
    print(f"\nTotal sementara: Rp. {total:,}")
    menu = int(input("\nSilakan Pilih Menu : "))
    if menu == 1:
        os.system('clear')
        Makanan()
    elif menu == 2:
        os.system('clear')
        Minuman()
    elif menu == 3:
        os.system('clear')
        print("Sampai jumpa :)")
        exit()
    else:
        print("Pilihan tidak valid.")
        menu_awal()

def back_to_menu():
    choice = input("Apakah Anda ingin kembali ke menu awal? (y/n): ")
    if choice.lower() == 'y':
        menu_awal()
    else:
        print("Sampai jumpa :)")
        exit()

while True:
    menu_awal()
