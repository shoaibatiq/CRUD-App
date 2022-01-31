
<html>

<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<h3 class="navbar-brand">CR<span>U</span>D</h3>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item active"><a class="nav-link" href="/">Home</a> </li>
		</ul>



	</nav>
	<br /><br />

	<div id="main">
		<form method="post" name="form1">
			@csrf
			<div class="form-group">

				<input value='{{ $data["first_name"] }}' type="text" class="form-control" id="fname" name="fname" aria-describedby="fname" placeholder="First Name">
				<span style="color:red;">@error('fname'){{ $message }} @enderror</span>
			</div>
			<div class="form-group">

				<input value='{{ $data["last_name"] }}' type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" placeholder="Last Name">
				<span style="color:red;">@error('lname'){{ $message }} @enderror</span>
			</div>
			<div class="form-group">

				<input value='{{ $data["std_id"] }}' type="text" class="form-control" id="std_id" name="std_id" aria-describedby="std_id" placeholder="Student ID">
				<span style="color:red;">@error('std_id'){{ $message }} @enderror</span>
			</div>
			<div class="form-group">

				<input value='{{ $data["email"] }}' type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
				<span style="color:red;">@error('email'){{ $message }} @enderror</span>
			</div>
			<div class="form-group">

				<input value='{{ $data["semester"] }}' type="number" class="form-control" id="sem" name="sem" aria-describedby="sem" placeholder="Semester">
				<span style="color:red;">@error('sem'){{ $message }} @enderror</span>
			</div>
			
			<input value='{{ $data["id"] }}' type="hidden" class="form-control" id="id" name="id" aria-describedby="id" >

			<input type="submit" class="btn btn-success" name="Submit" value="Update"></input>
		</form>
	</div>
</body>

</html>