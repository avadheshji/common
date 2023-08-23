<?php
//Solid Principle
//https://medium.com/backticks-tildes/the-s-o-l-i-d-principles-in-pictures-b34ce2f1e898

1. S - single responsibilty

  A class should have a single responsibility

2. O - Open closed

    Classes should be open for extension, but closed for modification

3. L — Liskov Substitution

  Parent class job should also done by child class. child can do another job but also it must do the job which parent can.

4. I — Interface Segregation

  Clients should not be forced to depend on methods that they do not use.

  A Class should perform only actions that are needed to fulfil its role. Any other action should be removed completely or moved somewhere else if it might be used by another Class in the future.

5. D -  Dependency Inversion
  High Level modules should not dependent on low level modules. But should depend on the abstraction.
  Abstraction should not depend on details. Details should depend on abstractions.

  High-level Module(or Class): Class that executes an action with a tool.

  Low-level Module (or Class): The tool that is needed to execute the action

  Abstraction: Represents an interface that connects the two Classes.

  Details: How the tool works

  This principle says a Class should not be fused with the tool it uses to execute an action. Rather, it should be fused to the interface that will allow the tool to connect to the Class.

  It also says that both the Class and the interface should not know how the tool works. However, the tool needs to meet the specification of the interface.






The SOLID principles are a set of five design principles for writing maintainable and scalable software, originally introduced by Robert C. Martin. These principles are widely used in object-oriented programming and can be applied to various programming languages, including PHP. The SOLID acronym stands for the following principles:

  Single Responsibility Principle (SRP):
  The SRP states that a class should have only one reason to change, meaning it should have a single responsibility. In other words, a class should be focused on doing one thing and doing it well. This principle helps in keeping classes small, focused, and easier to maintain.
  
  Open/Closed Principle (OCP):
  The OCP states that a class should be open for extension but closed for modification. In other words, the behavior of a class can be extended without modifying its existing code. This is usually achieved through the use of interfaces, abstract classes, and inheritance.
  
  Liskov Substitution Principle (LSP):
  The LSP states that objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program. In simpler terms, a subclass should be able to replace its parent class without changing the expected behavior of the program.
  
  Interface Segregation Principle (ISP):
  The ISP states that a class should not be forced to implement interfaces it does not use. It encourages the creation of small, focused interfaces rather than large, monolithic ones. Clients should not be forced to depend on interfaces they don't need.
  
  Dependency Inversion Principle (DIP):
  The DIP states that high-level modules should not depend on low-level modules. Instead, both should depend on abstractions. It promotes loose coupling and encourages the use of dependency injection to provide dependencies from external sources.


?>
