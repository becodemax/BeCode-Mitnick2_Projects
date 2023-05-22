from flask import Flask, render_template, redirect, url_for, request
from flask_wtf import FlaskForm
from wtforms import StringField, SubmitField, EmailField, RadioField, SelectMultipleField, widgets, TextAreaField
from wtforms.validators import DataRequired, StopValidation, Length

# Create Flask Instance
app = Flask(__name__)
app.config['SECRET_KEY'] = "secretkey"

# Create Route decorator
@app.route('/')
def index():
    return "Hello World!"

class MultiCheckboxField(SelectMultipleField):
    widget = widgets.ListWidget(prefix_label=False)
    option_widget = widgets.CheckboxInput()

class MultiCheckboxAtLeastOne():
    def __init__(self, message=None):
        if not message:
            message = 'At least one option must be selected.'
        self.message = message

    def __call__(self, form, field):
        if len(field.data) == 0:
            raise StopValidation(self.message)

# Create Form Class
class NamerForm(FlaskForm):
    name = StringField("Prénom: ", validators=[DataRequired()])
    lastname = StringField("Nom: ", validators=[DataRequired()])
    email = EmailField('Email: ', validators=[DataRequired(), Length(max=60)])
    genre_radio = RadioField('Genre: ', choices=[('1', 'Homme'), ('2', 'Femme'), ('3', 'Ananas')], validators=[DataRequired()])
    demand_checkbox = MultiCheckboxField('Demande: ', choices=['Autre', 'Demande', 'Réparation'], validators=[MultiCheckboxAtLeastOne()])
    comment = TextAreaField('Message: ', validators=[DataRequired()])
    submit = SubmitField("Soumettre")

# Create Form Page
@app.route('/formulaire_wtforms', methods=['GET', 'POST'])
def formulaire_wtforms():
    name = None
    lastname = None
    form = NamerForm()
    if name != None:
        return render_template('thankyou.html')
    else:
        return render_template("formulaire_wtforms.html",
                            name = name,
                            lastname = lastname,
                            form = form,)

if __name__ == '__main__':
    app.run(debug=True)