

class Animal:

    def __init__(self, name, age):
        self.name = name
        self.age = age

    def speak(self):
        print(f"I'm {self.name} and I'm {self.age} years old!")

class Dog(Animal):

    def __init__(self, name, age):
        self.name = name
        self.age = age 
        self.type = "dog"

t = Dog("Charles", 7)
t.speak()
