<?php include '../partials/header.php'; ?>

<div class="container mb-5 mt-3">
    <h2>Triangle Pattern</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="http://localhost/program/patterns/01.php" class="btn btn-info">Back</a>
        <a href="http://localhost/program/patterns/03.php" class="btn btn-info">Next</a>
    </div>


    <!-- ===================================== Pre Code =============================================-->
    <div>
        <pre><code class="language-php">
    &lt;?php
    Pattern - 1
    -------------------
    $n = 5;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo "* ";
        }
        echo "\n";
    }

    Pattern - 2
    -------------------
    $n = 5;

    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $i + 1; $j++){
            echo $i + 1 . " ";
        }
        echo "\n";
    }
  
    Pattern - 3
    -------------------
    $n = 5;
    $ch = "A";
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo $ch . " ";
        }
        $ch++;
        echo "\n";
    }
    
   
    Pattern - 4
    -------------------
    $n = 5;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            echo $j + 1 . " ";
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
            $n = 5;

            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i + 1; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="me-3">
            <h2>Pattern-2 |</h2>

            <?php
            $n = 5;

            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i + 1; $j++) {
                    echo $i + 1 . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div class="me-3">
            <h2>Pattern-3 |</h2>

            <?php
            $n = 5;
            $ch = "A";
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i + 1; $j++) {
                    echo $ch . " ";
                }
                $ch++;
                echo "<br>";
            }
            ?>

        </div>
        <div class="me-3">
            <h2>Pattern-4</h2>

            <?php
            $n = 5;

            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $i + 1; $j++) {
                    echo $j + 1 . " ";
                }
                echo "<br>";
            }
            ?>

        </div>
    </div>


    <!-- ===================================== Code End =============================================-->
</div>

<?php include '../partials/footer.php'; ?>