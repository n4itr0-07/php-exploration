# What is a class?

In the real world, you can find many same kinds of objects. For example, a bank has many bank accounts. All of them have account numbers and balances.

These bank accounts are created from the same blueprint. In object-oriented terms, we say that an individual bank account is an instance of a Bank Account class.

By definition, a class is the blueprint of objects. For example, from the Bank Account class, you can create many bank account objects.

The following illustrates the relationship between the `BankAccount` class and its objects. From the `BankAccount` class you can create many `BankAccount` objects. And each object has its own account number and balance.

![Relationship between BankAccount class and its objects](https://www.phptutorial.net/wp-content/uploads/2021/03/PHP-Objects.png)

---

## **Define a class**

To define a class, you specify the class keyword followed by a name like this:

```php
<?php

class ClassName
{
    //...
}
```

For example, the following defines a new class called BankAccount:

```php
<?php

class BankAccount
{
}
```

**[Try It](https://www.phptutorial.net/playground/?q=PD9waHAKCmNsYXNzIEJhbmtBY2NvdW50CnsKfQ)**

By convention, you should follow these rules when defining a class:

- A class name should be in the upper camel case where each word is capitalized. For example, `BankAccount`, `Customer`, `Transaction`, and `DebitNote`.

- If a class name is a noun, it should be in the singular noun.

- Define each class in a separate PHP file.

From the BankAccount class, you can create a new bank account object by using the new keyword like this:

```php
<?php

class BankAccount
{
}

$account = new BankAccount();
```

**[Try It](https://www.phptutorial.net/playground/?q=PD9waHAKCmNsYXNzIEJhbmtBY2NvdW50CnsKfQoKJGFjY291bnQgPSBuZXcgQmFua0FjY291bnQoKTs)**

In this syntax, the `$account` is a variable that references the object created by the `BankAccount` class. The parentheses that follow the BankAccount class name are optional. Therefore, you can create a new BankAccount object like this:

```php
$account = new BankAccount;
```

The process of creating a new object is also called instantiation. In other words, you instantiate an object from a class. Or you create a new object from a class.

The `BankAccount` class is empty because it doesn’t have any state and behavior.

---

## **Add properties to a class**

To add properties to the BankAccount class, you place variables inside it. For example:

```php
<?php

class BankAccount
{
    public $accountNumber;
    public $balance;
}
```

**[Try It](https://www.phptutorial.net/playground/?q=PD9waHAKCmNsYXNzIEJhbmtBY2NvdW50CnsKICAgIHB1YmxpYyAkYWNjb3VudE51bWJlcjsKICAgIHB1YmxpYyAkYmFsYW5jZTsKfQ)**

The `BankAccount` class has two properties `$accountNumber` and `$balance`. In front of each property, you see the `public` keyword.

The `public` keyword determines the [visibility of a property](https://www.phptutorial.net/php-oop/php-access-modifiers/). In this case, you can access the property from the outside of the class.

To access a property, you use the object operator (->) like this:

```php
<?php

$object->property;
```

The following example shows how to set the values of the accountNumber and balance properties:

```php
<?php

class BankAccount
{
    public $accountNumber;
    public $balance;
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

echo "The bank account $account->accountNumber has a balance of $$account->balance";
```

**[Try It](https://www.phptutorial.net/playground/?q=PD9waHAKCmNsYXNzIEJhbmtBY2NvdW50CnsKICAgIHB1YmxpYyAkYWNjb3VudE51bWJlcjsKICAgIHB1YmxpYyAkYmFsYW5jZTsKfQoKJGFjY291bnQgPSBuZXcgQmFua0FjY291bnQoKTsKCiRhY2NvdW50LT5hY2NvdW50TnVtYmVyID0gMTsKJGFjY291bnQtPmJhbGFuY2UgPSAxMDA7CgplY2hvICJUaGUgYmFuayBhY2NvdW50ICRhY2NvdW50LT5hY2NvdW50TnVtYmVyIGhhcyBhIGJhbGFuY2Ugb2YgJCRhY2NvdW50LT5iYWxhbmNlIjs)**

Besides the public keyword, PHP also has private and protected keywords

---

## **Add methods to a class**

The following shows the syntax for defining a method in a class:

```php
<?php

class ClassName
{
    public function methodName(parameter_list)
    {
        // implementation
    }
}
```

Like a property, a method also has one of the three visibility modifiers: `public`, `private`, and `protected`. If you define a method without any visibility modifier, it defaults to public.

The following example defines the `deposit()` method for the `BankAccount` class:

```php
<?php

class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
}
```

The `deposit()` method accepts an argument `$amount`. It checks if the `$amount` is greater than zero before adding it to the balance.

To call a method, you also use the object operator (->) as follows:

```php
$object->method(arguments)
```

The new syntax in the `deposit()` method is the `$this` variable. The `$this` variable is the current object of the BankAccount class.

For example, when you create a new object `$account` and call the `deposit()` method, the `$this` inside the method is the `$account` object:

```php
$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

$account->deposit(100);

echo "The bank account $account->accountNumber has a balance of $$account->balance";
```

**[Try It](https://www.phptutorial.net/playground/?q=PD9waHAKCmNsYXNzIEJhbmtBY2NvdW50CnsKICAgIHB1YmxpYyAkYWNjb3VudE51bWJlcjsKCiAgICBwdWJsaWMgJGJhbGFuY2U7CgogICAgcHVibGljIGZ1bmN0aW9uIGRlcG9zaXQoJGFtb3VudCkKICAgIHsKICAgICAgICBpZiAoJGFtb3VudCA-IDApIHsKICAgICAgICAgICAgJHRoaXMtPmJhbGFuY2UgKz0gJGFtb3VudDsKICAgICAgICB9CiAgICB9Cn0KCgokYWNjb3VudCA9IG5ldyBCYW5rQWNjb3VudCgpOwoKJGFjY291bnQtPmFjY291bnROdW1iZXIgPSAxOwokYWNjb3VudC0-YmFsYW5jZSA9IDEwMDsKCiRhY2NvdW50LT5kZXBvc2l0KDEwMCk7CgplY2hvICJUaGUgYmFuayBhY2NvdW50IHskYWNjb3VudC0-YWNjb3VudE51bWJlcn0gaGFzIGEgYmFsYW5jZSBvZiB7JGFjY291bnQtPmJhbGFuY2V9VVNEIjs)**

Similarly, you can add the `withdraw()` method to the `BankAccount` class as follows:

```php
<?php

class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
                return false;

    }
}
```

The `withdraw()` method checks the current balance.

If the balance is less than the withdrawal amount, the `withdraw()` method returns `false`.
