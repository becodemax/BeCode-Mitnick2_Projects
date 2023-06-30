
import re

mails_file = open("/home/max/Mitnick2-Projects/Python/mail.txt")

# mail_pattern = r'^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'

names_mail_pattern = r'@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}'
operator_mail_pattern = r'([a-zA-Z0-9._%+-]+@)|(\.[a-zA-Z]{2,})'
zones_pattern = r'[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.'

list_mail = []
names_list = []
operators_list = []
zones_list = []

for e in mails_file:
    list_mail.append(e)

for names in list_mail:
    n = re.sub(names_mail_pattern, "", names)
    names_list.append(n)

for operators in list_mail:
    o = re.sub(operator_mail_pattern, "", operators)
    operators_list.append(o)

for zones in list_mail:
    z = re.sub(zones_pattern, "", zones)
    zones_list.append(z)

print(f"{len(list_mail)} mails found!")
print(f"{len(names_list)} names found!")
print(f"{len(operators_list)} operators found!")
print(f"{len(zones_list)} zones found!")