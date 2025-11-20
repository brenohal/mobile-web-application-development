<?php
//show errors; at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs--also, demo no htmlspecialchars()
//exit(print_r($_POST));

/*
    Best practice: sanitize input - prepared statements, and escape output - htmlspecialchars().

    htmlspecialchars() helps protect against cross-site scripting (XSS).
    XSS enables attackers to inject client-side script into Web pages viewed by other users

    Note: call htmlspecialchars() when echoing data into HTML.
    However, don't store escaped HTML in your database.
    The database should store actual data, not its HTML representation.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Brennan O'Halloran">
    <link rel="icon" href="favicon.ico">

    <title>Simple Calculator</title>

    <?php include_once("../css/include_css.php"); ?>

    </head>


    <body>

    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("../global/header.php"); ?>
            </div>

            <?php
            //use for both non-function and function versions (see below)
            if (!empty($_POST))
            {
                $num1      = $_POST['num1'];
                $num2      = $_POST['num2'];
                $operation = $_POST['operation'];
        
                       if (preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num1) && preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num2))
                       {

                       
        
            //exit(print_r($_POST));

            echo '<h2>' . $operation . '</h2>';

            //using functions version
            //create UDFs (user-defined functions)
            function AddNum($x, $y)
            {
                echo $x . " + " . $y . " = ";
                echo $x + $y;
            }

            function SubtractNum($x, $y)
            {
                echo $x . " - " . $y . " = ";
                echo $x - $y;
            }

            function MultiplyNum($x, $y)
            {
                echo $x . " * " . $y . " = ";
                echo $x * $y;
            }

            function DivideNum($x, $y)
            {
                if ($y == 0) 
                {
                    echo "Cannot divide by zero.";

                }
                else
                {
                    echo $x . " / " . $y . " = ";
                    echo $x / $y;
                }
            }
            function PowerNum($x, $y)
            {
                echo "$x" . " raised to the power of " . "$y" . " = ";
                echo pow($x, $y);
            }

            if($operation == "addition")
            {
                AddNum($num1, $num2);
            }
            else if($operation == "subtraction")
            {
                SubtractNum($num1, $num2);
            }
            else if($operation == "multiplication")
            {
                MultiplyNum($num1, $num2);
            }
            else if($operation == "division")
            {
                DivideNum($num1, $num2);
            }
            else if($operation == "exponentiation")
            {
                PowerNum($num1, $num2);
            }

            ?>
            <p>
            <?php

        }

        else{

            echo "Must enter valid number.";
        }
    }

    else{

        header("Location: index.php");
    }
        ?>
        </p>
        <?php include_once("../global/footer.php"); ?>

    </div>
    </div>
               
           

