import os

class Calculator:
    def add(self, num1, num2):
        os.system('clear')
        print(f"Hasilnya adalah {num1 + num2} ")

    def sub(self, num1, num2):
        os.system('clear')
        print(f"Hasilnya adalah {num1 - num2}")

    def mul(self, num1, num2):
        os.system('clear')
        print(f"Hasilnya adalah {num1 * num2}")

    def div(self, num1, num2):
        os.system('clear')
        if num2 == 0:
            print("Error: Division by zero")
        else:
            print(f"Hasilnya adalah {num1 / num2}")

calculator = Calculator()

while True:
    os.system('clear')
    print("Kalkulator sederhana\n")
    print("1. Penjumlahan\n2. Pengurangan\n3. Perkalian\n4. Pembagian")
    choice = int(input("\nMasukan Pilihan: "))

    if choice == 1:
        os.system('clear')
        num1 = float(input("Masukkan Angka Pertama: "))
        num2 = float(input("Masukkan Angka Kedua: "))
        calculator.add(num1, num2)
        input("\nTekan apa saja untuk melanjutkan")
    elif choice == 2:
        os.system('clear')
        num1 = float(input("Masukkan Angka Pertama: "))
        num2 = float(input("Masukkan Angka Kedua: "))
        calculator.sub(num1, num2)
        input("\nTekan apa saja untuk melanjutkan")
    elif choice == 3:
        os.system('clear')
        num1 = float(input("Masukkan Angka Pertama: "))
        num2 = float(input("Masukkan Angka Kedua: "))
        calculator.mul(num1, num2)
        input("\nTekan apa saja untuk melanjutkan")
    elif choice == 4:
        os.system('clear')
        num1 = float(input("Masukkan Angka Pertama: "))
        num2 = float(input("Masukkan Angka Kedua: "))
        calculator.div(num1, num2)
        input("\nTekan apa saja untuk melanjutkan")
    else:
        print("Masukan tidak valid :(")

    continue_choice = input("\nApakah ingin melanjutkan (y/n)? :")
    if continue_choice.lower() == 'n':
        os.system('clear')
        print("Sampai jumpa!")
        break

    os.system('clear')
