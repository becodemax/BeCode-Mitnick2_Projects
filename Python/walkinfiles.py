
import os

data_path = './data'
filename = "./data/VOEUX75.txt"

'''
file = open(filename, "r")
print(file.read())
file.close()
'''

files_list = []
files_list_final = []

for path, dirs, files in os.walk(data_path):
    for filename in files:
        if filename.startswith('VOEUX'):
            with open(f'./data/{filename}', 'r') as f:
                print(f.read())