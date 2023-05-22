from flask import Flask, render_template
from flask_wtf import FlaskForm
from wtforms import StringField, SubmitField, FieldList, FormField, validators, RadioField, SelectField
from wtforms.validators import DataRequired, InputRequired
import pycountry

# Create Flask Instance
app = Flask(__name__)
app.config['SECRET_KEY'] = "secretkey"

# Create Route decorator
@app.route('/')
def index():
    return "Hello World!"

# Create Form Class
class NamerForm(FlaskForm):
    name = StringField("Prénom : ", validators=[DataRequired()])
    lastname = StringField("Nom : ", validators=[DataRequired()])
    country = SelectField("Pays : ", validators=[InputRequired()])
    submit = SubmitField("Soumettre")

# Create Form Page
@app.route('/formulaire_wtforms', methods=['GET', 'POST'])
def formulaire_wtforms():
    name = None
    lastname = None
    
    country_list = []
    countries = pycountry.countries
    for country in countries:
        country_list.append(country.name)

    form = NamerForm()
    if form.validate_on_submit():
        name = form.name.data
        form.name.data = ''
        lastname = form.lastname.data
        form.lastname.data = ''
    return render_template("formulaire_wtforms.html",
                           name = name,
                           lastname = lastname,
                           country = country_list,
                           form = form,)

if __name__ == '__main__':
    app.run(debug=True)