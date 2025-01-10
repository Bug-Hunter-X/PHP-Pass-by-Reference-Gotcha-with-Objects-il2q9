```php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$myArray = [1, 2, 3];
increment_array_values($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//The issue arises when you use the same function with arrays containing objects:

class MyClass {
  public $value;
  public function __construct($value) {
    $this->value = $value;
  }
}

$myArray = [new MyClass(1), new MyClass(2), new MyClass(3)];
increment_array_values($myArray); //This will not change the object's values.
print_r($myArray); // Output: Array ( [0] => MyClass Object ( [value] => 1 ) [1] => MyClass Object ( [value] => 2 ) [2] => MyClass Object ( [value] => 3 ) )
```