import os


def add(num1,num2):
    os.system('clear')
    print(f"Hasilnya adalah {num1+num2} ")

def sub(num1,num2):
    os.system('clear')
    print(f"Hasilnnya adalah {num1 - num2}")

def mul(num1,num2):
    os.system('clear')
    print(f"Hasilnya adalah {num1*num2}")

def div(num1, num2):
    os.system('clear')
    if num2 == 0:
        print("Error: Division by zero")
    else:
        print(f"Hasilnya adalah {num1 / num2}")


while True:
    os.system('clear')
    print("Kalkulator sederhana\n")
    print("1. penjumlahan\n2. pengurangan\n3. perkalian\n4. pembagian")
    i = int(input("\nMassukan Pilihan :"))

    if (i==1):
        os.system('clear')
        add1 = float(input("Massukan Angka Pertama :"))
        add2 = float(input("Massukan angka Kedua   :"))
        add(add1,add2)
        (input("\nPress anything to continue"))
    elif (i==2):
        os.system('clear')
        add1 = float(input("Massukan Angka Pertama :"))
        add2 = float(input("Massukan angka Kedua   :"))
        sub(add1,add2)
        (input("\nPress anything to continue"))
    elif(i==3):
        os.system('clear')
        add1 = float(input("Massukan Angka Pertama :"))
        add2 = float(input("Massukan angka Kedua   :"))
        mul(add1,add2)
        (input("\nPress anything to continue"))
    elif(i==4):
        os.system('clear')
        add1 = float(input("Massukan Angka Pertama :"))
        add2 = float(input("Massukan angka Kedua   :"))
        div(add1,add2)
        (input("\nPress anything to continue"))
    else :
        print("Invalid input :(")

    k = (input("\nApakah ingin melanjutkan (y/n )? :"))
    if (k.lower() == 'n'):
        os.system('clear')
        print("dadah")
        break


    os.system('clear')
