# scripting tests

class Person:

    def __init__(self, lastname, firstname):
        self.lastname = lastname
        self.firstname = firstname

class Agent(Person):

    def __init__(self, lastname, firstname, id_number):
        Person.__init__(self, lastname, firstname)
        self.id_number = id_number

    def __str__(self):
        return f"Agent {self.lastname}. {self.firstname} {self.lastname}, ID {self.id_number}"
    
agent_3 = Agent("Brignoli", "Max", "3")
print(agent_3)