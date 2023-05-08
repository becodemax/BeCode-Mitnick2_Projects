
# super functions

class A:

    def __init__(self):
        print(f"Initializing class A")
    
    def submethod(self, b):
        print(f"Printing from class A :", b)
    
class B(A):

    def __init__(self):
        print(f"Initializing class B")
        super().__init__()

    def submethod(self, b):
        print(f"Printing from class B :", b)
        super().submethod(b+1)

class C(B):

    def __init__(self):
        print(f"Initializing class C")
        super().__init__()

    def submethod(self, b):
        print(f"Printing from class C :", b)
        super().submethod(b+1)

if __name__ == "__main__":
    c = C()
    c.submethod(1)