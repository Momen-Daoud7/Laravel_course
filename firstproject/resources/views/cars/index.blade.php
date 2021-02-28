
	<div>
		<H1>cars</H1>
		<a href="cars.create">Add new car</a>
		@foreach($cars as $car)
			<div>
				<h2>{{$car->name}}</h2>
				
				<h5>{{$car->founded}}</h5>
				<p>{{$car->description}}</p>
				<br><br><br>
			</div>
		@endforeach;
	</div>
