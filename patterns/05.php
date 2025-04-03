<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Inverted Triangle Pattern</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/patterns/04.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/patterns/06.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    Pattern - 1
    -------------------
    $n = 4;

    for ($i = 0; $i < $n; $i++) {
        // for spaces
        for ($j = 0; $j < $i; $j++) {
            echo "  ";
        }

        // for nums
        for ($j = 0; $j < $n - $i; $j++) {
            echo $i + 1 . " ";
        }
        echo "\n";
    }
    ?&gt;
    </code></pre>
    </div>


    <!-- ===================================== Code Start =============================================-->
    <div class="d-flex">
        <div class="me-3">
            <h2>Pattern-1 |</h2>

            <?php

            $n = 4;

            for ($i = 0; $i < $n; $i++) {
                // for spaces
                for ($j = 0; $j < $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }

                // for nums
                for ($j = 0; $j < $n - $i; $j++) {
                    echo $i + 1 . " ";
                }
                echo "<br>";
            }

            ?>

        </div>
    </div>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>