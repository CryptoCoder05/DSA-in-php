<?php include './partials/header.php'; ?>

<div class="container mb-5 mt-3">
  <h2>Multiplication number without * operator.</h2>

  <div class="d-flex justify-content-between mt-3">
    <a href="http://localhost/program/array/03.php" class="btn btn-info">Back</a>
    <a href="http://localhost/program/array/05.php" class="btn btn-info">Next</a>
  </div>

  <!-- ===================================== Pre Code =============================================-->

  <pre><code class="language-php">
    &lt;?php

      $val_01 = 5;
      $val_02 = 5;

      $res = 0;

      for ($i = 1; $i <= $val_02; $i++) {
        $res = $res + $val_01;
      }

      echo $res;

    ?&gt;
    </code></pre>

  <!-- ===================================== Code Start =============================================-->

  <h2>Output</h2>

  <?php

  $val_01 = 5;
  $val_02 = 5;

  $res = 0;

  for ($x = 1; $x <= $val_02; $x++) {
    $res = $res + $val_01;
  }

  echo $res;

  ?>

  <!-- ===================================== Code End =============================================-->
</div>

<?php include './partials/footer.php'; ?>