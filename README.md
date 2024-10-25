~Registration Form~


Overview:

This project implements a simple registration form using HTML, CSS, and PHP, with a PostgreSQL database backend. The form captures user information, including full name, date of birth, email address, and contact number. It ensures unique entries for email and contact number.

Features:

1)User registration with validation for unique email and contact number.
2)Responsive design for compatibility across devices.
3)Error handling to display messages for duplicate entries.
4)Technologies Used
5)Frontend: HTML, CSS
6)Backend: PHP
7)Database: PostgreSQL
8)Installation

Clone the repository:

bash

Copy code:
git clone https://github.com/lakshiitakalyanasundaram/registration-form.git
cd registration-form

Set up the database:

1)Create a PostgreSQL database named Registration_form.
  Execute the following SQL command to create the registration table:
  
sql
Copy code
CREATE TABLE registration_form (
    user_id SERIAL PRIMARY KEY,
    FULL_NAME VARCHAR(50) UNIQUE NOT NULL,
    DATE_OF_BIRTH DATE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    CONTACT VARCHAR(15) UNIQUE NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

Update database connection details:

Open submit.php and update the database connection variables ($host, $dbname, $user, $password) with your PostgreSQL credentials.

Run the server:

Use a local server like XAMPP or MAMP to run the PHP files, or use PHP's built-in server:
Bash
Copy code:
php -S localhost:8000
Access the form in your browser at http://localhost:8000/form.html

Usage
Fill out the registration form and submit.
If the email or contact number already exists, an error message will be displayed on the form.
Successful submissions will confirm that the data has been inserted into the database.

Contributing
Contributions are welcome! Feel free to fork the repository and submit a pull request for any improvements or bug fixes.

License
This project is licensed under the MIT License. See the LICENSE file for details.

Acknowledgments
Thank you for using this registration form template. If you have any questions or feedback, please feel free to reach out!
