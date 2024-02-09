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
                    <h2>Detalii despre Admin</h2>
                    <br>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <br>
                    <form class="d-flex" method="GET" action="admin.php">
                        <input class="form-control me-2 col" type="search" name="search_admin_email" placeholder="Cauta admin (email)" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit" name="search_admin" value="search">Căutare</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
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
                    <div class="form-text">Vă rugăm să introduceți prenumele în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="validationTooltip01">Prenume</label>
                    <input pattern="[A-Za-z_]{1,15}" id="validationTooltip01" type="text" class="form-control" placeholder="<?php echo $data[0]['admin_lname'] ?>" name="admin_lname">
                    <div class="form-text">Vă rugăm să introduceți numele de familie în intervalul (1-30) caracter/e, caractere speciale și numere nu sunt permise!</div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $data[0]['admin_email'] ?>" name="admin_email">
                    <div class="form-text">vă rugăm să introduceți e-mailul în formatul: examplu@gmail.com.</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Parola</label>
                    <input type="password" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" class="form-control" placeholder="Password" name="admin_password">
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
                <button type="submit" class="btn btn-outline-primary" value="update" name="admin_update">Trimite</button>
                <button type=" submit" class="btn btn-outline-danger" value="cancel" name="admin_cancel">Anulare</button>
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
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nume</th>
                        <th scope="col">Prenume</th>
                        <th scope="col">Email</th>
                        <th scope="col">
                        <th scope="col">
                            <button type="button" class="btn btn-outline-primary "><a style="text-decoration: none; color:black;" href="admin.php?add=1"> &nbsp;&nbsp;Adauga&nbsp;&nbsp;</a></button>
                        </th>
                        </th>

                </thead>

                <tbody>
                    <?php
                    $data = all_admins();
                    delete_admin();
                    if (isset($_GET['search_admin'])) {
                        $query = search_admin();
                        if (!empty($query)) {
                            $data = $query;
                        } else {
                            get_redirect("admin.php");
                        }
                    }
                    $num = sizeof($data);
                    for ($i = 0; $i < $num; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $data[$i]['admin_id'] ?></td>
                            <td><?php echo $data[$i]['admin_fname'] ?></td>
                            <td><?php echo $data[$i]['admin_lname'] ?></td>
                            <td><?php echo $data[$i]['admin_email'] ?></td>
                            <td>
                                <button type="button" class="btn pull-left btn-outline-warning"><a style="text-decoration: none; color:black;" href="admin.php?edit=<?php echo $data[$i]['admin_id'] ?>">Editeaza</a></button>
                            </td>
                            <?php
                            if ($data[$i]['admin_id'] != $_SESSION['admin_id']) {
                            ?>
                                <td>
                                    <button type="button" class="btn pull-left btn-outline-danger"><a style="text-decoration: none; color:black;" href="admin.php?delete=<?php echo $data[$i]['admin_id'] ?>">Șterge</a></button>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td></td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php  }
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