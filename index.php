<!-- Lab2 - Mortgage Calculator 
   Desc: Create a PHP Mortgage Calc, utilizing 3 PHP pages. 
         index.php holds logic displaying either loan_form.php or display calculated loan amt.
         loan_form.php holds the form.
         functions.php holds a function that will calculate the interest and return total amount paid.
   Author: Chauntel Atchley Cully
   Date: 08/31/2022 -->

<!--- Inlcude the functions file before the html --->
<?php
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Document</title>
    </head>
    <body style="background: #89abc6;">
        <main>
            <?php
                // Include the loan_form file within the main as it contains the form
                include("loan_form.php");

                if (isset($_POST['loanAmount']))
                {
                    // Set up the variables that will be tied to the user's input 
                    // This will be set up with the HTTP POST method
                    $loanAmount = $_POST['loanAmount'];
                    $loanLength = $_POST['loanLength'];

                    // echo in the entered in Loan info as well as the Calculated info 
                    echo("Loan Amount: $".number_format($loanAmount, 2)."<br>");
                    echo("Loan Term: ".$loanLength." years<br>");
                    echo("Total Interest Rate: ".rate($loanAmount)."<br>");
                    echo("Total Interest Paid: ".totalIntPaid($loanAmount, $loanLength));
                }
            ?>
        </main>
    </body>
</html>