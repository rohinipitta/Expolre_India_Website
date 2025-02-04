# Explore India Website

Welcome to the Explore India Website project! This repository contains the code for a web application designed to showcase the beauty and diversity of India. The website provides information about various tourist destinations, cultural heritage, and other attractions across the country.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Contact](#contact)

## Project Overview

Explore India Website is a web application that aims to provide users with comprehensive information about different places in India. Whether you are planning a trip or just curious about the country's culture and heritage, this website has something for everyone.

## Features

- **Tourist Destinations**: Information about popular tourist spots across India.
- **Cultural Heritage**: Details about India's rich cultural history.
- **Interactive Maps**: Maps to help users locate destinations.
- **User Reviews**: Section for users to share their experiences.
- **Responsive Design**: Works on desktops, tablets, and mobile devices.

## Technologies Used

- **HTML**
- **CSS**
- **JavaScript**
- **PHP**
- **MySQL**

## Installation

To run this project locally, follow these steps:

1. **Clone the Repository**:

    ```sh
    git clone https://github.com/rohinipitta/Expolre_India_Website.git
    ```

2. **Navigate to the Project Directory**:

    ```sh
    cd Expolre_India_Website
    ```

3. **Set Up the Database**:

    - Create a new MySQL database.
    - Import the provided SQL file (`database.sql`) into your database:

      ```sh
      mysql -u your_username -p your_database_name < database.sql
      ```

    - Replace `your_username` with your MySQL username and `your_database_name` with the name of the database you created.

4. **Configure the Project**:

    - Update the database connection details in the configuration file (`config.php`).

5. **Start the Local Server**:

    - Use a local server like XAMPP or WAMP to run the project.

## Usage

Once the project is set up, you can access the website by navigating to `http://localhost/Expolre_India_Website/mainpage.html` in your web browser. Explore the different sections to learn more about India's tourist destinations and cultural heritage.
Troubleshooting
If you encounter issues with the mainpage.html page not displaying correctly, try the following steps:

Verify File Paths

Ensure that all files (images, CSS, etc.) are in the correct directories and that the paths specified in the HTML are accurate.

Check Network Requests

Open the browser’s Developer Tools (Ctrl + Shift + I or Cmd + Option + I on Mac).
Go to the "Network" tab.
Reload the page (Ctrl + R or Cmd + R).
Check the status of network requests. Ensure that all resources (images, CSS files) are loading successfully without errors (status codes 404, 403, etc.).
Clear Browser Cache

Sometimes, clearing the browser cache or opening the page in an incognito/private window can resolve display issues caused by cached files.

Validate HTML and CSS

Ensure that the HTML and CSS syntax is correct. Use validators like W3C HTML Validator and CSS Validator to check for errors.

Test Across Browsers

Test the webpage in different browsers (e.g., Chrome, Firefox, Edge) to ensure compatibility and consistent display.

Check for Overlapping Elements

Inspect the page to ensure no elements are overlapping or hidden due to CSS styles.

o the branch:

    ```sh
    git push origin feature/your-feature-name
    ```

5. Open a pull request on GitHub.

## Contact

If you have any questions or suggestions, feel free to contact me:

- **Name**: Rohini Pitta
- **Email**: [rohinipitta189@gmail.com]
- **GitHub**: [https://github.com/rohinipitta](https://github.com/rohinipitta)

---

Thank you for visiting the Explore India Website project! We hope you find it informative and useful.
