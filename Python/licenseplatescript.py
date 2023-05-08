
# License plate script

import re

plate = input("Enter your license plate number: ")
pattern = r'^[A-Z]{2}-[0-9]{3}-[A-Z]{2}$'

if re.match(pattern, plate):
    print("Good")
else:
    print("Not Good")