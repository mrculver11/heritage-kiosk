<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/medalofhonor.css">
	<title>Medal of Honor</title>
</head>
<body>
	<div class=intro> 
		<h1>MEDAL OF HONOR RECIPIENTS</h1>
		<p>Thirty-three Quartermasters have been awarded the Medal of Honor.  The most recent, Private George Watson, 29th Quartermaster Regiment, was awarded the medal posthumously for his heroism in World War II.</p>
	</div>
	 <div id='columns'>
		@foreach ($mohs as $moh)
			
				<li>{{ $moh->name }}</a></li>
		
		@endforeach
 	</div>
	<div class="home">
	<a href="/">Home</a>
	</div>
</body>
</html>