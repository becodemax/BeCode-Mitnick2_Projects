from flask import Flask, render_template, request

app = Flask(__name__)

@app.route("/")
def bonjour():
    return render_template("index.html")

liste_eleves = [
    {'nom': 'Dupont', 'prenom': 'Jean', 'classe': '2A'},
    {'nom': 'Dupont', 'prenom': 'Jeanne', 'classe': 'TG2'},
    {'nom': 'Marchand', 'prenom': 'Marie', 'classe': '2A'},
    {'nom': 'Martin', 'prenom': 'Adeline', 'classe': '1G1'},
    {'nom': 'Dupont', 'prenom': 'Lucas', 'classe': '2A'}
]

@app.route("/eleves")
def eleves():
    classe = request.args.get('c')
    if classe:
        selected_student = [eleve for eleve in liste_eleves if eleve['classe'] == classe]
        return render_template("eleves.html", eleves = selected_student)
    else:
        selected_student = []
        return render_template("eleves.html", eleves = selected_student)

if __name__ == '__main__':
    app.run(debug=True)