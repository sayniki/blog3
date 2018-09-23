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
	<div>
		<fieldset>
			<h1 style="text-align:center;">{{$data['pagetitle']}}</h1>
			<?php 
			echo Form::open(array('url' =>'log_in', 'method' => 'put'));
			echo Form::token();
			?>
			<div class="form-group">
				<div class='col-sm-3'><?=Form::label('user_name','User Name');?></div>
				<div class='col-sm-9'>{{ Form::text('user_name', '', array('placeholder' => 'email@yahoo.com')) }}</div>
			</div>
			<div class="form-group">
				<div class='col-sm-3'><?=Form::label('header','Password');?></div>
				<div class='col-sm-9'>{{ Form::password('password') }}</div>
			</div>
			<?php echo Form::submit('Publish',array('class'=>'btn'));?>
			{{Form::close()}}
		</fieldset>
	</div>
</div>
@endsection