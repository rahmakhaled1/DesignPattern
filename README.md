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

## Repository + Data Mapper  
**Definition:**  
The **Repository Pattern** provides a layer that separates the business logic from the data access logic.  
👉 It allows your application to work with data as objects, without knowing how the data is actually stored or retrieved.  

The **Data Mapper Pattern** is responsible for transferring data between the in-memory objects and the database (or any data source) while keeping them independent from each other.  
👉 It maps raw data (arrays, rows, JSON, etc.) into objects, and maps objects back into data for persistence.  

---

**Example idea:**  
- `UserRepository` provides high-level operations like `find()`, `save()`, and `delete()` for `User` objects.  
- `ArrayEntityManager` acts as the persistence layer (a simple in-memory database).  
- `UserDataMapper` converts between array data and `User` entity objects.  

**Example flow:**  
1. The application asks the repository: `find(1)`  
2. The repository calls the persistence layer to retrieve data for ID 1  
3. The persistence layer returns an array → `['name' => 'ahmed', 'email' => 'ahmed@test.com']`  
4. The Data Mapper converts the array into a `User` object  
5. The repository returns the `User` object to the application  

---

**Benefits:**  
- Keeps business logic separate from data access logic  
- Makes the code easier to test and maintain  
- Allows switching between different data sources easily  
- Promotes a clean and modular architecture  

---

**In this example:**  
- `PersistenceInterface` → defines basic operations for saving, retrieving, and deleting data  
- `ArrayEntityManager` → provides an in-memory implementation of persistence  
- `UserDataMapper` → converts data between arrays and `User` objects  
- `UserRepository` → offers high-level methods to interact with `User` entities through the mapper and persistence layer  

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
