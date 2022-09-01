<!--- Set up the form with input text box to accept loan amount
      Use a while or for loop to create drop-down to represent the loan term.
      And a submit button, the form should not submit itself --->
<h1>Mortgage Loan Calculator</h1>
            <form action="" method="post">
                <div id="data">
                    <input type="text" name="loanAmount" id="" placeholder="Loan Amount">
                    <select name="loanLength" id="">
                        <?php
                            for($i=1; $i <=30; $i++)
                            {
                                echo("<option value='$i'>$i yrs</option>");
                            }
                        ?>
                    </select><br>
                </div>
                <div id="buttons">
                    <input type="submit" value="Submit for Mortgage"><br>
                </div>
            </form>

        