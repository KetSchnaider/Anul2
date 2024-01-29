<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Story with modified scenario</title>
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
	<main class="story-content">
        <?php
            include 'connect.php';

            // Assuming scenario_id is passed through the URL
            $scenario_id = isset($_GET['id']) ? $_GET['id'] : null;

            if ($scenario_id) {
                // Fetch data from the characters table
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

                if ($characters_result->num_rows > 0) {
                    
                    
                    
                    $characters_data = $characters_result->fetch_assoc();
                    $characteristics_data = $characteristics_result -> fetch_assoc();
                    $circumstance_data = $circumstance_result -> fetch_assoc();
                    $clothes_data = $clothes_result -> fetch_assoc();
                    $transport_data = $transport_result -> fetch_assoc();
                    
                    
                    $variables = array(
                        'second_character',
                        'main_character',
                        'negative_main_character',
                        'negative_second_character',
                        'characteristics_pers_principal',
                        'characteristics_pers_secundar',
                        'circumstance_circumstance',
                        'circumstance_season',
                        'clothes_clothes',
                        'transport_transport'
                    );
                            
                    // Replace placeholders with data
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
                   
                    foreach ($variables as $variable) {
                        $$variable = "<span style='background-color: yellow;'>{$$variable}</span>";
                    }
                   
                    echo "<div id='part1' class='story-part'>
                            <p>– Dormi, $second_character, vorbim altă dată. <br>
                                – $main_character! Insistă $second_character. Nu vreau să dorm! Vreau să vorbim!<br>
                                – Bine, $second_character! îşi deschide un ochi $characteristics_pers_principal $main_character. Despre ce să vorbim?<br>
                                – Despre cât de frumos e acolo sus…<br>
                                – Vai, $second_character, ţi-am povestit de atâtea ori.<br>
                                – Mai vreau, $main_character.<br>
                                – Atunci ascultă… și $main_character îşi începe povestea. Acolo $circumstance_circumstance, şopteşte $main_character, adică deasupra pământului – e o altă lume. Nu zic, şi la noi e bine şi e frumos, căci aici ne este casa, dar acolo, cum sa-ţi spun, e altfel… În primul rând e multă lumină. Şi sunt multe, multe culori. Totul e colorat. Da… În sfârşit am înţeles… Culorile… Iată de ce sus e atât de frumos.<br>
                                – $main_character, când ieşim afară?<br>
                                – Vai $second_character. De câte ori să-ţi zic? Ai niţică răbdare. Acum e $circumstance_season. Ne-am ascuns în căsuţa noastră. Multe gâze şi vietăţi mici când e cald mişună pe afară, când e frig se imbraca in $clothes_clothes. Chiar şi culorile pare-se dorm pe vreme de $circumstance_season. Aşa că… Închide ochii, îţi voi cânta un cântecel, iar tu vei face nani.<br>
                                – Mai vreau, $main_character.<br>
                                – Atunci ascultă… şi $characteristics_pers_principal - $main_character îşi începe povestea. Acolo sus, şopteşte $main_character, adică deasupra $circumstance_circumstance – e o altă lume. Nu zic, şi la noi e bine şi e frumos, căci aici ne este casa, dar acolo, cum sa-ţi spun, e altfel… În primul rând e multă lumină. Şi sunt multe, multe culori. Totul e colorat. Da… În sfârşit am înţeles… Culorile… Iată de ce sus e atât de frumos.<br>

                            </p>
                          </div>";
                    
                    echo "<div id='part2' class='story-part'>
                            <p>– Nu vreau nani! Nu-mi place aici!<br>
                            Oricât de $characteristics_pers_principal ar fi $main_character, până la urmă îşi iese din fire:<br>
                            – Încetează! strigă $main_character. Vom merge sus cu $transport_transport doar când ni se va da de ştire că e posibil! Gata! Nici o vorbă mai mult! Dormi!<br>
                            – $main_character, începe iarăşi $second_character. Spune-mi… Cine ne va da de ştire?<br>
                            – Înţelegi scumpule, deasupra $circumstance_circumstance e $negative_main_character. $negative_main_character sunt diferiţi… Adică de diferite culori, de diferite mărimi. Când e $circumstance_season şi cerul se acoperă cu  $negative_main_character negri,  $negative_main_character cel mai important îşi ia toba şi începe să bată: Bah! Bah! Bah! Bah! Toba lui se aude până la noi. Deci vorbim după ce auzim bubuitul. Acum dormi!<br>
                      – {$main_character}! Auzi!? sare {$second_character} din pătucul său. {$negative_main_character} cel mai important bate din tobă!
                            – Da? nu-i vine să creadă {$main_character} O fi venit {$circumstance_season}?<br>
                      – A venit, {$main_character}! A venit! Hai sa mergem afară! Repede! Vreau să văd culorile!<br>
                      – Nu, {$second_character}. Încă nu…<br>
                      – De ce?! M-ai minţit!? Atunci… plec singur, fără tine!<br>
                          </p>
                        </div>";
            
                        
                    echo "<div id='part3' class='story-part'>
                        <p>– Stai, {$second_character}! Aşteaptă! Doar un pic. Mai întâi de toate ţărâna trebuie să devină reavănă, puhavă, ca să putem săpa tunelul prin care ne vom strecura. Nu durează mult. Acuş picăturile calde de ploaie se vor scurge în sol… Ah! E atât de plăcut când faci prima scăldătoare de {$circumstance_season} Atât de plăcut… Vezi? Solul începe să devină umed. Deci… putem să pornim săpatul.<br>
                        Cele două stau într-o grădină plină de flori, plină de culori, {$characteristics_pers_secundar} {$second_character} nu încetează să se minuneze de frumuseţea din jur.<br>
                          – {$main_character}, zice {$second_character}, nu mă mai întorc acasă. Îmi place atât de mult aici. Mai ales îmi plac florile… sunt foarte frumoase!<br>
                                        – Eh, oftează {$characteristics_pers_principal} {$main_character}, prea multe primejdii ne înconjoară… $negative_second_character, iată răul cel mare. $negative_second_character!<br>
                                        – {$main_character}! Priveşte! Ce fiinţă ciudată aleargă spre noi?! E nespus de nostimă! Iar în urma ei – o mulţime de ghemuleţe aurii! Mă duc să-i salut! strigă {$second_character}, apoi porneşte cu îndrăzneală în întâmpinarea $negative_second_character.<br>
                                        – Vai, {$second_character}, ce faci!? e disperată {$main_character} cea {$characteristics_pers_principal}, reuşind totuşi să-şi împingă odrasla înapoi în tunel. Am scăpat, răsuflă {$main_character} uşurată. Să nu te fi oprit la timp… Dar… să nu mai vorbim. Principalul e că ai văzut… culorile. Cred că altădată nu mai riscăm. Era cât pe ce să ne înghită o $negative_second_character<br>
                      
                              E mult de lucru {$circumstance_circumstance}. {$second_character} şi {$main_character} sunt convinşi că şi datorită lor din solul pufos răsar în fiecare {$circumstance_season} culorile.</
                      </p>
                    </div>";
                } else {
                    echo "<p>No data found for the provided scenario ID in the characters table.</p>";
                }
            } else {
                echo "<p>No scenario ID provided.</p>";
            }
        ?>
        <div class="navigation-buttons">
            <button id="prevButton" onclick="toggleStoryPart('prev')" style="display:none">Previous</button>
            <button id="nextButton" onclick="toggleStoryPart('next')">Next</button>
        </div>

    </main>

	<script src="script.js"></script>
</body>
</html>
