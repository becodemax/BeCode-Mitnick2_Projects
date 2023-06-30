import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="bob",
  password="password",
  database="phishing"
)

mycursor = mydb.cursor()

sql = "INSERT INTO creds (username, password) VALUES (%s, %s)"
val = ("John", "Highway21")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")