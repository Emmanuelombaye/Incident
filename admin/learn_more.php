<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How the System Works | Incident Reporting</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        p {
            font-size: 16px;
        }
        .btn-home {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-home:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>How the Incident Reporting System Works</h1>
        <p>
            The **Incident Reporting System** allows users to **report incidents**, track their progress, and communicate with investigators. Below is how the system works:
        </p>
        
        <h2>1. User Registration & Login</h2>
        <p>
            Users (Reporters, Investigators, and Admins) **register** and **log in** using their credentials.
        </p>
        
        <h2>2. Reporting an Incident</h2>
        <p>
            A Reporter can **submit an incident report** with details such as location, date, description, and file uploads.
        </p>

        <h2>3. Incident Review & Investigation</h2>
        <p>
            - The **Admin** assigns incidents to Investigators. <br>
            - The **Investigator** updates the status (New → In Progress → Resolved).
        </p>

        <h2>4. Real-Time Communication</h2>
        <p>
            Users can **chat** with Investigators regarding their incident status.
        </p>

        <h2>5. Reports & Analytics</h2>
        <p>
            Admins can **generate reports** in **PDF/CSV** for tracking and decision-making.
        </p>

        <h2>6. Secure Authentication & Role-Based Access</h2>
        <p>
            - Reporters **only see their reports**.<br>
            - Investigators **manage assigned cases**.<br>
            - Admins **have full system control**.
        </p>

        <a href="index.php" class="btn-home">Go Back to Home</a>
    </div>
</body>
</html>
