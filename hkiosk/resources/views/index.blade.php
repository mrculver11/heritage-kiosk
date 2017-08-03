<!DOCTYPE html>
<html>
<head>
	<link href="/css/index.css" rel="stylesheet">
	<title>General List</title>
</head>
<body>
 <div id='columns'>
		@foreach ($generals as $general)
			@if ($general->id <= 27)
				<li><a href="http://127.0.0.1:8000/index/{id}" >{{ $general->name }}</a></li>
			@endif	
		@endforeach
 </div>
  <div class="intro"> 
 	<h1>THE QUARTERMASTER GENERALS</h1>
 	<p>Since the appoitment of Thomas Mifflin by General George Washington in 1775, 54 officers have held the title of "Quartermaster General, United States Army." Tap on a name to learn more about them.</p>
 </div>
 <div class="home">
 	<a href="http://127.0.0.1:8000/" >Home</a>
 </div>
 <div class="next">
 	<p>Next</p>
 </div>
</body>
</html>