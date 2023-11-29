<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Atma:wght@300&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css"/>
    <title>Create a new scenario</title>
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
    <?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Insert data into scenario table
        $scenario_name = $_POST['field11'];
        $insert_scenario_query = "INSERT INTO scenario (scenario_name) VALUES ('$scenario_name')";
        $conn->query($insert_scenario_query);

        // Get the scenario_id of the newly inserted scenario
        $new_scenario_id = $conn->insert_id;

        // Insert data into characters table
        $main_character = $_POST['field1'];
        $second_character = $_POST['field2'];
        $negative_main_character = $_POST['field3'];
        $negative_second_character = $_POST['field4'];
        $insert_characters_query = "INSERT INTO characters (scenario_id, main_character, second_character, negative_main_character, negative_second_character) VALUES ($new_scenario_id, '$main_character', '$second_character', '$negative_main_character', '$negative_second_character')";
        $conn->query($insert_characters_query);

        // Insert data into circumstance table
        $circumstance = $_POST['field5'];
        $season = $_POST['field6'];
        $insert_circumstance_query = "INSERT INTO circumstance (scenario_id, circumstance, season) VALUES ($new_scenario_id, '$circumstance', '$season')";
        $conn->query($insert_circumstance_query);

        // Insert data into clothes table
        $clothes = $_POST['field7'];
        $insert_clothes_query = "INSERT INTO clothes (scenario_id, clothes_for_main_character) VALUES ($new_scenario_id, '$clothes')";
        $conn->query($insert_clothes_query);

        // Insert data into characteristics table
        $characteristics_main = $_POST['field8'];
        $characteristics_second = $_POST['field9'];
        $insert_characteristics_query = "INSERT INTO characteristics (scenario_id, characteristics_for_main_character, characteristics_for_second_character) VALUES ($new_scenario_id, '$characteristics_main', '$characteristics_second')";
        $conn->query($insert_characteristics_query);

        // Insert data into transport table
        $transport = $_POST['field10'];
        $insert_transport_query = "INSERT INTO transport (scenario_id, transport_type) VALUES ($new_scenario_id, '$transport')";
        $conn->query($insert_transport_query);

        // Redirect to the same page to avoid form resubmission
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    ?>
    <section id="formSection">
        <h2>Create New Scenario</h2>

        <form id="title1Form" method="post">
            <label for="field11">Scenario Title</label>
            <input type="text" id="field11" name="field11" value="" required/>
            <!-- Example: Table 1 -->
            <h3>Characters</h3>
            <label for="field1">Main Character</label>
            <input type="text" id="field1" name="field1" required/>
            <label for="field2">Second Character</label>
            <input type="text" id="field2" name="field2" required/>
            <label for="field3">Negative Main Character</label>
            <input type="text" id="field3" name="field3" required/>
            <label for="field4">Negative Second Character</label>
            <input type="text" id="field4" name="field4" required/>
            <!-- Example: Table 2 -->
            <h3>Circumstance</h3>
            <label for="field5">Circumstance</label>
            <input type="text" id="field5" name="field5" required/>
            <label for="field6">Season</label>
            <input type="text" id="field6" name="field6" required/>
            <!-- Example: Table 3 -->
            <h3>Clothes</h3>
            <label for="field7">Clothes for Main Character</label>
            <input type="text" id="field7" name="field7" required/>
            <!-- Example: Table 4 -->
            <h3>Characteristics</h3>
            <label for="field8">Characteristics for Main Character</label>
            <input type="text" id="field8" name="field8" required/>
            <label for="field9">Characteristics for Second Character</label>
            <input type="text" id="field9" name="field9" required/>
            <!-- Example: Table 5 -->
            <h3>Transport</h3>
            <label for="field10">Transport</label>
            <input type="text" id="field10" name="field10" required/>
            <button type="submit">Create Scenario</button>
        </form>

    </section>
</main>
</body>
</html>
