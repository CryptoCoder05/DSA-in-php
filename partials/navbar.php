<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">

    <a class="navbar-brand" href="<?= BASE_URL ?>basics/01.php">DSA</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04"
      aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor04">

      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>basics/01.php">Basics</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>array/01.php">Array</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>patterns/01.php">Patterns</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>sum-target/01.php">Sum & Target</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>strings/01.php">Strings</a>
        </li>

        <!-- Approach -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Approach
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASE_URL ?>two-pointer/01.php">Two Pointer</a>
            <a class="dropdown-item" href="<?= BASE_URL ?>hash-map/01.php">Hashing</a>
            <a class="dropdown-item" href="<?= BASE_URL ?>min-max/01.php">Min-Max</a>
          </div>
        </li>

        <!-- Algorithm -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Algorithm
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASE_URL ?>algorithm/01.php">Binary Search</a>
            <a class="dropdown-item" href="<?= BASE_URL ?>algorithm/02.php">Kadane's Algorithm</a>
          </div>
        </li>

        <!-- Sorting Algorithm -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
            Sorting Algorithm
          </a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASE_URL ?>algorithm/sorting/01.php">Bubble Sort</a>
            <a class="dropdown-item" href="<?= BASE_URL ?>algorithm/sorting/02.php">Merge Sort</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</nav>