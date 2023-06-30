
import re
     
"""
pattern = "[i|I]"
string = "I am fine ! There are still 6 months left :O"

# Searches the pattern in the previous string and return a `MatchObject` if matches are found,
# otherwise returns `None`.
print(re.search(pattern, string))
     

pattern = "[i|I]"
string = "I am fine ! There are still 6 months left :O"

# Cuts the string according to the occurrence of the pattern.
print(re.split(pattern, string))
"""

s = "sssgdds8sfsfs"
s = "sssgdds-8sfsfs"
s = "sssgdds-8s8fsfs"

numbers = re.findall(r'-?\d+', s)
print(numbers)

text = "21 scouts and 3 tanks fought against 4,003 protestors, so the manager was not 100.00% happy."
num = re.findall(r'\d', text)
print(num)

text = "He had prudently disguised himself but was quickly captured by the police."
ly_end = re.findall(r'\w+ly', text)
print(ly_end)