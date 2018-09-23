@extends('main')
@section('content')
<style>
	.table_data  {border-collapse: collapse;margin:5px;}
	.table_data th { padding: 10px; border:1px solid black; }
	.table_data td { padding: 5px;  border:1px solid black;}
</style>
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
<div class="container">
	<br>
	 <div class="row">
       <a href="{{url('/post')}}" class="btn btn-success">Create Ticket</a>
    </div>
	<table align=center class='table_data' >
		<thead>
			<tr>
				<th>Count</th>
				<th>Head</th>
				<th>Author</th>
				<th colspan=2>Action</th>
			</tr>
		</thead>
	<?php 
	$count=1;
	foreach($data['data'] as $data2)
	{	?>
		<tr>
			<td>{{$count++}}</td>
			<td><a style='color:blue' href='blog/show/{{$data2->id}}'>{{$data2->head}}</a></td>
			<td>{{$data2->author}}</td>
			<td><a style='color:blue' href='edit/blog/{{$data2->id}}'>Edit</a></td>
			<td><a style='color:blue' href='blog/delete/{{$data2->id}}'>Delete</a></td>
		</tr>
    <?php }?>
    </table>
   
   
</div>
@endsection