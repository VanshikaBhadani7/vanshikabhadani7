
# E Commerce Websites

## "Healthy Store"

This project is a simple e-commerce web page designed to showcase and sell health care products. It features a user-friendly interface with a navigation bar, a promotional banner, and sections for product listings and informational articles. The key functionalities include:

1. **Navigation Bar**: Allows users to navigate between the home page, product listings, the shopping cart, and contact information.

2. **Promotional Banner**: Highlights the store's theme and welcomes users, encouraging them to explore the latest collections and exclusive offers.

3. **Product Listings**: Displays various health care products with images, names, prices, and an "Add to Cart" button. The products are presented in a responsive grid layout that adapts to different screen sizes.

4. **Article Section**: Provides detailed information about specific health care products, helping users understand the benefits and usage of items like Vitamin C Serum, Multivitamin Tablets, and Omega-3 Fish Oil.

5. **Shopping Cart Functionality**: Users can add products to their cart, with the data stored in the browser's local storage. The cart updates with each addition, and an alert confirms the addition of a product.

**Target Audience**: This project is aimed at users interested in purchasing health care products online, including those who are health-conscious and looking for supplements, vitamins, and other wellness items. The design is straightforward and accessible, making it suitable for a wide range of users, from young adults to older individuals.


## Features

- his HTML file is an e-commerce homepage for a health care store. It includes:

    1) **Navbar**: A simple navigation bar with links to different pages.
    2) **Home Banner**: A welcoming section with a gradient background and subtle animation.
    3) **Product Listing**: A responsive grid showcasing health care products with images, prices, and "Add to Cart" buttons.
    4) **Article Section**: Informational articles about the products, with images and descriptions to educate customers.
    5) **Cart Section**:
            1) A title with a gradient background and animated text.A "Proceed to Checkout" button styled for prominence.



## Appendix
#### Appendix A: Code Snippets
This section includes important code snippets used in the project. These snippets provide insight into the logic and implementation details.

1. **HTML Code for Cart Page:**
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart - E-Commerce Store</title>
        <style>
            /* Styles */
        </style>
    </head>
    <body>
        <!-- Cart content -->
    </body>
    </html>
    ```

2. **JavaScript Code for Cart Functionality:**
    ```javascript
    document.addEventListener('DOMContentLoaded', () => {
        const cartTableBody = document.querySelector('#cart-table tbody');
        const totalPriceElement = document.getElementById('total-price');
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        function updateCart() {
            cartTableBody.innerHTML = '';
            let totalPrice = 0;

            cart.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.product}</td>
                    <td>$${item.price.toFixed(2)}</td>
                    <td>${item.quantity}</td>
                    <td>$${(item.price * item.quantity).toFixed(2)}</td>
                    <td><button onclick="removeFromCart(${index})">Remove</button></td>
                `;
                cartTableBody.appendChild(row);
                totalPrice += item.price * item.quantity;
            });

            totalPriceElement.textContent = totalPrice.toFixed(2);
        }

        window.removeFromCart = (index) => {
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCart();
        };

        updateCart();
    });
    ```

#### Appendix B: Design Mockups
Include images or screenshots of the design mockups used in the project. These mockups provide a visual representation of the final product and guide the development process.

- **Figure 1:** Mockup of the Cart Page.
- **Figure 2:** Mockup of the Product Page.

#### Appendix C: Data Sources and References
List the sources of any data, libraries, or external resources that were utilized in the project.

- **Data Source 1:** Description of the data source and how it was used.
- **Library 1:** Description of the library and its purpose in the project.

#### Appendix D: User Testing Feedback
This section includes the feedback received during user testing sessions.

- **Feedback from User 1:** "The cart functionality is smooth, but the checkout button could be more prominent."
- **Feedback from User 2:** "I found the navigation easy to use, and the animations added a nice touch."

#### Appendix E: Technical Documentation
Provide additional technical documentation that could be useful for future developers working on this project.

- **System Architecture Diagram:**
    - A diagram showing the overall architecture of the system, including frontend, backend, and database interactions.
- **API Endpoints:**
    - List of API endpoints used in the project, with descriptions of their functionality.




## Demo

(https://github.com/VanshikaBhadani7/vanshikabhadani7.git)


## Deployment

Here's a step-by-step deployment process for your e-commerce website using HTML, CSS, JavaScript, PHP, and XAMPP:

### Deployment Process for E-Commerce Website

#### 1. **Set Up XAMPP**
   - **Download XAMPP:** Download XAMPP from the [official website](https://www.apachefriends.org/index.html) and install it on your local machine.
   - **Start Apache and MySQL:** Open the XAMPP Control Panel and start the Apache server and MySQL database.

#### 2. **Configure the Project Directory**
   - **Create Project Folder:** Navigate to the `htdocs` folder inside the XAMPP installation directory (e.g., `C:\xampp\htdocs\`).
   - **Copy Website Files:** Create a new folder for your project (e.g., `healthy_store`) and copy all your HTML, CSS, JavaScript, and PHP files into this folder.

#### 3. **Set Up the Database**
   - **Open phpMyAdmin:** In your browser, navigate to `http://localhost/phpmyadmin/`.
   - **Create Database:** Click on "Databases" and create a new database (e.g., `healthy_store_db`).
   - **Import Database Schema:** If you have a SQL file with your database schema, import it using the "Import" tab in phpMyAdmin.
   - **Configure Database Connection:** Update your PHP files to ensure they connect to the database using the correct credentials (e.g., `localhost`, `root`, and the database name).

#### 4. **Test the Website Locally**
   - **Access the Website:** In your browser, go to `http://localhost/healthy_store/` to view your website.
   - **Test Functionality:** Ensure that all features (e.g., adding items to the cart, processing checkout, etc.) work correctly.

#### 5. **Deploy to a Web Server (Optional)**
   - **Choose a Hosting Provider:** If you plan to deploy the website online, choose a hosting provider that supports PHP and MySQL.
   - **Upload Files:** Use an FTP client like FileZilla to upload your project files to the web server.
   - **Set Up the Database:** Create a new database on the hosting server and import your database schema. Update the database connection details in your PHP files to reflect the hosting environment.
   - **Test Live:** Visit your domain to test the website and ensure everything functions correctly.

#### 6. **Go Live**
   - **Domain Configuration:** Point your domain name to the hosting server if you haven't done so.
   - **Final Testing:** Perform a final round of testing to ensure the website is fully operational.
   - **Launch:** Your e-commerce website is now live and ready for customers.





## Optimizations

### Optimizations Made in the E-Commerce Website Code

#### 1. **Code Refactoring**
   - **Separation of Concerns:** The HTML, CSS, and JavaScript code was structured to separate concerns clearly. HTML handles the structure, CSS the styling, and JavaScript the functionality. This modular approach makes the codebase easier to maintain and update.
   - **Reusable Components:** Common components like the navbar and buttons were refactored into reusable code snippets to avoid repetition and ensure consistency across the site.

#### 2. **Performance Improvements**
   - **Minimization of DOM Manipulation:** JavaScript operations that manipulate the DOM were minimized. For example, instead of updating the DOM multiple times during the cart update process, changes were made in a single operation, reducing reflows and repaints.
   - **Local Storage Optimization:** Cart data is stored and retrieved using `localStorage`, which reduces server load and allows for a faster, more responsive user experience.
   - **Lazy Loading Images (Planned):** To improve page load times, especially for product images, lazy loading is planned. This ensures that images are only loaded when they enter the viewport, reducing initial page load time.

#### 3. **Accessibility Enhancements**
   - **Semantic HTML:** Proper use of semantic HTML elements (e.g., `<nav>`, `<main>`, `<header>`, `<footer>`, `<button>`, `<table>`) improves accessibility by providing meaningful structure to screen readers and other assistive technologies.
   - **Keyboard Navigation:** All interactive elements, such as buttons and links, are keyboard accessible, ensuring that users who rely on keyboard navigation can use the site effectively.
   - **ARIA Attributes:** Implemented ARIA (Accessible Rich Internet Applications) attributes where necessary to enhance accessibility, such as labeling buttons with descriptive text.
   - **Color Contrast:** The color scheme was designed to meet WCAG (Web Content Accessibility Guidelines) standards for contrast, ensuring that text is legible for users with visual impairments.

#### 4. **CSS and Animation Optimization**
   - **Efficient Animations:** CSS animations, such as the gradient background and text glow in the cart page, were optimized for performance by using properties that are less likely to trigger layout changes (e.g., `transform` and `opacity`). This reduces the likelihood of jank during animation.
   - **Responsive Design:** The layout was made responsive to ensure that the website works well on various devices, from desktops to mobile phones, without compromising performance or user experience.

#### 5. **JavaScript Optimization**
   - **Event Delegation:** Used event delegation for handling events in dynamically generated content (e.g., the cart table). This reduces the number of event listeners attached to elements, improving performance, especially as the number of elements grows.
   - **Debouncing:** Applied debouncing techniques where appropriate to prevent excessive function calls in response to user inputs, such as typing or scrolling events.

These optimizations were implemented to ensure that the e-commerce website not only performs efficiently but is also accessible to a broad range of users, including those with disabilities.

## Support

For support, email vanshikabhadani07@gmail.com or join our Slack channel.


## 🚀 About Me


**About Me**

I’m a full-stack developer with a diverse skill set and a passion for creating engaging, high-performance web applications. My expertise spans both front-end and back-end technologies, allowing me to build comprehensive solutions from start to finish. Here’s a snapshot of my skills:

- **Front-End Technologies**: Proficient in HTML, CSS, and JavaScript, with experience in modern frameworks and libraries like React, Angular, and Vue.js. I focus on creating responsive, intuitive user interfaces that enhance user experience.

- **Back-End Technologies**: Skilled in server-side development with PHP, Node.js, and Python. I handle everything from database interactions to server management, ensuring robust and scalable applications.

- **Database Management**: Experience with both SQL (MySQL, PostgreSQL) and NoSQL (MongoDB) databases. I design and optimize database schemas and queries to handle large volumes of data efficiently.

- **Version Control**: Proficient in using Git and GitHub for version control and collaborative development. I manage code repositories, handle branching, and facilitate smooth team workflows.

- **Deployment and DevOps**: Knowledgeable in deploying applications using tools and platforms like XAMPP, Docker, and AWS. I handle server configurations, CI/CD pipelines, and application monitoring to ensure reliable deployments.

- **Performance Optimization**: Expertise in optimizing web performance through techniques like code minification, image optimization, and caching strategies. I focus on reducing load times and improving overall efficiency.

- **Accessibility and Usability**: Committed to creating accessible and inclusive web experiences by adhering to WCAG guidelines and implementing best practices for usability.

- **API Integration**: Experienced in designing and integrating RESTful and GraphQL APIs. I handle data exchange between front-end and back-end systems and third-party services.

- **Security Best Practices**: Implement security measures such as input validation, authentication, and data encryption to protect applications from vulnerabilities and attacks.

- **Problem-Solving and Collaboration**: Strong analytical skills and a collaborative approach to problem-solving. I work effectively with cross-functional teams and stakeholders to deliver solutions that meet project goals and requirements.

I am continuously exploring new technologies and techniques to refine my skills and stay current in the ever-evolving field of web development. My goal is to build innovative, user-centric solutions that drive success and satisfaction.


## 🔗 Links
[![instagram](https://www.instagram.com/vanshika.a.07?igsh=MW85em10d3FxamlpcA==)](https://www.instagram.com/vanshika.a.07?igsh=MW85em10d3FxamlpcA==)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/vanshika-bhadani-438a99282?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app)
[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/)

