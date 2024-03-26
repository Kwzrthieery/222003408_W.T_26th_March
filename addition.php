<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's input from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $space = " ";

    $fullname = $fname.$space.$lname;
    $sum = $num1 +$num2;

    echo "  <center>
            <h1>Hello $fullname<h1><hr><br>
            <p>The sum of $num1 and $num2 = ".$sum."<p>
            </center>";
}

?>
