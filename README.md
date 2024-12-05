Product Management Application
This project is a PHP-based product management system designed for managing products with functionalities to add, view, edit, and display totals dynamically using Ajax. The project includes both frontend and backend, styled with Bootstrap, and integrates JSON for data storage. This application fulfills the requirements provided in the test prompt.

Features
Add Products: A form to add products with fields for:

Product Name
Quantity in Stock
Price Per Item
Display Product Data:

Dynamically displays all product entries in a tabular format.
Displays columns: Product Name, Quantity, Price, Datetime Submitted, and Total Value (calculated as Quantity * Price).
Edit Functionality:

Users can edit existing entries directly.
Total Value Calculation:

Shows a total sum of all "Total Value" numbers at the bottom of the table.
Data Storage:

Stores all product data in a JSON file.
Real-Time Updates:

Form submission and data updates occur without page reloads using Ajax.
Bootstrap Design:

The UI is responsive and styled with Twitter Bootstrap.
Prerequisites
PHP 7.4 or later
A web server (e.g., Apache, XAMPP, WAMP, or Laravel's built-in server)
Git for version control (optional)
Installation Instructions
Clone or Download the Repository:

Clone the repository:
bash
Copy code
git clone <repository-url>
Or, download the repository as a zip file and extract it.
Navigate to the Project Directory:

bash
Copy code
cd productmanagement
Start the Server:

If you are using PHP’s built-in server:
bash
Copy code
php -S localhost:8000
Or, place the project folder in your web server’s root directory (e.g., htdocs for XAMPP).
Access the Application: Open the following URL in your browser:

arduino
Copy code
http://localhost/productmanagement/
File Structure
The project directory contains the following key files and folders:

graphql
Copy code
productmanagement/
│
├── index.php               # Main entry point for the application
├── includes/
│   ├── save.php            # Backend logic to handle form submissions and edits
│   └── data.json           # Stores all product data
├── assets/
│   ├── css/                # Contains CSS files (Bootstrap, custom styles)
│   └── js/                 # Contains JavaScript files (AJAX logic)
├── README.md               # Project documentation
└── data.json               # Product data stored in JSON format
Usage Instructions
Open the application in your browser:
http://localhost/productmanagement/

Fill out the form to add a product with:

Product Name
Quantity
Price per Item
Click "Submit" to save the product.

View all submitted products in the table below the form.

Edit any product entry by clicking the Edit button in the table.

The total value of all products is displayed at the bottom of the table.

Technologies Used
Frontend:

HTML5, CSS3, JavaScript
Bootstrap (for styling and responsiveness)
jQuery (for AJAX)
Backend:

PHP
JSON for data storage
Additional Notes
All functionalities (add, edit, display) work seamlessly without reloading the page due to AJAX implementation.
Data is saved in data.json in valid JSON format.
Ensure the web server has write permissions for the data.json file.
Laravel Skills Test Context
This project was created as part of a Laravel skills test and follows the requirements provided:

Routes, Controllers, Migrations, and Seeding were implemented in a Laravel project structure for the Laravel part of the task.
PHP and JSON were utilized for tasks outside Laravel.
Test Completion Notes:

This project has been uploaded to a GitHub repository as requested.
The repository is public, and the timestamp reflects the completion time of the test.
License
This project is licensed under the MIT License. You are free to use, modify, and distribute this application.

