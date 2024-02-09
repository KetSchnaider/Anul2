<?php
include "includes/head.php"
?>

<body>

  <div class="site-wrap">


    <?php
    include "includes/header.php";
    $data = get_user($_SESSION['user_id']);
    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Acasă</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black"> Finalizarea comenzi</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Detalii livrare</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>

                      <th>Detalii Client</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nume </td>
                        <td><?php echo $data[0]['user_fname'] ?></td>
                      </tr>
                      <tr>
                        <td>Prenume </td>
                        <td><?php echo $data[0]['user_lname'] ?></td>
                      </tr>
                      <tr>
                        <td>Email </td>
                        <td><?php echo $data[0]['email'] ?></td>
                      </tr>
                      <tr>
                        <td>Adresă </td>
                        <td><?php echo $data[0]['user_address'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Comanda Ta</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Produs</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($_SESSION['cart'])) {
                        $data = get_cart();
                        $num = sizeof($data);
                        for ($i = 0; $i < $num; $i++) {
                          if (isset($data[$i])) {
                      ?>
                            <tr>
                              <td><?php echo $data[$i][0]['item_title'] ?><strong class="mx-2">x</strong><?php echo $_SESSION['cart'][$i]['quantity'] ?></td>
                              <td>MDL <?php echo ($data[$i][0]['item_price'] * $_SESSION['cart'][$i]['quantity'])  ?></td>
                            </tr>
                      <?php
                          }
                        }
                      }
                      ?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Subtotalul Coșului</strong></td>
                        <td class="text-black">MDL <?php echo total_price($data) ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Taxe de livrare</strong></td>
                        <td class="text-black">MDL <?php echo delivery_fees($data) ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total comanda</strong></td>
                        <td class="text-black font-weight-bold"><strong>MDL <?php echo delivery_fees($data) + total_price($data) ?></strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php?order=done'">Plasați comanda</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
  </div>
</body>

</html>