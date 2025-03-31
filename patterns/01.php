<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">

    <h2>Square Pattern</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/patterns/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/patterns/02.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    Pattern - 1
    -------------------
    $n = 4;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo $j . " ";
        }
        echo "/n";
    }

    Pattern - 2
    -------------------
    $n = 4;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo "* ";
        }
        echo "/n";
    }

    Pattern - 3
    -------------------
    $n = 3;
        $num = 1;

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                echo $num;
                $num++;
            }
            echo "/n";
        }

    Pattern - 4
    -------------------
    $n = 3;
    $ch = 'A';

    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            echo $ch . " ";
            $ch++;
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

            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    echo $j . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="me-3">
            <h2>Pattern-2 |</h2>

            <?php
            $n = 4;

            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="me-3">
            <h2>Pattern-3 |</h2>

            <?php
            $n = 3;
            $num = 1;

            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    echo $num;
                    $num++;
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="me-3">
            <h2>Pattern-4</h2>

            <?php
            $n = 3;
            $ch = 'A';

            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    echo $ch . " ";
                    $ch++;
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>

    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>