<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Valid Palindrome : Two Pointer Approach</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/strings/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/strings/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    function isValidPalindrome($str)
    {

        $len = strlen($str);
        $st = 0;
        $end = $len - 1;

        while ($st < $end) {
            if ($str[$st] != $str[$end]) {
                return "false";
            }
            $st++;
            $end--;
        }

        return "true";
    }

    $str = "Madam";

    echo isValidPalindrome(strtolower($str));
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    function isValidPalindrome($str)
    {

        $len = strlen($str);
        $st = 0;
        $end = $len - 1;

        while ($st < $end) {
            if ($str[$st] != $str[$end]) {
                return "false";
            }
            $st++;
            $end--;
        }

        return "true";
    }

    $str = "Madam";

    echo isValidPalindrome(strtolower($str));

    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>