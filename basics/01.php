<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Write a program to find a string is palindrome or not?</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/basics/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/basics/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        function Palindrome($number){
            $temp = $number;
            $new = 0;
            while (floor($temp)) {
                $d = $temp % 10;
                $new = $new * 10 + $d;
                $temp = $temp/10;
            }
            if ($new == $number){
                return 1;
            }else{
                return 0;
            }
        }

        $original = 257752;
        if (Palindrome($original)){
            echo "Palindrome";
        }else {
        echo "Not a Palindrome";
        }

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php
    function Palindrome($number)
    {
        $temp = $number;
        $new = 0;
        while (floor($temp)) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = $temp / 10;
        }
        if ($new == $number) {
            return 1;
        } else {
            return 0;
        }
    }

    $original = 257752;
    if (Palindrome($original)) {
        echo "Palindrome";
    } else {
        echo "Not a Palindrome";
    }
    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>