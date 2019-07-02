@extends('layouts.app')
@section('content')

    @foreach($answer as $da)
        <form action="{{url('/allAnswers')}}">
        <h5 class="card-title">Quection number {!! $da->id!!}</h5>
        <div class="line-ellipse light"><span>{!!$da->body!!}</span></div>
        <p class="card-text-small">Created: {!! $da->created_at !!}<br></p>
        <p class="card-text-small">card-catagary<br></p>
        <div class="form-group"><button class="btn btn-primary" name="right" value="1" type="submit" style="background-color: rgb(15,103,122);">correct</button> <button class="btn btn-danger"  name="wrong" type="submit" value="0" style="background-color: red;">Incorrect</button></div>

        </form>
    @endforeach
@endsection
