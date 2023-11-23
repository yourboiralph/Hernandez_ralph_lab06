<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'index.php';
        $formInfo = new FormInfoClass();

        $formInfo->setLastName($_POST['lastName']);
        $formInfo->setFirstName($_POST['firstName']);
        $formInfo->setMiddleInitial($_POST['middleInitial']);
        $formInfo->setAge($_POST['age']);
        $formInfo->setContactNumber($_POST['contactNo']);
        $formInfo->setEmail($_POST['email']);
        $formInfo->setAddress($_POST['address']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #3498db;
        }

        div {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #2980b9;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form{
            display: none;
        }
    </style>
</head>
<body>
    <div>
        <h2>Result</h2>
        <?php
            if (isset($formInfo)) {
                echo "<p>Last Name: " . $formInfo->getLastName() . "</p>";
                echo "<p>First Name: " . $formInfo->getFirstName() . "</p>";
                echo "<p>Middle Initial: " . $formInfo->getMiddleInitial() . "</p>";
                echo "<p>Age: " . $formInfo->getAge() . "</p>";
                echo "<p>Contact Number: " . $formInfo->getContactNumber() . "</p>";
                echo "<p>Email: " . $formInfo->getEmail() . "</p>";
                echo "<p>Address: " . $formInfo->getAddress() . "</p>";
                echo '<a href="index.php"><button>Go Back</button></a>';
            } else {
                echo "<p>No form submission data available.</p>";
            }
        ?>
    </div>
</body>
</html>
