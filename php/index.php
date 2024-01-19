<?php

//set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    //$dbname = "enquiryform";

    //connection to database
    $conn = mysqli_connect($server, $username, $password);


    //connection process
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "success connecting to the db";

    $name = $_POST['name'];
    $phone = $_POST['contact'];
    $email = $_POST['email'];
    $company = $_POST['companyname'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO `enquiryform`.`details` (`name`, `phone no.`, `email`, `company`, `reason`, `date`) VALUES ('$name', '$phone', '$email', '$company', '$reason', current_timestamp());";

    //echo $sql;

    if($conn->query($sql) == true){
        //echo "successfully submited";
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
    //connection process ends
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <style>
        .response{
            display: flex;
            justify-content: center;
            color: white;
        }
    </style>
</head>
<body style="background-color: gray;">
    <div class="response">
    <h1>Thank you for your response. Soon, our team will contact you.</h1>
    </div>
</body>
</html>