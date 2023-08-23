
As of my last update in September 2021, PHP 8 was released on November 26, 2020, bringing a significant number of new features, improvements, and optimizations to the language. Here are some of the key new features and changes introduced in PHP 8:

Just-In-Time (JIT) Compilation:
PHP 8 introduced the concept of JIT compilation, which allows certain parts of PHP code to be compiled into machine code at runtime, leading to improved performance for specific workloads.

Union Types:
Union types allow specifying that a parameter or return type can be of multiple types. For example, you can define a function that accepts arguments of either int or float.

Named Arguments:
PHP 8 introduced named arguments, allowing developers to pass arguments to functions based on the parameter name, rather than relying on the order of parameters in the function signature. This provides better clarity when calling functions with many parameters.

Match Expression:
The match expression is an enhanced version of the switch statement. It provides a more concise and predictable syntax for handling multiple conditions and returning values based on the matching case.

Nullsafe Operator:
The nullsafe operator (?->) allows chaining method calls even if one of the intermediate objects is null. It prevents "null reference" errors and simplifies null-checking code.

Attributes:
Attributes (also known as annotations in some other languages) provide a standardized way to add metadata to classes, functions, properties, and parameters. They can be used for various purposes like serialization, validation, and routing in frameworks.

Constructor Property Promotion:
This feature simplifies class definitions by allowing developers to declare and initialize class properties directly in the constructor parameter list, reducing boilerplate code.

Throw Expression:
The throw expression allows exceptions to be thrown in an expression context, making exception handling more concise and enabling use cases like conditional throws.

New String Functions:
PHP 8 introduced several new string functions, including str_contains(), str_starts_with(), and str_ends_with(), making it easier to work with strings.

New Arithmetic Operators:
PHP 8 introduced the null-coalescing assignment operator (??=) and the nullsafe property access operator (?->) to simplify common programming patterns.

Improvements in Error Handling:
PHP 8 made some changes to error handling, including new Throwable hierarchy and more consistent handling of errors, warnings, and notices.

Performance Improvements:
PHP 8 brought various performance improvements and optimizations, including the JIT compiler, which can lead to faster execution of certain code segments