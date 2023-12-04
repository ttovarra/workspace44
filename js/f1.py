from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    nombre = 'Usuario'
    return render_template('index.html', nombre=nombre)