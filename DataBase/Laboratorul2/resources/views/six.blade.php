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
	<section id="part-seven">
		<p class="novel-content"> and into the night of <span class="his">his</span> very own room <br>where <span
				class="replace_gender">he</span> found <span class="his">his</span> supper waiting for <span
				class="him">him</span> <br>and it was still hot. </p>
		<div class="question">
			<h2> Which dinner do you want? </h2>
		</div>

		<section class="two-options">
			<figure id="meal_one">

					<img src="{{ asset('/img/food_good.gif') }}" alt="food cover">

			</figure>
			<figure id="meal_two">

					<img src="{{ asset('/img/food_bad.gif') }}" alt="food cover">

			</figure>
		</section>
	</section>

	<section class="fact_container">
		<section class="fun-fact-popup-correct">


			<h2> Good Choice! </h2>
			<p> Good choice! Although the meal cover was cool, offputting colours there is a warm spaghetti bolegnase
				underneath! If you had chosen the meal cover composed of warm reds, you would be eating nothing for
				dinner! </p>
		</section>

		<section class="fun-fact-popup-incorrect">


			<h2> Unlucky! </h2>
			<p> Although the meal cover was composed of warm reds, there was nothing underneath it! No food for you
				tonight! If you had chosen the meal cover that was composed of cool, offputting colours, then you would
				be eating warm spaghetti bolegnase for dinner. </p>
		</section>
	</section>

	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset ('/js/script.js')}}"></script>
</body>

</html>