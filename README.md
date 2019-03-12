# TECHNICAL TEST

Summary some PHP technical test.

## Contents

- [Introduction](#technical-test)
  - [Subject](#subject)
    - [Subject 1](#subject-1)
    - [Subject 2](#subject-2)
    - [Subject 3](#subject-3)
- [Installation](#installation)
- [Unit Test](#unit-test)
- [Result](#result)

## Subject

### Subject 1

#### Problem Statement

- You are building a new house. You have already purchased a rectangular area where you will place the house. The basement of the house should be built on a level ground, so you will have to level the entire area. The area is leveled if the difference between the heights of its lowest and highest square meter is at most 1. You want to measure the effort you need to put into ground leveling.

- You are given a ```string[] area```. Each character in area denotes the height at the
corresponding square meter of the terrain area. Using 1 unit of effort, you can change the height of any square meter on his area by 1 up or down. Return the minimum total effort you need to put to obtain a leveled area.

#### Definition

| Class | Method  | Parameters  | Returns  | Method signature |
|---|---|---|---|---|
| TerrainLeveling | getMinimum | string[]  | int | int getMinimum(string[] area) |

#### Constraints
- Area will contain between ```1 and 50``` elements, inclusive.
- Each element of area will be between ```1 and 50``` characters long, inclusive.
- All elements of area will be of the same length.
- Each element of area will contain digits (```'0'­'9'```) only.

### Subject 2

#### Problem Statement

- Let us introduce a new operation called double xor, and use the operator ```^^``` to denote it. For two integers ```A and B```, ```A ^^ B``` is calculated as follows:

- Take the decimal representations of ```A and B```. If they have different lengths, prepend the shorter one with leading zeros until they both have the same length.

- Then, label the digits of ```A``` as ```a1, a2, …, an``` (from left to right) and the digits of ```B``` as ```b1, b2 , ... , bn``` (from left to right). ```C = A ^^ B``` will consist of the digits ```c1 , c2 , ... , cn``` (from left to right), where ```ci = (ai ^ bi) % 10```, where ```^``` is the usual bitwise ```XOR``` operator (see notes for exact definition) and ```x % y``` is the remainder of ```x``` divided by ```y```.

- If ```C``` happens to have any extra leading zeroes, they are ignored.

- For example, ```8765 ^^ 2309 = 462 (c1 = (8 ^ 2) % 10 = 10 % 10 = 0, c2 = (7 ^ 3) % 10 = 4 % 10 = 4, c3 = (6 ^ 0) % 10 = 6 % 10 = 6, c4 = (5 ^ 9) % 10 = 12 % 10 = 2)```, and ```5 ^^ 123 = 126``` (```"5"``` is prepended with two leading zeros to become ```"005"```).

- When multiple ```^^``` operations occur in an expression, they must be evaluated from left to right.

- For example, ```A ^^ B ^^ C``` means (```A ^^ B) ^^ C```. You are given an ```int N```. Return the value of ```N ^^ (N ­ 1) ^^ (N ­ 2) ^^ … ^^ 1```.

#### Definition

| Class | Method  | Parameters  | Returns  | Method signature |
|---|---|---|---|---|
| DoubleXor | calculate | int  | int | int calculate(int N) |

#### Notes

- If ```a and b``` are single bits then ```a ^ b``` is defined as ```(a + b) % 2```. For two integers, ```A and B```, in order to calculate ```A ^ B```, they need to be represented in binary: ```A = (an...a1)2, B = (bn...b1)2``` (if the lengths of their representations are different, the shorterone is prepended with the necessary number of leading zeroes).

- Then ```A ^ B = C = (cn...c1)2```, where ```ci = ai ^ bi```.

- For example, ```10 ^ 3 = (1010)2 ^ (0011)2 = (1001)2 = 9```.

#### Constraints
- ```N``` will be between ```1 and 1,000,000``` inclusive.

### Subject 3

#### Problem Statement

- We are interested in triangles that have integer length sides, all of which are between
minLength and maxLength, inclusive. How many such triangles are there?

- Two triangles differ if they have a different collection of side lengths, ignoring order. Triangles with side lengths ```{2,3,4}``` and ```{4,3,5}``` differ, but ```{2,3,4}``` and ```{4,2,3}``` do not.

- We are only interested in proper triangles; the sum of the two smallest sides of a proper triangle must be strictly greater than the length of the biggest side.

- Create a class TriCount that contains a method count that is given ints minLength and maxLength and returns the number of different proper triangles whose sides all have lengths between minLength and maxLength, inclusive. If there are more than ```1,000,000,000 return ­1```.

#### Definition

| Class | Method  | Parameters  | Returns  | Method signature |
|---|---|---|---|---|
| TriCount | count | int, int | int | int count(int minLength, int maxLength) |

#### Constraints
- minLength is between ```1 and 1,000,000``` inclusive.
- maxLength is between minLength and ```1,000,000``` inclusive.


## Installation
```bash
$ composer install
```

## Unit Test
To run the tests use `phpunit`:
```bash
$ ./vendor/bin/phpunit
```

## Result:
```
PHPUnit 7.5.1 by Sebastian Bergmann and contributors.

..............                         14 / 14 (100%)

Time: 5.84 seconds, Memory: 4.00MB

OK (14 tests, 14 assertions)
```
