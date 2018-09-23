@extends('main')
@section('content')
<style>
.post_header
{
	width:100%;
}
</style>
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
<h1 style="text-align:center;">{{$data['pagetitle']}}</h1>
<?php 
echo Form::open(array('url' => $data['url'], 'method' => 'put'));
echo Form::token();
?>
<div class='col-sm-12'>
<div class="form-group">
	<div class='col-sm-12'><?=Form::label('header','Add New Post');?></div>
	<div class='col-sm-12'><?=Form::text('header',$data['data']->head,array('class'=>'form-control'));?></div>
</div>
<div class="form-group">
	<div class='col-sm-12'><?=Form::textarea('body',$data['data']->body,array('class'=>'form-control'));?></div>
</div>
<div class='col-sm-12' style="text-align:center;">
<?php echo Form::submit('Publish',array('class'=>'btn'));?>
</div>

{{Form::close()}}
@endsection
