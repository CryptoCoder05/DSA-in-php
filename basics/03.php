<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>PHP Code to find whether a number Armstrong or not?</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/basics/02.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/basics/04.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        function armstrongCheck($number){
            $sum = 0;
            $x = $number;
            while($x != 0)
            { 
                $rem = $x % 10;
                $sum = $sum + $rem*$rem*$rem;
                $x = $x / 10;
            }
            if ($number == $sum)
                return 1;
            return 0;
        }

        $number = 153;
        $flag = armstrongCheck($number);

        if ($flag == 1)
            echo "Yes";
        else
            echo "No"

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function armstrongCheck($number)
    {
        $sum = 0;
        $x = $number;
        while ($x != 0) {
            $rem = $x % 10;
            $sum = $sum + $rem * $rem * $rem;
            $x = $x / 10;
        }
        if ($number == $sum)
            return 1;
        return 0;
    }

    $number = 153;
    $flag = armstrongCheck($number);
    if ($flag == 1)
        echo "Yes";
    else
        echo "No"
            ?>


        <!-- ===================================== Code End =============================================-->
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>