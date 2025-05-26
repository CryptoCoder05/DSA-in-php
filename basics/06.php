<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/header.php'); ?>

<div class="container mb-5 mt-3">
    <h2>Write a program in PHP to reverse a number</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/basics/05.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/basics/07.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php

        $num = 79658;
        $revnum = 0;
        while (floor($num))
        {
            $rem = $num % 10;
            $revnum = ($revnum * 10) + $rem;
            $num = $num / 10;
        }

        echo "Reverse number of 79658 is: $revnum";

    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->

    <h2>Output</h2>

    <?php

    $num = 79658;
    $revnum = 0;
    while (floor($num)) {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = $num / 10;
    }

    echo "Reverse number of 79658 is: $revnum";

    ?>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/program/partials/footer.php'); ?>