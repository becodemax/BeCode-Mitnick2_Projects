
becode_filename = "./assets/becode.html"
file = open(becode_filename, "r")

html_doc = file.read()
file.close()

from bs4 import BeautifulSoup

# In my file (becode.org) by looking at this html script,
# we can see that the main title is arranged in the `h1` tag
soup = BeautifulSoup(html_doc, "lxml")

for tag in soup.find_all("h1"):
    # We only retrieve the content ==> .text
    print(tag.text)