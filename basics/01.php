<?php
require_once __DIR__ . '/../config.php';
include ROOT_PATH . 'partials/header.php';
?>

<div class="container mb-5 mt-3">

    <h2>Write a program to find whether a Number is Palindrome or not?</h2>

    <div class="d-flex justify-content-between mt-3">
        <a href="<?= BASE_URL ?>basics/01.php" class="btn btn-info">Back</a>
        <a href="<?= BASE_URL ?>basics/02.php" class="btn btn-info">Next</a>
    </div>

    <!-- PHP Code -->
    <div class="mt-3">
        <pre><code class="language-php">&lt;?php

function Palindrome($number) {

    $temp = $number;
    $new = 0;

    while ($temp > 0) {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = (int) floor($temp / 10);
    }

    return $new == $number;
}

$original = 257752;

echo Palindrome($original) ? "Palindrome" : "Not a Palindrome";

?&gt;</code></pre>
    </div>

    <!-- Output -->
    <h2 class="mt-4">Output</h2>

    <?php

    function Palindrome($number)
    {
        $temp = $number;
        $new = 0;

        while ($temp > 0) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = (int) floor($temp / 10);
        }

        return $new == $number;
    }

    $original = 257752;

    echo Palindrome($original) ? "Palindrome" : "Not a Palindrome";

    ?>

</div>

<?php include ROOT_PATH . 'partials/footer.php'; ?>