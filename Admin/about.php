<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - About Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
}

.about-section {
    max-width: 800px;
    margin: 0 auto;
    text-align: justify;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
.about-section
{
    max-height: 1000px;
}

    </style>
    <!-- Header -->
    <header>
        <h1>Job Portal</h1>
        <br>
        <nav>
            <ul>
                <li><a href="attach.php">Home</a></li>
               
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <section class="about-section">
            <h2>About Us</h2>
            <p>Welcome to our job portal, where job seekers and employers meet.</p>
            <p>Our mission is to connect talented individuals with job opportunities that align with their skills and career goals.</p>
            <p>Employers can post job listings, search for qualified candidates, and manage applications easily through our platform.</p>
            <p>Job seekers can create profiles, upload resumes, and apply for their dream jobs in just a few clicks.</p>
            

        </section>
    </main>

    <!-- Footer -->
   <!--  <footer>
        <p>&copy; 2023 Job Portal. All rights reserved.</p>
    </footer> -->
</body>
<?php include 'Admin_footer.php';?> 