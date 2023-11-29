<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Atma:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>CRUD APP</title>
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

            $scenario_id = isset($_GET['id']) ? $_GET['id'] : null;

            if ($scenario_id) {

                $scenario_query = "SELECT * FROM scenario WHERE scenario_id = $scenario_id";
                $scenario_result = $conn->query($scenario_query);

                $characters_query = "SELECT * FROM characters WHERE scenario_id = $scenario_id";
                $characters_result = $conn->query($characters_query);
                
                $characteristics_query = "SELECT * FROM characteristics WHERE scenario_id = $scenario_id";
                $characteristics_result = $conn->query($characteristics_query);
                
                $circumstance_query = "SELECT * FROM circumstance WHERE scenario_id = $scenario_id";
                $circumstance_result = $conn->query($circumstance_query);


                $clothes_query = "SELECT * FROM clothes WHERE scenario_id = $scenario_id";
                $clothes_result = $conn->query($clothes_query);

                $transport_query = "SELECT * FROM transport WHERE scenario_id = $scenario_id";
                $transport_result = $conn->query($transport_query);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                  $scenario_name = $_POST['field11'];
                  $update_scenario_query = "UPDATE scenario SET scenario_name = '$scenario_name' WHERE scenario_id = $scenario_id";
                  $conn->query($update_scenario_query);

                  $main_character = $_POST['field1'];
                  $second_character = $_POST['field2'];
                  $negative_main_character = $_POST['field3'];
                  $negative_second_character = $_POST['field4'];
                  
                  $update_characters_query = "UPDATE characters SET main_character = '$main_character', second_character = '$second_character', negative_main_character = '$negative_main_character', negative_second_character = '$negative_second_character' WHERE scenario_id = $scenario_id";
                  $conn->query($update_characters_query);
              
                
                  $circumstance = $_POST['field5'];
                  $season = $_POST['field6'];
              
                  $update_circumstance_query = "UPDATE circumstance SET circumstance = '$circumstance', season = '$season' WHERE scenario_id = $scenario_id";
                  $conn->query($update_circumstance_query);
              
                  // Example: Update clothes table
                  $clothes = $_POST['field7'];
                  $update_clothes_query = "UPDATE clothes SET clothes_for_main_character = '$clothes' WHERE scenario_id = $scenario_id";
                  $conn->query($update_clothes_query);
              
                  // Example: Update characteristics table
                  $characteristics_main = $_POST['field8'];
                  $characteristics_second = $_POST['field9'];
                  $update_characteristics_query = "UPDATE characteristics SET characteristics_for_main_character = '$characteristics_main', characteristics_for_second_character = '$characteristics_second' WHERE scenario_id = $scenario_id";
                  $conn->query($update_characteristics_query);
              
                  // Example: Update transport table
                  $transport = $_POST['field10'];
                  $update_transport_query = "UPDATE transport SET transport_type = '$transport' WHERE scenario_id = $scenario_id";
                  $conn->query($update_transport_query);
              
                  // Redirect to the same page to avoid form resubmission
                  header("Location: ".$_SERVER['PHP_SELF']."?id=$scenario_id");
                  exit();
              }
              
                if ($characters_result->num_rows > 0) {
                    $scenario_data = $scenario_result->fetch_assoc();                  
                    $characters_data = $characters_result->fetch_assoc();
                    $characteristics_data = $characteristics_result -> fetch_assoc();
                    $circumstance_data = $circumstance_result -> fetch_assoc();
                    $clothes_data = $clothes_result -> fetch_assoc();
                    $transport_data = $transport_result -> fetch_assoc();
                    
                    
                    
                    
                    
                    // Replace placeholders with data
                    $scenario_name = $scenario_data['scenario_name'];
                    $second_character = $characters_data['second_character'];
                    $main_character = $characters_data['main_character'];
                    $negative_main_character = $characters_data['negative_main_character'];
                    $negative_second_character = $characters_data['negative_second_character'];
                    $characteristics_pers_principal = $characteristics_data['characteristics_for_main_character'];
                    $characteristics_pers_secundar = $characteristics_data['characteristics_for_second_character'];
                    $circumstance_circumstance = $circumstance_data['circumstance'];
                    $circumstance_season = $circumstance_data['season'];
                    $clothes_clothes = $clothes_data['clothes_for_main_character'];
                    $transport_transport = $transport_data['transport_type'];
                }} ?>
      <section id="formSection">
        <h2>Edit Scenario</h2>

        <form id="title1Form" method="post">
          <label for="field11">Scenario Title</label>
          <input type="text" id="field11" name="field11" value="<?php echo $scenario_name; ?>" required />
       <!-- Example: Table 1 -->
  <h3>Characters</h3>
  <label for="field1">Main Character</label>
  <input type="text" id="field1" name="field1" value="<?php echo $main_character; ?>" required />
  <label for="field2">Second Character</label>
  <input type="text" id="field2" name="field2" value="<?php echo $second_character; ?>" required />
  <label for="field3">Negative Main Character</label>
  <input type="text" id="field3" name="field3" value="<?php echo $negative_main_character; ?>" required />
  <label for="field4">Negative Second Character</label>
  <input type="text" id="field4" name="field4" value="<?php echo $negative_second_character; ?>" required />
<!-- Example: Table 2 -->

  <h3>Circumstance</h3>
  <label for="field5">Circumstance</label>
  <input type="text" id="field5" name="field5" value="<?php echo $circumstance_circumstance; ?>" required />
  <label for="field6">Season</label>
  <input type="text" id="field6" name="field6" value="<?php echo $circumstance_season; ?>" required />


<!-- Example: Table 3 -->
<form id="table3Form" method="post">
  <h3>Clothes</h3>
  <label for="field7">Clothes for Main Character</label>
  <input type="text" id="field7" name="field7" value="<?php echo $clothes_clothes; ?>" required />


<!-- Example: Table 4 -->

  <h3>Characteristics</h3>
  <label for="field8">Characteristics for Main Character</label>
  <input type="text" id="field8" name="field8" value="<?php echo $characteristics_pers_principal; ?>" required />
  <label for="field9">Characteristics for Second Character</label>
  <input type="text" id="field9" name="field9" value="<?php echo $characteristics_pers_secundar; ?>" required />


<!-- Example: Table 5 -->

  <h3>Transport</h3>
  <label for="field10">Transport</label>
  <input type="text" id="field10" name="field10" value="<?php echo $transport_transport; ?>" required />
  <button type="submit">Update Database</button>
</form>

      </section>
    </main>
  </body>
</html>
