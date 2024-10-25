# Registration Form

## Overview

This project is a simple registration form that captures user information, including full name, date of birth, email address, and contact number. The data is stored in a PostgreSQL database, allowing for unique entries for each user.

## Features

- User input validation.
- Unique constraints for email and contact number.
- Error handling for duplicate entries.
- Responsive design for mobile and desktop.

## Technologies Used

- HTML
- CSS
- PHP
- PostgreSQL

## Getting Started

### Prerequisites

- PHP installed on your machine.
- PostgreSQL installed and running.
- A web server (e.g., Apache, Nginx) configured to run PHP.

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/lakshiitakalyanasundaram/registration-form.git
2. Change into the directory:
   ```bash
   cd registration-form
3. Create a PostgreSQL database named Registration_form.
4. Run the SQL command to create the registration_form table:
   ```sql
    CREATE TABLE registration_form (
        user_id SERIAL PRIMARY KEY,
        FULL_NAME VARCHAR(50) UNIQUE NOT NULL,
        DATE_OF_BIRTH DATE NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        CONTACT VARCHAR(15) UNIQUE NOT NULL,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    );
5. Configure the database connection in submit.php by updating the $host, $dbname, $user, and $password variables.
   
### Usage
- Open form.html in your web browser.
- Fill out the form with the required information.
- Click on the "Submit" button to register.
- If the registration is successful, a success message will be displayed. If the contact number or email already exists, an error 
  message will inform you.
  
### Deleting Data
To delete all stored data in the registration_form table without deleting the table itself, run the following SQL command:
    ```sql
    
      DELETE FROM registration_form;

### Note on Unique Constraints
If you try to register with a contact number or email that already exists, you will receive an error message indicating that the entry is already in use.

### Contributing
Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.



Author
K. Lakshiita
SRM Institute of Science and Technology



