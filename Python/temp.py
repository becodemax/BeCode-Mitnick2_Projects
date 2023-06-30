
import os

files_path = "./assets"
filename = './assets/data.xml'
'''
file = open(filename, "r")
print(file.read())
file.close()
'''

for root, dirs, files in os.walk(files_path):
    for name in files:
        if name.endswith((".html", ".htm")):