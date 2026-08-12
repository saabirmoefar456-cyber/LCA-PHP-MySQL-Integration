# AfriStaff

AfriStaff is a simple HR staff directory web application built for a growing
company. It allows HR staff to create, view, update, and delete employee
records through a browser-based interface.

## Tech Stack

- **PHP** — server-side logic and database interaction
- **MySQL** — relational database for storing staff records
- **XAMPP** — local development environment (Apache + MySQL)
- **phpMyAdmin** — web-based MySQL database management
- **HTML** — page structure and forms
- **CSS** — styling and layout

## Prerequisites

- XAMPP installed, with Apache and MySQL enabled
- MySQL must be running on port 3307

## Database Setup

1. Open phpMyAdmin at `http://localhost/phpmyadmin`
2. Click the **SQL** tab
3. Run the following SQL:

```sql
CREATE DATABASE IF NOT EXISTS afristaff_db;
USE afristaff_db;

CREATE TABLE IF NOT EXISTS staff (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  department VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO staff (first_name, last_name, department, email) VALUES
  ('Naledi', 'Khumalo', 'IT', 'naledi.khumalo@afristaff.co.za'),
  ('Johan', 'van der Merwe', 'Finance', 'johan.vandermerwe@afristaff.co.za'),
  ('Aisha', 'Patel', 'HR', 'aisha.patel@afristaff.co.za');
```

## Installation

1. Clone this repository.
2. Copy the `week4_ex01_php_mysql_integration` folder into your XAMPP
   `htdocs` directory.

## How to Run

1. Start **Apache** and **MySQL** in the XAMPP Control Panel.
2. Navigate to `http://localhost/week4_ex01_php_mysql_integration/index.php`
   in a browser.

## Project Structure
