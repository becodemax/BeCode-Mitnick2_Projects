
# Function definition
def add(number_one: int, number_two: int) -> int:
    return number_one + number_two


def multiply(number_one: int, number_two: int) -> int:
    return number_one * number_two


# Unit testing
def test_add():
    test_1 = add(1, 1)
    test_2 = add(2, 3)
    test_3 = add(5, 5)

    assert test_1 == 2
    assert test_2 == 5
    assert test_3 == 10

    print("Code tested. No errors.")


def test_multiply():
    """Test the add function."""
    test_1 = multiply(1, 1)
    test_2 = multiply(2, 3)
    test_3 = multiply(5, 5)

    assert test_1 == 1
    assert test_2 == 6
    assert test_3 == 25

    print("Code tested. No errors.")


if __name__ == "__main__":
    test_add()
    test_multiply()