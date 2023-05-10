''''
def my_decorator(my_function):
    print(my_function.__name__)
    return my_function
'''

def print_decorator(function):
    def new_function(a, b):  # New function behaving as the `function` to be decorated
        print(f"Addition of numbers {a} and {b}")
        return_value = function(a, b)  # Call to `function`
        print(f"Result: {return_value}")
        return return_value

    return new_function  # don't forget to return `new_function`

@print_decorator
def addition(a, b):
    return a + b
     
addition(5, 6)