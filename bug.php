In PHP, a common yet subtle error arises when dealing with the ternary operator combined with variable assignment and potentially null values.  Consider this scenario:

```php
$result = ($someCondition) ? calculateSomething() : null;
//Further operations with $result
```

If `calculateSomething()` might return null (or any other falsey value) and `$someCondition` evaluates to false, `$result` will be assigned `null`.  However, subsequent operations expecting a non-null value will fail. The problem is exacerbated when dealing with nested ternary operators or complex conditional logic, making the error hard to pinpoint.

For instance:

```php
$value = someFunctionThatMightReturnNull();
$result = ($value !== null) ? $value->someMethod() : 'default';
```

If `someFunctionThatMightReturnNull()` returns null, attempting to access `$value->someMethod()` will trigger a fatal error. 