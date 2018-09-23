@extends('main')
@section('content')
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
<div class="container">

<h1 style="text-align:center;">{{$data['pagetitle']}}</h1>
<?php 
echo Form::open(array('url' => 'update/blog/', 'method' => 'put'));
echo Form::token();
?>
<div class='col-sm-12'>
<div class="form-group">
	<div class='col-sm-12'><?=Form::label('header','Header');?></div>
	<div class='col-sm-12'><?=Form::text('header','',array('class'=>'form-control'));?></div>
</div>
<div class="form-group">
	<div class='col-sm-12'><?=Form::textarea('body','',array('class'=>'form-control'));?></div>
</div>
<div class='col-sm-12' style="text-align:center;">
<?php echo Form::submit('Publish',array('class'=>'btn'));?>
</div>

{{Form::close()}}
</div>
@endsection