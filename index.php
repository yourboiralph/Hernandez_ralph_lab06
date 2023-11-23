<?php
    class FormInfoClass{
        private $firstname;
        private $lastname;
        private $middleinitial;
        private $age;
        private $contactnumber;
        private $email;
        private $address;

        public function setFirstName($firstname){
            $this->firstname = $firstname;
        }
        public function getFirstName(){
            return $this->firstname;
        }
        public function setLastName($lastname){
            $this->lastname = $lastname;
        }
        public function getLastName(){
            return $this->lastname;
        }
        public function setMiddleInitial($middleinitial){
            $this->middleinitial = $middleinitial;
        }
        public function getMiddleInitial(){
            return $this->middleinitial;
        }
        public function setAge($age){
            $this->age = $age;
        }
        public function getAge(){
            return $this->age;
        }
        public function setContactNumber($contactnumber){
            $this->contactnumber = $contactnumber;
        }
        public function getContactNumber(){
            return $this->contactnumber;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setAddress($address){
            $this->address = $address;
        }
        public function getAddress(){
            return $this->address;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ralph</title>
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

        form {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #2980b9;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #2980b9;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            resize: none;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 auto;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<form action="output.php" method="post">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="middleInitial">Middle Initial:</label>
        <input type="text" id="middleInitial" name="middleInitial" maxlength="1">

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="contactNo">Contact Number:</label>
        <input type="tel" id="contactNo" name="contactNo" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>