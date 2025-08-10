# SOLID Principles

- Encapsulate what varies.
- Program to an interface not to an implementation (concrete class).

### S: SRP (Single Responsibility Principle)
- `A class has only, and one only, reason to change.`

### O: OCP (Open/Closed Principle)
- `Software entities (classes, modules, functions, etc...) should be open for extension, but closed for modification.`

### L: Liskov's Substitution
- Barbara Liskov 1994
  - Let f(x) be a property provable about objects x of type T. Then f(Y) should be true for objects y of type S where S is a subtype of T.
- Robert Martin 1996
  - Functions that use pointers of references to base classes must be able to use objects of derived classes without knowing it.
- Rules regarding DOC:
  1. Preconditions can't be strengthened in a subtype.
  2. Postconditions can't be weakened in a subtype.
  3. Invariants of the supertype must be preserved in a subtype.

### I: Interface Segregation
- ISP states that no client should be forced to depend on methods it doesn't use.

### D: Dependency Inversion
