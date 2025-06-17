# PHP Control Structures: A Detailed Guide

This guide covers essential PHP control structures: conditional statements, logical operators, switch statements, and loops (for, foreach, while). Each section includes theory and code examples.

---

## 1. Conditional Statements

Conditional statements let you execute code based on conditions.

### if, else, elseif

```php
$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
} elseif ($age >= 13) {
    echo "You are a teenager.";
} else {
    echo "You are a child.";
}
```

- **if**: Checks a condition.
- **elseif**: Checks another condition if the previous was false.
- **else**: Runs if all previous conditions are false.

---

## 2. Logical Operators

Logical operators combine multiple conditions.

- `&&` (AND): True if both conditions are true.
- `||` (OR): True if at least one condition is true.
- `!` (NOT): True if the condition is false.

```php
$age = 25;
$hasID = true;
if ($age >= 18 && $hasID) {
    echo "Entry allowed.";
}
if ($age < 18 || !$hasID) {
    echo "Entry denied.";
}
```

---

## 3. Switch Statement

Use `switch` to compare a variable against multiple values.

```php
$day = 'Monday';
switch ($day) {
    case 'Monday':
        echo "Start of the week";
        break;
    case 'Friday':
        echo "End of the week";
        break;
    default:
        echo "Midweek";
}
```

- Each `case` is checked. `break` stops further checking.
- `default` runs if no case matches.

---

## 4. Loops

Loops repeat code multiple times.

### for Loop

Use when you know how many times to repeat.

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}
```

### foreach Loop

Use to iterate over arrays.

```php
$fruits = ['apple', 'banana', 'cherry'];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
```

### while Loop

Repeats as long as a condition is true.

```php
$count = 1;
while ($count <= 3) {
    echo "Count: $count<br>";
    $count++;
}
```

---

## Summary Table

| Structure | Use Case                     |
| --------- | ---------------------------- |
| if/else   | Conditional logic            |
| switch    | Multiple value comparison    |
| for       | Fixed number of iterations   |
| foreach   | Loop through arrays          |
| while     | Loop with unknown iterations |

---
