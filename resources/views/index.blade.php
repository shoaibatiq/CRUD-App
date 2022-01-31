<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<h3 class="navbar-brand">C<span>R</span>UD</h3>
  
	<ul class="navbar-nav ml-auto">
	<li class="nav-item active"><a class="nav-link" href="/create">Add New Data</a> </li>
	</ul>
	

  
</nav>
</div>
	<div style="margin-top: 50px;">
	<table class="table-fill">
	<thead>
	<tr>
		<th class="text-left">ID</th>
		<th class="text-left">STD_ID</th>
		<th class="text-left">Semester</th>
		<th class="text-left">Email</th>
		<th class="text-left">First Name</th>
		<th class="text-left">Last Name</th>
		<th class="text-left">Update</th>
		<th class="text-left">Delete</th>
	</tr>
	</thead>
	<tbody>

	<?php foreach($data as $row) : ?>
		<tr>
			<td class='text-left'> {{ $row->id }} </td>
			<td class='text-left'> {{ $row->std_id }} </td>
			<td class='text-left'> {{ $row->semester }} </td>
			<td class='text-left'> {{$row->email }} </td>
			<td class='text-left'> {{ $row->first_name }} </td>
			<td class='text-left'> {{ $row->last_name }} </td>
			<td class='text-left'><a class='btn btn-secondary' href="/update/{{ $row->id }}">Update</a>  </td>
			<td class='text-left'><a class='btn btn-danger' href="/delete/{{ $row->id }}" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>	

		</tr>
	<?php endforeach; ?>
	
	</tbody>
	</table>
	</div>
</body>
</html>
