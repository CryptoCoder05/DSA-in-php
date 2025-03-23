<?php include '../partials/header.php'; ?>

<h2>Copy an array to another array in reverse order.</h2>

<div class="d-flex justify-content-between mt-3">
    <a href="http://localhost/program/array/04.php" class="btn btn-info">Back</a>
    <a href="http://localhost/program/array/06.php" class="btn btn-info">Next</a>
</div>

<!-- ===================================== Pre Code =============================================-->

<pre><code class="language-php">
    &lt;?php
    
    $arr = [10, 20, 30, 40, 50];
    $brr = [];
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        $brr[$i] = $arr[$n - 1 - $i]; // Remember
    }

    print_r($brr);

    ?&gt;
    </code></pre>

<!-- ===================================== Code Start =============================================-->

<h2>Output</h2>

<?php
$arr = [10, 20, 30, 40, 50];
$brr = [];
$n = count($arr);

for ($i = 0; $i < $n; $i++) {
    $brr[$i] = $arr[$n - 1 - $i]; // Remember
}

print_r($brr);
?>

<!-- ===================================== Code End =============================================-->


<?php include '../partials/footer.php'; ?>