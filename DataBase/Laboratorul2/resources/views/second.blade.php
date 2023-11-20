<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Culorile</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
	<link href="https://fonts.googleapis.com/css?family=Chango" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco" rel="stylesheet">
</head>
<body>
	<section id="part-three">
	<p class="novel-content">         – Dormi, {{ nume_personaj_secundar }}, vorbim altă dată.
        – {{ nume_personaj_principal }}! Insistă {{ nume_personaj_secundar }}. Nu vreau să dorm! Vreau să vorbim!
        – Bine, {{ nume_personaj_secundar }},! îşi deschide un ochi {{ nume_personaj_principal }},. Despre ce să vorbim?
        – Despre cât de frumos e {{ nume_imprejurari }}… 
        – Vai, {{ nume_personaj_secundar }},, ţi-am povestit de atâtea ori.
        – Mai vreau, {{ nume_personaj_secundar }},!.
        – Atunci ascultă… şi {{ nume_personaj_principal }}, îşi începe povestea. Acolo {{ nume_imprejurari }}, şopteşte {{ nume_personaj_principal }},, adică deasupra {{ nume_imprejurari }} – e o altă lume. Nu zic, şi la noi e bine şi e frumos, căci aici ne este casa, dar acolo, cum sa-ţi spun, e altfel… În primul rând e multă lumină. Şi sunt multe, multe culori. Totul e colorat. Da… În sfârşit am înţeles… Culorile… Iată de ce sus e atât de frumos.
        – {{ nume_personaj_principal }},, când ieşim {{ nume_imprejurari }}?
        – Vai {{ nume_personaj_secundar }},. De câte ori să-ţi zic? Ai niţică răbdare. Acum e {{ nume_anotimp }}, Ne-am ascuns în căsuţa noastră ca sa nu îngheţăm. Multe gâze şi vietăţi mici când e cald mişună pe afară, când e frig se imbraca in {{ nume_haine }} . Chiar şi culorile pare-se dorm pe vreme de {{ nume_anotimp }}. Aşa că… Închide ochii, îţi voi cânta un cântecel, iar tu vei face nani.
        – Nu vreau nani! Nu-mi pasă de frig! Nu-mi place aici!
     Oricât de {{ nume_caracteristici}} ar fi {{ nume_personaj_principal }},, până la urmă îşi iese din fire:
        – Încetează! strigă {{ nume_personaj_principal }},. Vom merge sus cu {{ nume_transport }} doar când ni se va da de ştire că e posibil! Gata! Nici o vorbă mai mult! Dormi!
        – {{ nume_personaj_principal }},, începe iarăşi {{ nume_personaj_secundar }},. Spune-mi… Cine ne va da de ştire?
        – Înţelegi {{ nume_personaj_secundar }},, deasupra pământului e cerul cu nori. Norii sunt diferiţi… Adică de diferite culori, de diferite mărimi. Când e primăvară şi cerul se acoperă cu nori negri, tuciurii – norul cel mai important îşi ia toba şi începe să bată: Bah! Bah! Bah! Bah! Toba lui se aude până la noi. Deci vorbim după ce auzim bubuitul. Acum dormi!
  – {{ nume_personaj_principal }},! Auzi!? sare {{ nume_personaj_secundar }}, din pătucul său. Norul cel mai important bate din tobă!
        – Da? nu-i vine să creadă {{ nume_personaj_principal }},. O fi venit {{ nume_imprejurari }}?
        – A venit, {{ nume_personaj_principal }},! A venit! Hai sa mergem afară! Repede! Vreau să văd culorile!
        – Nu, {{ nume_personaj_secundar }},. Încă nu…
        – De ce?! M-ai minţit!? Atunci… plec singur, fără tine!
        – Stai, {{ nume_personaj_secundar }},! Aşteaptă! Doar un pic. Mai întâi de toate ţărâna trebuie să devină reavănă, puhavă, ca să putem săpa tunelul prin care ne vom strecura. Nu durează mult. Acuş picăturile calde de ploaie se vor scurge în sol… Ah! E atât de plăcut când faci prima scăldătoare de primăvară… Atât de plăcut… Vezi? Solul începe să devină umed. Deci… putem să pornim săpatul.
        Cele două râme stau într-o grădină plină de flori, plină de culori. Micuţul {{ nume_personaj_secundar }}, nu încetează să se minuneze de frumuseţea din jur.
        – {{ nume_personaj_principal }},, zice el, nu mă mai întorc acasă. Îmi place atât de mult aici. Mai ales îmi plac florile… sunt foarte frumoase!
        – Eh, oftează {{ nume_personaj_principal }},. Frumos, frumos… Dar locul unei {{personaj}} e în pământ. Dacă o {{personaj }} stă mult timp sub razele soarelui, se usucă. Şi nici măcar nu acest lucru e cel mai important. Prea multe primejdii ne înconjoară… {{ personaj_tip_negativ }}, iată răul cel mare. {{ personaj_tip_negativ }},!
 </p>
		</div>
		<section class="two-options">
			<figure id="boat_one">
				<a href="boats_fact_correct.html">
					<img src="{{ asset('/img/boat_one.gif') }}" alt="boat">
				</a>
			</figure>
			<figure id="boat_two">
				<a href="boats_fact_incorrect.html">
					<img src="{{ asset('/img/boat_two.gif') }}" alt="boat">
				</a>
			</figure>
		</section>
	</section>
	<section class="fact_container">
		<section class="fun-fact-popup-correct">
			<h2> Good Choice! </h2>
			<p> You chose a boat representing an old, famous ship the Mayflower! It is one one of the most important
				ships in American history. <br>
				This cargo ship brought the pilgrims to Massachusetts during the Great Puritan Migration in the 17th
				century.<br>
				Although the other boat looked beautiful, it was inspired by the Titanic, a steamship that sank in
				April, 1912, <br>
				off the coast of Newfoundland in the North Atlantic after sideswiping an iceberg during its maiden
				voyage. </p>
		</section>

		<section class="fun-fact-popup-incorrect">
			<nav class="exit"> <a href="part_three.html"> X Close </a>
			</nav>
			<h2> Unlucky! </h2>
			<p> Although the boat you chose looked beautiful, it was inspired by the Titanic, a steamship that sank in
				April, 1912, <br>
				off the coast of Newfoundland in the North Atlantic after sideswiping an iceberg during its maiden
				voyage. <br>
				The other boat may not have appeared as mighty, but it is inspired after an old, famous ship the
				Mayflower! It is one one <br>
				of the most important ships in American history.. </p>
		</section>
	</section>
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset ('/js/script.js')}}"></script>

</body>

</html>