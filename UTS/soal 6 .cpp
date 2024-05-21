#include <iostream>

using namespace std;

void menu() {
    cout << "Menu:\n";
    cout << "1. Tambah\n";
    cout << "2. Kurang\n";
    cout << "3. Kali\n";
    cout << "4. Bagi\n";
    cout << "5. Keluar\n";
}

void tambah() {
    int a, b;
    cout << "Masukkan dua angka untuk ditambah: ";
    cin >> a >> b;
    cout << "Hasil: " << a + b << endl;
}

void kurang() {
    int a, b;
    cout << "Masukkan dua angka untuk dikurang: ";
    cin >> a >> b;
    cout << "Hasil: " << a - b << endl;
}

void kali() {
    int a, b;
    cout << "Masukkan dua angka untuk dikali: ";
    cin >> a >> b;
    cout << "Hasil: " << a * b << endl;
}

void bagi() {
    int a, b;
    cout << "Masukkan dua angka untuk dibagi: ";
    cin >> a >> b;
    if (b != 0) {
        cout << "Hasil: " << a / b << endl;
    } else {
        cout << "Error: Pembagi tidak boleh nol." << endl;
    }
}

int main() {
    int choice;
    do {
        menu();
        cout << "Pilih menu: ";
        cin >> choice;

        switch (choice) {
            case 1:
                tambah();
                break;
            case 2:
                kurang();
                break;
            case 3:
                kali();
                break;
            case 4:
                bagi();
                break;
            case 5:
                cout << "Keluar dari program." << endl;
                break;
            default:
                cout << "Pilihan tidak valid. Silakan coba lagi." << endl;
                break;
        }
    } while (choice != 5);

    return 0;
}
