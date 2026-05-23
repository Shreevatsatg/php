PHP Lab Programs – 6th Semester

A complete collection of 6th Semester PHP Laboratory Programs developed using PHP, HTML, MySQL, and basic web technologies.
This repository contains practical programs covering:

Form handling
Sessions
String manipulation
Arrays
OOP concepts in PHP
Database connectivity using MySQL
CRUD operations
Matrix operations
Hotel reservation system
Billing systems
Authentication systems

These programs are designed for BCA / MCA / Computer Science students to understand core PHP concepts with simple and beginner-friendly implementations.

Source programs are based on your uploaded lab list document.

📚 Technologies Used
PHP
HTML5
CSS (basic)
MySQL
XAMPP / WAMP Server
phpMyAdmin
⚙️ Requirements

Before running the programs, install:

XAMPP / WAMP
PHP 7+
MySQL
Web Browser
🚀 How to Run the Programs
Install XAMPP/WAMP
Start:
Apache Server
MySQL Server
Copy project folder into:
htdocs (XAMPP)
Open browser and run:
http://localhost/foldername/

For database programs:

Open phpMyAdmin
Create database:
CREATE DATABASE phpdb;
Import/Create required tables
Run the respective PHP files
📂 Programs Included
PART A
1. Contact Form using PHP
Description

A simple contact form that accepts:

Name
Email
Message

The submitted data is displayed back to the user using PHP form handling.

Concepts Used
HTML Forms
POST Method
PHP Variables
Form Submission Handling
Files
index.php
2. Armstrong Number Checker
Description

Checks whether a number is an Armstrong number or not.

If valid:

Displays all Armstrong numbers from 1 to entered number.
Features
Positive number validation
Empty input validation
Armstrong calculation logic
Concepts Used
Functions
Loops
Validation
Mathematical operations
3. Session Handling Login System
Description

Demonstrates PHP session management using:

Login
Welcome page
Logout functionality
Features
Stores username/password in session
Redirects users
Destroys session on logout
Files
index.php
welcome.php
Concepts Used
PHP Sessions
Header Redirection
Authentication basics
4. PHP Calculator
Description

Performs:

Addition
Subtraction
Multiplication
Division
Features
Division by zero handling
Numeric validation
Concepts Used
Switch case
Form handling
Error handling
5. Age Calculator
Description

Calculates age using Date of Birth.

Output

Displays:

Years
Months
Days
Concepts Used
DateTime class
Date difference calculation
6. Dictionary using Associative Arrays
Description

Implements a mini dictionary using associative arrays.

Features
Searches meanings of words
Displays “Word not found” message
Concepts Used
Associative Arrays
Array Functions
7. String Manipulation Program
Description

Performs multiple string operations:

Length
Uppercase
Lowercase
Reverse
Palindrome
Shuffle
Word count
Replace characters
Concepts Used
PHP String Functions
8. Word Frequency Analyzer
Description

Analyzes frequency of words in a sentence.

Features
Case-insensitive analysis
Most used word
Least used word
Ascending/Descending sorting
Concepts Used
Arrays
Sorting Functions
String Processing
PART B
1. Student Registration Form
Description

A complete student registration form with:

Textboxes
Radio buttons
Checkboxes
Dropdowns
Textareas
Features

Displays entered data neatly on another page.

Files
index.php
B1Disp.php
Concepts Used
Form controls
Data display
POST handling
2. Matrix Operations
Description

Performs:

Matrix Addition
Matrix Multiplication
Features
Dynamic textbox generation
Matrix validation
Concepts Used
Nested loops
Dynamic forms
Mathematical operations
3. Distance Calculator using OOP
Description

Implements a PHP class to:

Add distances
Find difference between distances
Features

Distance represented in:

Feet
Inches
Concepts Used
Classes & Objects
Constructors
Methods
OOP in PHP
4. Login Authentication using MySQL
Description

Validates user credentials stored in MySQL database.

Features
Database connectivity
Login validation
Database Table

usercred

Concepts Used
MySQLi
SQL Queries
Authentication
5. Feedback Form with Database Storage
Description

Stores user feedback into MySQL database.

Fields
Name
Email
Subject
Message
Database Table

feedback

Concepts Used
Insert Queries
Form Handling
Database Operations
6. Customer Management System
Description

A mini CRUD-based customer management system.

Functionalities
Add Customer
Delete Customer
Search Customer
Sort Records
Display Records
Database Table

customers

Files
methods.php
add.php
delete.php
search.php
index.php
Concepts Used
CRUD Operations
Modular PHP
MySQL Queries
7. Book Shopping Billing System
Description

Generates bill for books purchased.

Features
Calculates discount
Calculates net bill
Stores bill data in database
Database Table

bills

Concepts Used
Billing logic
Database insertion
Form processing
8. Hotel Reservation Management System
Description

A hotel room management system using PHP and MySQL.

Features
Add Rooms
Check-in
Check-out
Display available/booked rooms
Update room status
Database Table

hotel

Files
methods.php
index.php
Concepts Used
CRUD operations
Database updates
Reservation logic
🗄️ Database Tables Used
Table Name	Purpose
usercred	Login authentication
feedback	Feedback storage
customers	Customer records
bills	Book billing data
hotel	Hotel reservation system
🎯 Learning Outcomes

By completing these programs, students can learn:

PHP basics
Form handling
Sessions & cookies
Validation techniques
OOP concepts
Database connectivity
CRUD operations
Dynamic web applications
📸 Output Screenshots

The repository also contains output screenshots for better understanding of:

Form interfaces
Database operations
Program outputs
🧠 Educational Purpose

This repository is created for:

BCA 6th Semester PHP Lab
MCA preparation
PHP beginners
Academic practical reference
🔮 Future Improvements

Possible future enhancements:

Better UI using Bootstrap
Prepared Statements for security
Password hashing
Responsive design
MVC structure
API integration
👨‍💻 Author

Shreevatsa
BCA Student | PHP Learner | Aspiring MCA Student

⭐ Support

If you found this repository helpful:

Star the repository
Fork it
Share with classmates
📄 License

This project is for educational and academic purposes only.