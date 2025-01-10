# PHP Pass-by-Reference with Objects: An Unexpected Behavior

This repository demonstrates a subtle yet important difference in how PHP's pass-by-reference works with simple data types versus objects. The `increment_array_values` function, while seemingly straightforward, exhibits unexpected behavior when used with arrays of objects.

## The Issue

When an array of objects is passed by reference and modified, the function alters the references within the array, but not the object's properties.  The objects themselves remain unchanged, which can lead to hard-to-debug errors.

## Solution

The `bugSolution.php` file offers a corrected approach, explicitly accessing and modifying the object's properties instead of relying solely on pass-by-reference.

## How to Run

1. Clone this repository.
2. Run `bug.php` to observe the unexpected behavior.
3. Run `bugSolution.php` to see the corrected implementation.