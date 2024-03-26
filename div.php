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
    if ($num2<1) {
        echo "<script>alert('Second number must be greater than one')</script>";
    }else{
    $div = $num1 /$num2;

    echo "  <center>
            <h1>Hello $fullname</h1><hr><br>
            <p>The quotient of $num1 and $num2 = ".$div."<p>
            </center>";
        }
}

?>
