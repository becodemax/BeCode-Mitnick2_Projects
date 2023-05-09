
import os

data_path = './data'
# filename = "./data/VOEUX75.txt"

'''
file = open(filename, "r")
print(file.read())
file.close()
'''

files_list = []
files_list_final = []

for filename in os.walk(data_path):
    files_list.append(filename)

for lists in files_list:
    for sections in lists:
        for f in sections:
            files_list_final.append(f)