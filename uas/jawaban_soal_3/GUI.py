import tkinter as tk
from tkinter import messagebox

def show_message():
    messagebox.showinfo("Pesan", "Hello, World!")

# Membuat jendela utama
root = tk.Tk()
root.title("Contoh GUI dengan Tkinter")
root.geometry("300x200")

# Membuat tombol
button = tk.Button(root, text="Klik Saya", command=show_message)
button.pack(pady=20)


root.mainloop()
