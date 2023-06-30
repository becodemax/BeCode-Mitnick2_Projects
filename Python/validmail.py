
import re

while True:
    
    mail = input("Enter your email : ")

    mail_pattern = r'^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'

    if re.match(mail_pattern, mail):
        print(f'{mail} is valid')
    else:
        print(f"{mail} isn't valid")
    
    password = input("Enter your password : ")

    password_pattern = r'^(?=.{6,})(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9])(?=.+[@#$]).*$'

    if re.match(password_pattern, password):
        print(f"{password} is valid")
        print(f"Connection succeed!")
        break
    else:
        print(f"invalid password")