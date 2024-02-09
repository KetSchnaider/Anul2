<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php"
    ?>


    <?php
    include "includes/sidebar.php";
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        message();
        ?>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <h2>Detalii produse</h2>
                    <br>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <br>
                    <form class="d-flex" method="GET" action="products.php">
                        <input class="form-control me-2 col" type="search" name="search_item_name" placeholder="Caută produs" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit" name="search_item" value="search">Cauta</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <?php
        edit_item($_SESSION['id']);

        if (isset($_GET['edit'])) {
            $_SESSION['id'] = $_GET['edit'];
            $data = get_item($_SESSION['id']);

        ?>
            <br>
            <h2>Editați detaliile produsului</h2>
            <form action="products.php" method="POST">
                <div class=" form-group mb-3">
                    <label>Nume produs</label>
                    <input pattern="[A-Za-z0-9_]{1,25}" id="exampleInputText1" type="text" class="form-control" placeholder="<?php echo $data[0]['item_title'] ?>" name="name">
                    <div class="form-text">Vă rugăm să introduceți numele produsului în intervalul (1-25) caractere, caractere speciale nu sunt permise!</div>
                </div>
                <div class="form-group">
                    <label>Numele brandului</label>
                    <input pattern="[A-Za-z0-9_]{1,25}" id="validationTooltip01" type="text" class="form-control" placeholder="<?php echo $data[0]['item_brand'] ?>" name="brand">
                    <div class="form-text">Vă rugăm să introduceți numele brandului în intervalul (1-25) caracter/e, caracterul special nu este permis!</div>
                </div>
                <div class="input-group mb-3 form-group">
                    <label class="input-group-text" for="inputGroupSelect01">Categorie</label>
                    <select name="cat" class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="medicine">Medicina</option>
                        <option value="self-care">Ingrijire</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Etichete de produs</label>
                    <input pattern="^[#.0-9a-zA-Z\s,-]+$" id="validationTooltip01" type="text" class="form-control" placeholder="<?php echo $data[0]['item_tags'] ?>" name="tags">
                    <div class="form-text">Vă rugăm să introduceți etichete pentru produs în intervalul (1-250) caracter/e, caracterul special nu este permis!</div>
                </div>
                <div class="form-group">
                    <label>Imaginea produsului</label>
                    <input type="file" accept="image/*" class="form-control" placeholder="<?php echo $data[0]['item_image'] ?>" name="image">
                    <div class="form-text">Va rugam sa introduceti imaginea produsului.</div>
                </div>
                <div class="form-group">
                    <label>Cantitatea produsului</label>
                    <input type="number" class="form-control" placeholder="<?php echo $data[0]['item_quantity'] ?>" name="quantity" min="1" max="999">
                    <div class="form-text">Vă rugăm să introduceți cantitatea de produs din gama (1-999).</div>
                </div>
                <div class="input-group mb-3 form-group">
                    <span class="input-group-text">MDL </span>
                    <input pattern="[0-9]+" id="validationTooltip01" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" placeholder="<?php echo $data[0]['item_price'] ?>">
                </div>
                <div class="form-text">Va rugam sa introduceti pretul produsului.</div>
                <div class="form-group">
                    <label for="inputAddress2">Detalii produs</label>
                    <input type="text" class="form-control" placeholder="<?php echo $data[0]['item_details'] ?>" name="details">
                </div>
                <div class="form-text">Va rugam sa introduceti detaliile produsului.</div>
                <br>
                <button type="submit" class="btn btn-outline-primary" value="update" name="update">Trimite</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="cancel">Anuleaza</button>
                <br> <br>
            </form>
        <?php
        }
        ?>
        <?php
        add_item();
        if (isset($_GET['add'])) {
        ?>
            <br>
            <h2>Adăugați produs</h2>
            <form action="products.php" method="POST">
                <div class=" form-group mb-3">
                    <label>Nume produs</label>
                    <input id="exampleInputText1" type="text" class="form-control" placeholder="Nume produs" name="name">
                    <div class="form-text">Vă rugăm să introduceți numele produsului în intervalul (1-25) caractere, caractere speciale nu sunt permise!</div>
                </div>
                <div class="form-group">
                    <label>Numele brandului</label>
                    <input id="validationTooltip01" type="text" class="form-control" placeholder="Numele brandului" name="brand">
                    <div class="form-text">Vă rugăm să introduceți numele brandului în intervalul (1-25) caracter/e, caracterul special nu este permis!</div>
                </div>
                <div class="input-group mb-3 form-group">
                    <label class="input-group-text" for="inputGroupSelect01">Categorie</label>
                    <select name="cat" class="form-select" id="inputGroupSelect01">
                        <option value="" selected>Alege...</option>
                        <option value="medicine">Medicina</option>
                        <option value="self-care">Ingrijire</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Etichete de produs</label>
                    <input id="validationTooltip01" type="text" class="form-control" placeholder="etichete produs" name="tags">
                    <div class="form-text">Vă rugăm să introduceți etichete pentru produs în intervalul (1-250) caracter/e, caracterul special nu este permis!</div>
                </div>
                <div class="form-group">
                    <label>Imaginea prodsului</label>
                    <input type="file" accept="image/*" class="form-control" placeholder="image" name="image">
                    <div class="form-text">Va rugam sa introduceti imaginea produsului.</div>
                </div>
                <div class="form-group">
                    <label>Cantitatea</label>
                    <input type="number" class="form-control" placeholder="cantitatea disponibila" name="quantity" min="1" max="999">
                    <div class="form-text">Vă rugăm să introduceți cantitatea de produs din gama (1-999)</div>
                </div>
                <div class="input-group mb-3 form-group">
                    <span class="input-group-text">MDL</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" placeholder="Pretul productului">
                </div>
                <div class="form-text">Va rugam sa introduceti pretul produsului.</div>
                <div class="form-group">
                    <label for="inputAddress2">Detalii produs</label>
                    <input type="text" class="form-control" placeholder="detalii produse" name="details">
                </div>
                <div class="form-text">Va rugam sa introduceti detaliile produsului.</div>
                <br>
                <button type="submit" class="btn btn-outline-primary" value="update" name="add_item">Trimite</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="cancel">Anuleaza</button>
                <br> <br>
            </form>
        <?php
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nume</th>
                    
                        <th>
                            <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; color:black;" href="products.php?add=1"> &nbsp;&nbsp;Add&nbsp;&nbsp;</a></button>
                        </th>
                        </th>

                </thead>

                <tbody>
                    <?php
                    $data = all_items();
                    delete_item();
                    if (isset($_GET['search_item'])) {
                        $query = search_item();
                        if (isset($query)) {
                            $data = $query;
                        } else {
                            get_redirect("products.php");
                        }
                    } elseif (isset($_GET['id'])) {
                        $data = get_item_details();
                    }
                    if (isset($data)) {


                        $num = sizeof($data);
                        for ($i = 0; $i < $num; $i++) {
                    ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data[$i]['item_id'] ?></td>
                                <td><?php echo $data[$i]['item_title'] ?></td>
                                <td><?php echo $data[$i]['item_brand'] ?></td>
                                <td><?php echo $data[$i]['item_cat'] ?></td>
                                <td><?php echo $data[$i]['item_tags'] ?></td>
                                <td><?php echo $data[$i]['item_image'] ?></td>
                                <td><?php echo $data[$i]['item_quantity'] ?></td>
                                <td><?php echo $data[$i]['item_price'] ?></td>
                                <td><?php echo $data[$i]['item_details'] ?></td>
                                <td>
                                    <button type="button" class="btn pull-left btn-outline-warning"><a style="text-decoration: none; color:black;" href="products.php?edit=<?php echo $data[$i]['item_id'] ?>">Edit</a></button>
                                </td>
                                <td>
                                    <button type="button" class="btn pull-left btn-outline-danger"><a style="text-decoration: none; color:black;" href="products.php?delete=<?php echo $data[$i]['item_id'] ?>">Delete</a></button>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
</body>