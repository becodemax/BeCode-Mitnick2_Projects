
#!/bin/sh

html=$(curl -s "https://webscraper.io/test-sites/e-commerce/allinone/computers/laptops")

title=$(echo "$html" | sed -n 's/<a href="[^"]*" class="title" title="[^"]*">\([^<]*\)<\/a>/\1/p' | sed 's/\s//g')
descriptions=$(echo "$html" | sed -n 's/<p class="description">\([^<]*\)<\/p>/\1/p' | sed 's/\s//g' |sed 's/&quot;/"/g')
price=$(echo "$html" | sed -n 's/<h4 class="pull-right price">\([^<]*\)<\/h4>/\1/p' | sed 's/\s//g')

paste -d '|' <(echo "$title") <(echo "$descriptions") <(echo "$price") | sed 's/|/ | /g'
