# Design Patterns Examples

This repository contains simple examples of common **Creational Design Patterns** in PHP.

---

## 🏭 Factory Method
**Definition:**  
A creational pattern that defines an interface for creating an object, but lets subclasses decide which class to instantiate.  
👉 It focuses on creating **one type of product** at a time.

**Example idea:**  
- `BMWFactory` creates a `BMWCar`.  
- `BenzFactory` creates a `BenzCar`.

---

## 🏢 Abstract Factory
**Definition:**  
A creational pattern that provides an interface to create **families of related objects** without specifying their concrete classes.  
👉 It focuses on creating **multiple related products** consistently.

**Example idea:**  
- `WindowsFactory` creates `WindowsButton` + `WindowsCheckbox`.  
- `MacFactory` creates `MacButton` + `MacCheckbox`.

---

## 🛠️ Builder
**Definition:**  
A creational pattern that separates the construction of a complex object from its representation.  
👉 It lets you create the same object step by step with different variations.

**Example idea:**  
- `CarBuilder` builds a `Car` by setting engine, wheels, and color step by step.  
- Different builders can create **different types of cars** (e.g., `BenzCarBuilder`, `BMWCarBuilder`).

---

## 🚀 How to use
Each folder contains:
- PHP classes implementing the pattern.  
- Example/Test file showing how to use it.  

You can run the examples with:

```bash
php <filename>.php
