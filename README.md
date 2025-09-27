# Design Patterns Examples

This repository contains simple examples of common **Creational Design Patterns** in PHP.

---

## Factory Method  
**Definition:**  
A creational pattern that defines an interface for creating an object, but lets subclasses decide which class to instantiate.  
👉 It focuses on creating **one type of product** at a time.  

**Example idea:**  
- `BMWFactory` creates a `BMWCar`.  
- `BenzFactory` creates a `BenzCar`.  

---

## Abstract Factory  
**Definition:**  
A creational pattern that provides an interface to create **families of related objects** without specifying their concrete classes.  
👉 It ensures that related products are created consistently.  

**Example idea (Cars):**  
- `CarAbstractFactory` can create multiple related cars.  
- For example:  
  - `createBMWCar()` → returns a `BMWCar`.  
  - `createBenzCar()` → returns a `BenzCar`.  

**In this example:**  
We can use the same factory (`CarAbstractFactory`) to create different types of cars depending on budget or requirements, while keeping the creation logic centralized and consistent.  

---

## Builder  
**Definition:**  
A creational pattern that separates the construction of a complex object from its representation.  
👉 It lets you create the same object step by step with different variations.  

**Example idea:**  
- `CarBuilder` builds a `Car` by setting engine, wheels, and color step by step.  
- Different builders can create **different types of cars** (e.g., `BenzCarBuilder`, `BMWCarBuilder`).  

---

## Pool  
**Definition:**  
A creational pattern that allows you to **reuse a set of objects** instead of creating and destroying them repeatedly.  
👉 Useful when object creation is **expensive** in terms of time or memory.  

**Example idea:**  
- `CarPool` manages a pool of `Car` objects.  
- You can **get** a car from the pool, **release** it back, and reuse it instead of creating a new one.  

---

## How to use  
Each folder contains:  
- PHP classes implementing the pattern.  
- Example/Test file showing how to use it.  

You can run the examples with:  

```bash
# Run specific test
vendor/bin/phpunit tests/FactoryMethodTest.php

# Run all tests
vendor/bin/phpunit
```
