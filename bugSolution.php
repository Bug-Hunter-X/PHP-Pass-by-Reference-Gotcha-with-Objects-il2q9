```php
function increment_object_values(array &$arr) {
  foreach ($arr as &$obj) {
    $obj->value++;
  }
}

class MyClass {
  public $value;
  public function __construct($value) {
    $this->value = $value;
  }
}

$myArray = [new MyClass(1), new MyClass(2), new MyClass(3)];
increment_object_values($myArray);
print_r($myArray); // Output: Array ( [0] => MyClass Object ( [value] => 2 ) [1] => MyClass Object ( [value] => 3 ) [2] => MyClass Object ( [value] => 4 ) )
```