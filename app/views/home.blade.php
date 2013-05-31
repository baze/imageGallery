@extends('layouts.master')

@section('content')
    <div class="span12">
    	<div class="row">
        {{ Form::open(array('url' => 'image', 'files' => true)) }}

            @include('_partials/alert')

            <div class="span12">
                @include('forms.upload')
            </div>

        {{ Form::close() }}
    	</div>
	</div>
@stop