# scripting tests

class Person:

    def __init__(self, name, firstname, age, por):
        self.name = name
        self.firstname = firstname
        self.age = 20
        self.por = "Bellecourt"

student = Person("Brignoli", "Max", 20, "Manage")
print(student)

class Blackboard:
    
    def __init__(self):
        self.surface = ""

    def write(self, message_written):
        if self.surface != "":
            self.surface += "\n"
        self.surface += message_written

    def read(self):
        print(self.surface)

    def reset(self):
        if self.surface:
            self.surface = ""
        
board = Blackboard()
#print(board.surface)

board.read()

board.write("Hello everyone")
board.write("Are you all right?")
board.read()

board.reset()
board.read()