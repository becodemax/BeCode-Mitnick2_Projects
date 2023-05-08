

def division(num, div):
    if div == 0:
        raise ZeroDivisionError()
    else:
        print(f"{num / div}")

division(5, 4)

class MyError(Exception):
    pass

raise MyError("Hello")