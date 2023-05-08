

class Becodian:
    """
    Class that defines a person who is part of Becode.
    """

    def __init__(self, name, is_staff_member):
        self.name = name
        self.is_staff_member = is_staff_member

    def introduce_becodian(self):
        if self.is_staff_member:
            return f"{self.name} is a staff member!"
        else:
            return f"{self.name} is a learner!"

# We create a new Becodian called 'ludo' who is a staff member.
ludo = Becodian("ludo", True)

# We print the ouput of introduce_becodian for ludo
print(ludo.introduce_becodian())
     

# Create you Learner class here!

class Learner(Becodian):

    def __init__(self, name, promotion):
        self.name = name
        self.promotion = promotion

    def introduce_learner(self):
        self.is_staff_member = False
        if self.is_staff_member:
            super().introduce_becodian()
        else:
            return f"{self.name} is a learner! From {self.promotion}!"
    
max = Learner("Max", "Mitnick 2")

print(max.introduce_learner())

# This cell should print "Jeremy is a learner! From Bouman 1"
jeremy = Learner("Jeremy", "Bouman 1")

print(jeremy.introduce_learner())
     

# This cell should print "Giuliano is a learner! From Bouman 1"
giuliano = Learner("Giuliano", "Bouman 1")

print(giuliano.introduce_learner())
     

# This cell should print "Mathieu is a learner! From Bouman 1"
mathieu = Learner("Mathieu", "Bouman 1")

print(mathieu.introduce_learner())
     

# This cell should print "Geoffrey is a learner! From Bouman 1"
geoffrey = Learner("Geoffrey", "Bouman 1")

print(geoffrey.introduce_learner())
     

# This cell should print "Mathieu is a learner! From Woods 1"
adrien = Learner("Adrien", "Woods 1")

print(adrien.introduce_learner())