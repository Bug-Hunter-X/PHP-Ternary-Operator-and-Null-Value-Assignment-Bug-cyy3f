# PHP Ternary Operator and Null Value Assignment Bug

This repository demonstrates a subtle bug in PHP related to using the ternary operator with potential null values. The bug can lead to unexpected errors, especially in complex conditional logic.

## Bug Description

When the ternary operator is used for variable assignment and the condition evaluates to false, a null or falsey value might be assigned. If the following operations assume a non-null value, errors can occur. This issue is compounded with nested ternaries or complex logic.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the error.

## Solution

The provided `bugSolution.php` file shows the correct implementation using null checks before performing operations on potential null variables.  This prevents unexpected errors.

## Lessons Learned

Always validate the values assigned by the ternary operator, particularly when dealing with potentially null variables.   Employ appropriate null checks before operations relying on non-null values to avoid runtime errors.