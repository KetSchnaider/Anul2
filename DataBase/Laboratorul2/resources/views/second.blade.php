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
		<p class="novel-content"> and an ocean tumbled by with a private boat for <span class="replace">Max</span> <br>
			and <span class="replace_gender"> he</span> sailed off through night and day <br> and in and out of weeks
			<br> and almost over a year <br> to where the <span class="monster">wild thing</span>s are. </p>
		<div class="question">
			<h2> Which boat <br>do you want to ride on? </h2>
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