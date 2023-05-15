# Import the built-in unittest module
import unittest

# Function definition
def add(number_one: int, number_two: int) -> int:
    return number_one + number_two


def multiply(number_one: int, number_two: int) -> int:
    return number_one * number_two


# Unit testing
class TestMathFunctions(unittest.TestCase):
    """Class that will test all the math related functions."""

    def test_add(self):
        """Test the add function."""
        test_1 = add(1, 1)
        test_2 = add(2, 3)
        test_3 = add(5, 5)

        # Error here
        self.assertEqual(test_1, 200)
        self.assertEqual(test_2, 5)
        self.assertEqual(test_3, 10)

    def test_multiply(self):
        """Test the multiply function."""
        test_1 = multiply(1, 1)
        test_2 = multiply(2, 3)
        test_3 = multiply(5, 5)

        # Check that there is an output
        self.assertTrue(test_1)
        self.assertTrue(test_2)
        self.assertTrue(test_3)
        # Check that the output has the right value
        self.assertEqual(test_1, 1)
        self.assertEqual(test_2, 6)
        self.assertEqual(test_3, 25)


if __name__ == "__main__":
    # In a .py file use:
    # unittest.main()
    # In jupyter notebook, we need a add some params:
    unittest.main(argv=["first-arg-is-ignored"], exit=False)