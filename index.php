<?php 

    include("config.php");
     $c1  = new  config();
    $is_button = isset($_POST['button']);
 if($is_button){
  
    $name =$_POST['name'];
    $phone_number =$_POST['phone_number'];
    $age =$_POST['age'];
    $standard =$_POST['standard'];

  $c1->insert($name, $phone_number,$age,$standard);
 }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h1>Register Form</h1>
        <form method="POST">
            <input placeholder="Name" name="name" required> <br>
            <input placeholder="Standard" name="standard" required> <br>
            <input placeholder="Age" name="age" type="number" min="1" required> <br>
            <input placeholder="Phone" name="phone_number" type="tel" > <br>
            <button name="button" type="submit">Submit</button>
        </form>
    </center>
</body>
</html>
