<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Brennan O'Halloran">
    <link rel="icon" href="favicon.ico">

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="favicon.ico">

    <title>Write Read File</title>

    <?php include_once("../css/include_css.php"); ?>
</head>

<body>

<?php include_once("../global/nav.php"); ?>

<div class="container">
    <div class="starter-template">
        <div class="page-header">
            <?php include_once("../global/header.php"); ?>
    <p class="text-justify">
<?php
    //create/open file for appending write/read
    //Note: w+ = Read/Write. Opens and truncates file, that is, removes existing data
    //(or creates new file, if not exists). Starts at beginning of file.
    $myfile = fopen("file.txt", "w+") or exit("Unable to open file!");
    $txt    = $_POST['comment'];
    fwrite($myfile, $txt);   // write to file
    fclose($myfile);         // close file

    //Note: r+ = Read/Write. Starts at beginning of file.
    $myfile = fopen("file.txt", "r+") or exit("Unable to open file!");
    //output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br />";
    }
    //echo fread($myfile, filesize("file.txt")); //read from file
    fclose($myfile); // close file
?>
</p>

<?php include_once("../global/footer.php"); ?>
        </div> <!-- starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript -->
    <!-- Placed at end of document so pages load faster -->
    <?php include_once("../js/include_js.php"); ?>

    <script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>

