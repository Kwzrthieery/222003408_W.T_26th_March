<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's input from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ub = $num1 - $num2;

    echo "<script>alert('The difference of $num1 and $num2 =".$ub."')</script>";
}

?>
