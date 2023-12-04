import tkinter as tk
from tkinter import ttk
import sqlite3

class CRUDApp:
    def __init__(self, root):
        self.root = root
        self.root.title("CRUD App")

        # Conexión a la base de datos SQLite
        self.conn = sqlite3.connect("database.db")
        self.create_table()

        # Variables de control
        self.name_var = tk.StringVar()
        self.age_var = tk.StringVar()

        # Interfaz gráfica
        self.create_widgets()

    def create_table(self):
        # Crear una tabla si no existe
        query = '''CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT,
                    age INTEGER
                )'''
        self.conn.execute(query)
        self.conn.commit()

    def create_widgets(self):
        # Etiquetas y campos de entrada
        ttk.Label(self.root, text="Nombre:").grid(row=0, column=0, padx=10, pady=5, sticky="e")
        ttk.Entry(self.root, textvariable=self.name_var).grid(row=0, column=1, padx=10, pady=5)

        ttk.Label(self.root, text="Edad:").grid(row=1, column=0, padx=10, pady=5, sticky="e")
        ttk.Entry(self.root, textvariable=self.age_var).grid(row=1, column=1, padx=10, pady=5)

        # Botones
        ttk.Button(self.root, text="Crear", command=self.create_data).grid(row=2, column=0, columnspan=2, pady=10)
        ttk.Button(self.root, text="Leer", command=self.read_data).grid(row=3, column=0, columnspan=2, pady=10)
        ttk.Button(self.root, text="Actualizar", command=self.update_data).grid(row=4, column=0, columnspan=2, pady=10)
        ttk.Button(self.root, text="Eliminar", command=self.delete_data).grid(row=5, column=0, columnspan=2, pady=10)

        # Treeview para mostrar los datos
        self.tree = ttk.Treeview(self.root, columns=("ID", "Nombre", "Edad"), show="headings")
        self.tree.heading("ID", text="ID")
        self.tree.heading("Nombre", text="Nombre")
        self.tree.heading("Edad", text="Edad")
        self.tree.grid(row=6, column=0, columnspan=2, pady=10)

    def create_data(self):
        # Crear un nuevo registro
        name = self.name_var.get()
        age = self.age_var.get()

        if name and age:
            query = "INSERT INTO users (name, age) VALUES (?, ?)"
            self.conn.execute(query, (name, age))
            self.conn.commit()
            self.read_data()

    def read_data(self):
        # Leer todos los registros y mostrarlos en el Treeview
        self.tree.delete(*self.tree.get_children())
        query = "SELECT * FROM users"
        cursor = self.conn.execute(query)
        for row in cursor:
            self.tree.insert("", "end", values=row)

    def update_data(self):
        # Actualizar un registro seleccionado
        selected_item = self.tree.selection()
        if selected_item:
            name = self.name_var.get()
            age = self.age_var.get()

            if name and age:
                query = "UPDATE users SET name=?, age=? WHERE id=?"
                selected_id = self.tree.item(selected_item, "values")[0]
                self.conn.execute(query, (name, age, selected_id))
                self.conn.commit()
                self.read_data()

    def delete_data(self):
        # Eliminar un registro seleccionado
        selected_item = self.tree.selection()
        if selected_item:
            selected_id = self.tree.item(selected_item, "values")[0]
            query = "DELETE FROM users WHERE id=?"
            self.conn.execute(query, (selected_id,))
            self.conn.commit()
            self.read_data()

if __name__ == "__main__":
    root = tk.Tk()
    app = CRUDApp(root)
    root.mainloop()