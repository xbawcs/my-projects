<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	  <title>Invoice</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
  </head>
  <body>
	<div>
	  <br>
	  <h5 class="text-center">The Class List</h5>
	    <table style="text-align: center;" class="table table-bordered"> 
	      <thead>
	        <tr>
	          <th>STT</th>
	          <th>Code</th>
	          <th>Class Name</th>
	          <th>Number Student</th>
	        </tr>
	      </thead>
	      <tbody id="content-class">
	        @foreach ($classes as $class)
	          <tr>
	            <th>{{ $i++ }}</th>
	            <td>{{ $class->code }}</td>
	            <td>{{ $class->name }}</td>
	            <td>{{ $class->number_student }}</td>
	          </tr>
	        @endforeach
	      </tbody>
	    </table>
	    <p>Total : {{ count($classes) }} class</p>
	</div>
  </body>
</html>