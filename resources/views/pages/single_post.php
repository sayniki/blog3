@extends('main')
@section('content')
<style>
	.table_data  {border-collapse: collapse;margin:5px;text-align:center;}
	.table_data th { padding: 10px; }
	.table_data td { padding: 5px; }
</style>
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
<div class="container">
	<br>
	<table align=center class='table_data' >
			<tr>
				<th>Head</th>
				<td><a style='color:blue' href='blog/show/{{$data2->id}}'>{{$data2->head}}</a></td>
			</tr>
			<tr>
				<th>Author</th>
				<td>{{$data2->author}}</td>
			</tr>
			<tr>
				<td colspan="2">
					{{$data2->body}}
				</td>
			</tr>
    </table>
   
   
</div>
@endsection