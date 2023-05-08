

import re

ip = input("Enter your IP address :")

pattern = r'^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$'

if re.match(pattern, ip):
    print(f'{ip} is a valid IP address')
else:
    print(f'please enter a valid address')