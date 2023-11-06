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
	<header>
		<h1> Culorile </h1>
		<h4> By Calancea Catalin </h4>
	</header>

	<div id="drag-content">
		<figure id="costume">
			<img src="{{ asset('/img/costume.gif') }}" alt="Wolf Suit">
		</figure>

		<section id="name-in-story-form">
			<form method="get" action="index.html">
				<fieldset>
					<legend>
						<h2>Make your story</h2>
					</legend>
						<div class="form-item">
								<h2>Select your character</h2>							<div class="form-element">
								<select name="gender" id="gender">
									<option value="character1">character1</option>
									<option value="character2">character2</option>
                                    <option value="character3">character3</option>
                                    <option value="character4">character4</option>
                                    <option value="character5">character5</option>
                                    <option value="character6">character6</option>
								</select>
							</div>
						</div>
						<button class="button" type="submit">Submit</button>
					</div>
				</fieldset>	
			</div>
				</fieldset>
			</form>
		</section>
	</div>
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset ('/js/script.js')}}"></script>
</body>

</html>