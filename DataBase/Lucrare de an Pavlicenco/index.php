<?php
include "includes/head.php"
?>

<body>

  <div class="site-wrap">
    <?php
    include "includes/header.php"
    ?>
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Medicină eficientă, medicină nouă în fiecare zi</h2>
              <h1>Bun venit la Pharma</h1>
              <p>
                <a href="store.php" class="btn btn-primary px-5 py-3">Cumpără acum</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Livrare <br> Gratuita</h5>
                <p>
                  Taxă de 0 MDL  pentru livrarea tuturor comenzilor
                  <strong>pentru comenzile de peste 199 MDL .</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Reducere de 50% <br> sezon</h5>
                <p>
                Reduceri de până la 80% la produsele de sănătate.

                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Produse <br> Noi</h5>
                <p>
                Explorați peste 10.000 de produse.
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Produse care v-ar putea plăcea</h2>
          </div>
        </div>

        <div class="row">
          <?php
          $data = all_products();
          $num = sizeof($data);
          for ($i = 0; $i < $num; $i++) {
          ?>
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
              <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img class="rounded mx-auto d-block" style="width:20vw ; height:40vh ;" src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>
              <?php if (strlen($data[$i]['item_title']) <= 20) { ?>
                <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo $data[$i]['item_title'] ?></a></h3>
              <?php
              } else {
              ?>
                <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></a></h3>
              <?php
              }
              ?>
              <p class="price">MDL <?php echo $data[$i]['item_price'] ?></p>
            </div>
          <?php
            if ($i == 5) {
              break;
            }
          }
          ?>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="store.php" class="btn btn-primary px-4 py-3">Vizualizați toate produsele</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Produse noi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <?php
              $data = all_products_reverse();

              $num = sizeof($data);
              for ($i = 0; $i < $num; $i++) {
              ?>
                <!--  -->
                <div class="  text-center item mb-4">
                  <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img class="rounded mx-auto d-block" style="width:20vw ; height:vh ;" src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>

                  <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"></a><?php echo $data[$i]['item_title'] ?></h3>

                  <p class="price">MDL <?php echo $data[$i]['item_price'] ?></p>
                </div>
                <!--  -->
              <?php
                if ($i == 5) {
                  break;
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Recenzii</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">

              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Serviciul PHARMA este magnific. Oferă reduceri bune decât
                     magazine medicale. Site-ul este foarte simplu de ales și serviciul este foarte mult
                     priceput și prompt. Destul de mulțumit de serviciu. Partea bună este că nu trebuie
                     cheltuiește bani uriași pe magazinele medicale prescrise de doctor, ceea ce este o altă mare ușurare. Cale
                     a merge.&rdquo;</p>
                </blockquote>

                <p>&mdash; Alexandrina Sadovnic</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;PHARMA oferă o mare ușurare în obținerea medicamentelor
                     pentru familia mea, de la vârful degetelor, fără zgomote tot timpul, cu un plumb foarte limitat
                     timp la toate comenzile. foarte fericit să fii client și cu siguranță îl recomand tuturor celor
                     necesită medicamente la un cost rezonabil și o bază de rutină.&rdquo;</p>
                </blockquote>

                <p>&mdash; Vasile Moraru</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Acum am devenit client al PHARMA De fiecare dată când comand medicamentul pe PHARMA
                     . Este un site foarte util în cumpărăturile online de produse de îngrijire a sănătății. Serviciul său de livrare este
                     foarte rapid, și ambalarea, de asemenea, foarte bună, dacă din greșeală vreun medicament este greșit, livrarea cu ușurință
                     revine la acest magazin web. Serviciul său pentru clienți este foarte bun.&rdquo;</p>
                </blockquote>

                <p>&mdash; Grigore Temciuc </p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Aș dori să mulțumesc Pharma pentru serviciul lor genial pentru clienți. am comandat
                     medicamente de la Pharma și mi-au livrat medicamentele în 3 zile. Tine-o tot asa
                     buna treaba. Pharma este cea mai bună aplicație pentru medicamente. Recomand tuturor să folosească Pharma
                     Site-ul web.&rdquo;</p>
                </blockquote>

                <p>&mdash; Vladimir Perciuleac </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
    include "includes/footer.php"
    ?>
  </div>



</body>

</html>