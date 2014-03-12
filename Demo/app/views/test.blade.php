@extends('layouts.master')

@section('content')

{{ Form::open() }}

<h1>How many ice cream cones do you have?</h1>

{{ Form::text('ice_cream_cones') }}

{{ Form::submit() }}

{{ Form::close() }}

@stop