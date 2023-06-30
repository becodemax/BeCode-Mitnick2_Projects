
import re

# It's up to you to write the end

sent_var = ""

with open("./data/data.txt", 'r') as data:
    for sentence in data:
        sent_var = sentence
    print(sent_var)

array = []
with open("./data/data.txt", "r+") as input_file:
    for words in input_file:
        cap = re.sub(r"(?<!\S)(\w)(\w*)|(\b)(\w)(\w*)", lambda x: x.group().capitalize(), words)
        print(cap)

file = open('./data/data.txt', 'w')
file.write(f"{sent_var}\n{cap}")
file.close()