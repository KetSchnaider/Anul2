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
	<section id="part-six">
		<p class="novel-content"> But the <span class="monster">wild thing</span>s cried, “Oh please don’t go we’ll
			<br>eat you up-we love you so!” And <span class="replace">Max</span> said, “No!”<br>The <span
				class="monster">wild thing</span>s roared their terrible roars and gnashed their terrible teeth <br>and
			rolled their terrible eyes and showed their terrible claws <br>but <span class="replace">Max</span> stepped
			into <span class="his">his</span> private boat and waved good-bye <br>and sailed back over a year and in and
			out of weeks and through a day</p>
		<div class="question">
			<h2> Who do you want to <br>take on your journey? </h2>
		</div>
		<section class="two-options">
			<figure id="shark">

					<img src="{{ asset('/img/sharky.gif') }}" alt="shark">

			</figure>
			<figure id="fish">

					<img src="{{ asset('/img/fishy.gif') }}" alt="fish">

			</figure>
		</section>
	</section>

	<section class="fact_container">

		<section class="fun-fact-popup-correct">
			<h2> Good Choice! </h2>
			<p> You chose the frilld shark! Although it looks dangerous it is harmless to humans - the only causes of
				the frilld shark causing harm to people are scientists who have accidentally cut themselves! The frilld
				shark lives as deep as 1, 570m in the ocean! Although the other option appeared harmless, it is the
				puffer fish! The puffer fish has long poisonous spikes that cover its body when it feels threatened. The
				spikes as they are highly toxic to humans! </p>
		</section>

		<section class="fun-fact-popup-incorrect">
			<h2> Unlucky! </h2>
			<p> All though the fish appeared harmless, it is the puffer fish! The puffer fish has long poisonous spikes
				that cover its body when it feels threatened. The spikes as they are highly toxic to humans! The shark
				looks scary but it is harmless to humans - the only causes of the frilld shark causing harm to people
				are scientists who have accidentally cut themselves! The frilld shark lives as deep as 1, 570m in the
				ocean! </p>
		</section>

	</section>
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset ('/js/script.js')}}"></script>
</body>

</html>