import os


desainers = [
    {"nama": "Markus", "spesialisasi": "Desain Grafis", "tarif": 500000},
    {"nama": "Bobi", "spesialisasi": "Desain UI/UX Aplikasi", "tarif": 750000},
    {"nama": "Alice", "spesialisasi": "Desain Web", "tarif": 600000},
    {"nama": "Charlie", "spesialisasi": "Desain Logo", "tarif": 450000},
    {"nama": "David", "spesialisasi": "Desain Interior", "tarif": 800000}
]


pesanan = []

def tampilkan_p_jasa():
    os.system('clear')
    print("\n\033[1mPenyedia Jasa Desain\033[0m\n")
    for i, desainer in enumerate(desainers, start=1):
        formatted_tarif = "{:,.0f}".format(desainer['tarif'])
        print(f"{i}. {desainer['nama']} - {desainer['spesialisasi']} - Rp{formatted_tarif}")
    

def tambah_pesanan():
    os.system('clear')
    print("\n\033[1mTambahkan Pesanan Jasa\033[0m\n")
    tampilkan_p_jasa()
    pilihan = int(input("\nPilih penyedia jasa (nomor): "))
    if 1 <= pilihan <= len(desainers):
        pesanan.append(desainers[pilihan - 1])
        print(f"\nDesainer {desainers[pilihan - 1]['nama']} telah ditambahkan ke pesanan.")
    else:
        print("\nPilihan tidak valid.")
    input("\nTekan Enter untuk melanjutkan...")  

def tampilkan_pembayaran():
    os.system('clear')
    print("\n\033[1mPembayaran\033[0m\n")
    if not pesanan:
        print("Tidak ada jasa yang dipesan.")
        return
    total = sum(desainer['tarif'] for desainer in pesanan)
    print(f"Total biaya: Rp{total}")
    print("\nRincian pesanan:")
    for desainer in pesanan:
        print(f"\n- {desainer['nama']} (Spesialisasi: {desainer['spesialisasi']}) - Rp{desainer['tarif']}")


while True:
    os.system('clear')
    print("\033[1mBisnis Jasa Desain Melalui Aplikasi\033[0m\n")
    print("1. Tampilkan Penyedia jasa")
    print("2. Tambah Pesanan Jasa")
    print("3. Tampilkan Pembayaran")
    print("4. Exit\n")
    menu = input("Masukkan Pilihan: ")

    if menu == '1':
        tampilkan_p_jasa()
        input("\nTekan Enter untuk kembali ke menu...")
    elif menu == '2':
        tambah_pesanan()
    elif menu == '3':
        tampilkan_pembayaran()
        input("\nTekan Enter untuk kembali ke menu...")
    elif menu == '4':
        os.system('clear')
        print("Keluar dari program.")
        break
    else:
        os.system('clear')
        print("\nPilihan tidak valid.")
        input("\nTekan Enter untuk melanjutkan...")
