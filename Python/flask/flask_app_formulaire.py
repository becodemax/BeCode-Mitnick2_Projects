from flask import Flask, render_template, request, redirect, url_for, session

app = Flask(__name__)
app.secret_key = "9d00bd51604df0e5e7431a931d9870b116b96b02329af3b217f332ef49cb171e"

@app.route("/")
def index():
    return render_template("index.html")

users = [
    {'nom': 'admin', 'mdp': '12345'},
    {'nom': 'max', 'mdp': 'password'},
    {'nom': 'user', 'mdp': 'user'},
]

def search_user(name, password):
    for user in users:
        if user['nom'] == name and user['mdp'] == password:
            return user
    return None

@app.route("/login", methods=['POST', 'GET'])
def login():
    if request.method == 'POST':
        user_data = request.form
        user_name = user_data.get('nom')
        user_pwd = user_data.get('mdp')

        user = search_user(user_name, user_pwd)

        if user is not None:
            print("Utilisateur trouvé")
            session['name'] = user['nom']
            print(session)
            return redirect(url_for('index'))
        else:
            print("Utilisateur inconnu")
            return redirect(request.url)
    else:
        print(session)
        if 'name' in session:
            return redirect(url_for('index'))
        return render_template("login.html")

@app.route("/visits")
def visits():
    if "compt" not in session:
        session['compt'] = 1
    else :
        session['compt'] = session['compt'] + 1
    print(session)
    n_visit = session['compt']
    return f"Nombre de visites : {n_visit}"

if __name__ == '__main__':
    app.run(debug=True)