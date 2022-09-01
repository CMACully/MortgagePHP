<?php

    // Create a rate function that calls the user's entered loanAmount
    // Checking to see if loanAmount is greater than 300000 to set the 
    // rate as 2%. Else set the rate to 5% and return the intRate in each.
    function rate($loanAmount)
    {
        if($loanAmount >= 300000)
        {
            $intRate = .02 . "%";
            return $intRate;
        } 
        else
        {
            $intRate = .05 . "%";
            return $intRate;
        }
    }

    // Create a totalIntPaid function that calls the user's entered loanAmount,
    // selected "term(length)" and the rate function. This creates the total Interest Paid.
    // Return the totalIntPaid_formatted (Total interest paid)
    function totalIntPaid($loanAmount, $loanLength)
    {
        $totalIntPaid = $loanAmount * (float)rate($loanAmount) * $loanLength;   // Had to set the rate to (float) to get rid of "non-numeric value" error
        $totalIntPaid_formatted = "$" .number_format($totalIntPaid, 2);        // Format the totalIntPaid to currency
        return $totalIntPaid_formatted;
    }
?>