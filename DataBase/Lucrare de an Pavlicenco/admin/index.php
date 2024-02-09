<?php
include "includes/head.php";
?>

<body>

  <?php
  include "includes/header.php";
  ?>

  <div class=" container-fluid">

    <?php
    include "includes/sidebar.php";
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <div class="row">
        <div class="card" style="width: 25rem;margin-bottom: 20px ;margin-right: 200px ;">
          <a href="orders.php">
            <img class="card-img-top" src="../images/shopping-cart.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Comenzi</h5>
            <p class="card-text">Afișați și modificați detaliile comenzilor.</p>
            <a href="orders.php" class="btn btn-primary">Accesați pagina comenzilor</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-bottom: 20px ;">
          <a href="products.php">
            <img class="card-img-top" src="../images/package.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Produse</h5>
            <p class="card-text">Afișați și modificați detaliile produselor.</p>
            <a href="products.php" class="btn btn-primary">Accesați pagina de produse</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card" style="width: 25rem;margin-top: 20px ;margin-right: 200px ;">
          <a href="customers.php">
            <img class="card-img-top" src="../images/users.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Clienți</h5>
            <p class="card-text">Afișați și modificați detaliile clienților.</p>
            <a href="customers.php" class="btn btn-primary">Accesați pagina clienților</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-top: 20px ;">
          <a href="admin.php">
            <img class="card-img-top" src="../images/user.svg" alt="Card image cap" style="width: 5rem;margin-top: 20px ;">
          </a>
          <div class="card-body">
            <h5 class="card-title">Admin</h5>
            <p class="card-text">Afișați și modificați detaliile administratorilor.</p>
            <a href="admin.php" class="btn btn-primary">Accesați pagina de administrare</a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php
  include "includes/footer.php"
  ?>
</body>

</html>