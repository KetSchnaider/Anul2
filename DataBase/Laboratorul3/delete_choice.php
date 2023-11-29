<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Delete Scenario</title>
</head>
<body>
    <header>
        <h1>Editor for story Culorile by Emilia Plugaru</h1>
        <div class="action-buttons">
            <a href="/index.html"><button id="homeButton">Home</button></a>
            <a href="/edit.php"><button id="editButton">Edit</button></a>
            <a href="/create.php"> <button id="createButton">Create</button></a>
            <a href="/delete.php"> <button id="deleteButton">Delete</button></a>
            <a href="/modifed_story.php"><button id="viewButton">View modified story</button></a>
        </div>
    </header>

    <main class="form-content">
        <section id="formSection">
            <h2>Delete Scenario</h2>
            <?php
            include 'connect.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
                $scenario_id = $_GET['id'];

                // Delete related data from other tables (characters, circumstance, clothes, characteristics, transport)
                $delete_characters_query = "DELETE FROM characters WHERE scenario_id = $scenario_id";
                $conn->query($delete_characters_query);

                $delete_circumstance_query = "DELETE FROM circumstance WHERE scenario_id = $scenario_id";
                $conn->query($delete_circumstance_query);

                $delete_clothes_query = "DELETE FROM clothes WHERE scenario_id = $scenario_id";
                $conn->query($delete_clothes_query);

                $delete_characteristics_query = "DELETE FROM characteristics WHERE scenario_id = $scenario_id";
                $conn->query($delete_characteristics_query);

                $delete_transport_query = "DELETE FROM transport WHERE scenario_id = $scenario_id";
                $conn->query($delete_transport_query);

                // Delete scenario from scenario table
                $delete_scenario_query = "DELETE FROM scenario WHERE scenario_id = $scenario_id";
                $conn->query($delete_scenario_query);

                echo "<p>Scenario and related data deleted successfully.</p>";
            } else {
                echo "<p>Error: Scenario ID not provided.</p>";
            }
            ?>
        </section>
    </main>

    <script src="script.js"></script>
    <script src="story.js"></script>
</body>
</html>
