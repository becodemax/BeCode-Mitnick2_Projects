
import pycountry

country_list = []
def country_function():
    countries = pycountry.countries
    for country in countries:
        country_list.append(country.name)

country_function()
print(country_list)