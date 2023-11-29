<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>List of existing scenario</title>
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
            <h2>Select Scenarios</h2>
            <table id="scenariosTable">
                <thead>
                    <tr>
                        <th>Scenario ID</th>
                        <th>Scenario Name</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'connect.php'; ?>
                    <?php
                        $sql = "SELECT scenario_id, scenario_name FROM scenario";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['scenario_id']}</td>
                                        <td>{$row['scenario_name']}</td>
                                        <td><a href='modified_story_choice.php?id={$row['scenario_id']}'><button>View</button></a></td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No scenarios found</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <script src="script.js"></script>
    <script src="story.js"></script>
</body>
</html>
