<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
  ? "https://"
  : "http://";

$baseUrl = $protocol . $_SERVER['HTTP_HOST']
  . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/';
?>

<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">

    <a class="navbar-brand" href="<?= $baseUrl ?>">DSA</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04"
      aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor04">

      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?= $baseUrl ?>basics/01.php">Basics</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= $baseUrl ?>array/04.php">Array</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= $baseUrl ?>patterns/01.php">Patterns</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= $baseUrl ?>sum-target/01.php">Sum & Target</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= $baseUrl ?>strings/01.php">Strings</a>
        </li>

        <!-- Approach -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Approach
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $baseUrl ?>two-pointer/01.php">Two Pointer</a>
            <a class="dropdown-item" href="<?= $baseUrl ?>hash-map/01.php">Hashing</a>
            <a class="dropdown-item" href="<?= $baseUrl ?>min-max/01.php">Min-Max</a>
          </div>
        </li>

        <!-- Algorithm -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Algorithm
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $baseUrl ?>algorithm/01.php">Binary Search</a>
            <a class="dropdown-item" href="<?= $baseUrl ?>algorithm/02.php">Kadane's Algorithm</a>
          </div>
        </li>

        <!-- Sorting Algorithm -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Sorting Algorithm
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $baseUrl ?>algorithm/sorting/01.php">Bubble Sort</a>
            <a class="dropdown-item" href="<?= $baseUrl ?>algorithm/sorting/02.php">Merge Sort</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</nav>