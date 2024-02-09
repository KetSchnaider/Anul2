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
                    <h2>Detalii Comenzi</h2>
                    <br>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <br>
                    <form class="d-flex" method="GET" action="orders.php">
                        <input class="form-control me-2 col" type="search" name="search_order_id" placeholder="Căutați comanda (ID)" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit" name="search_order" value="search">Cauta</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">ID utilizator</th>
                        <th scope="col">ID produs</th>
                        <th scope="col">Cantiate produs</th>
                        <th scope="col">Data comenzii</th>
                        <th scope="col">Statusul comenzii</th>
                </thead>

                <tbody>
                    <?php
                    $data = all_orders();
                    delete_order();
                    if (isset($_GET['search_order'])) {
                        $query = search_order();
                        if (!empty($query)) {
                            $data = $query;
                        } else {
                            get_redirect("orders.php");
                        }
                    }
                    $num = sizeof($data);
                    for ($i = 0; $i < $num; $i++) {

                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $data[$i]['order_id'] ?></td>
                            <td><?php echo $data[$i]['user_id'] ?></td>
                            <td><?php echo $data[$i]['item_id'] ?></td>
                            <td><?php echo $data[$i]['order_quantity'] ?></td>
                            <td><?php echo $data[$i]['order_date'] ?></td>
                            <?php if ($data[$i]['order_status'] == 1) {
                            ?>
                                <td style="color: green;">
                                    livrat
                                </td>
                            <?php
                            } else {
                            ?>
                                <td style="color: red;">
                                în aşteptare
                                </td>
                            <?php
                            }
                            ?>
                            <td>
                                <button type="button" class="btn  btn-outline-danger"><a style="text-decoration: none; color:black;" href="orders.php?delete=<?php echo $data[$i]['order_id'] ?>">Sterge</a></button>
                            </td>

                            <?php if ($data[$i]['order_status'] == 1) {
                            ?>
                                <td>
                                    <button type="button" class="btn  btn-outline-danger"><a style="text-decoration: none; color:black;" href="orders.php?undo=<?php echo $data[$i]['order_id'] ?>">&nbsp;Inapoi&nbsp;</a></button>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td>
                                    <button type="button" class="btn  btn-outline-success"><a style="text-decoration: none; color:black;" href="orders.php?done=<?php echo $data[$i]['order_id'] ?>">&nbsp;Terminat&nbsp;</a></button>

                                </td>
                            <?php
                            }
                            ?>
                            <td>
                                <button type="button" class="btn  btn-outline-info"><a style="text-decoration: none; color:black;" href="customers.php?id=<?php echo $data[$i]['user_id'] ?>"> &nbsp;Detalii utilizator&nbsp; </a></button>
                            </td>
                            <td>
                                <button type="button" class="btn  btn-outline-info"><a style="text-decoration: none; color:black;" href="products.php?id=<?php echo $data[$i]['item_id'] ?>">Detalii produs</a></button>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br><br>
        <?php
        edit_admin($_SESSION['admin_id']);
        if (isset($_GET['edit'])) {
            $_SESSION['admin_id'] = $_GET['edit'];
            $data = get_admin($_SESSION['admin_id']);

        ?>
            <br>
            <h2>Editați detaliile administratorului</h2>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>Nume</label>
                    <input pattern="[A-Za-z_]{1,15}" type="text" class="form-control" placeholder="<?php echo $data[0]['admin_fname'] ?>" name="admin_fname">
                    <div class="form-text">Vă rugăm să introduceți numele în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="validationTooltip01">Prenume</label>
                    <input pattern="[A-Za-z_]{1,15}" id="validationTooltip01" type="text" class="form-control" placeholder="<?php echo $data[0]['admin_lname'] ?>" name="admin_lname">
                    <div class="form-text">Vă rugăm să introduceți prenumele în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $data[0]['admin_email'] ?>" name="admin_email">
                    <div class="form-text">vă rugăm să introduceți e-mailul în formatul: exemplu@gmail.com.</div>
                </div>
                <button type="submit" class="btn btn-outline-primary" value="update" name="admin_update">Confirma</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="admin_cancel">Anuleaza</button>
                <br> <br>
            </form>

        <?php
        }
        add_admin();
        if (isset($_GET['add'])) {

        ?>
         <h2>Adăugați un nou administrator </h2>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label>Nume</label>
                    <input pattern="[A-Za-z_]{1,15}" type="text" class="form-control" placeholder="Nume" name="admin_fname">
                    <div class="form-text">Vă rugăm să introduceți Nume în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="validationTooltip01">Prenume</label>
                    <input pattern="[A-Za-z_]{1,15}" id="validationTooltip01" type="text" class="form-control" placeholder="Prenume" name="admin_lname">
                    <div class="form-text">Vă rugăm să introduceți numele de familie în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="admin_email">
                    <div class="form-text">Vă rugăm să introduceți e-mailul în formatul: example@gmail.com.</div>
                </div><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Parola</label>
                    <input type="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" class="form-control" placeholder="Parola" name="admin_password">
                    <div class="form-text">
                        <ul>
                            <li>Trebuie să aibă minimum 8 caractere</li>
                            <li>Trebuie să conțină cel puțin 1 număr</li>
                            <li>Trebuie să conțină cel puțin un caracter majuscul</li>
                            <li>Trebuie să conțină cel puțin un caracter mic</li>
                        </ul>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary" value="update" name="add_admin">Trimite</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="admin_cancel">Anulare</button>
                <br> <br>
            </form>

        <?php
        }

        ?>
    </main>
    </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
</body>