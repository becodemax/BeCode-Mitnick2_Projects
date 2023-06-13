
#!/bin/sh


html=$(curl -s "https://webscraper.io/test-sites/e-commerce/allinone/computers/laptops")

# TESTS

# description=$(cat "$html" | grep '<p class="description">' | cut -d '>' -f2 | cut -d '<' -f1 | sed 's/\&quot;/\"/' | cut -d ',' -f 2-)
# title=$(cat "$html" | grep 'class="title"' | grep -E -o 'title="[^"]*">' | cut -d '"' -f2 | sed 's/\&quot;/\"/')
# price=$(cat "$html" | grep -E -o '\$[0-9]+(\.[0-9]{2})?')
content=$(echo "$html" | sed -n '/<div class="caption">/,/<\/div>/p' | sed -E 's/<[^>]*>//g' | sed '/^\s*$/d')

echo "$content"
# echo "$title | $description | $price"



# title=$(echo "$html" | sed -n 's/<a href="[^"]*" class="title" title="[^"]*">\([^<]*\)<\/a>/\1/p')
# descriptions=$(echo "$html" | sed -n 's/<p class="description">\([^<]*\)<\/p>/\1/p' | sed 's/&quot;/"/g')
# price=$(echo "$html" | sed -n 's/<h4 class="pull-right price">\([^<]*\)<\/h4>/\1/p')

# echo "$title $descriptions $price" | sed -E 's/\s{2,}/ | /g'
