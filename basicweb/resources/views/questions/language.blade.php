
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-left: 10px;">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">


        </div>
    </div>
</nav>
<div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
    @if($question->answer()->where('question_id',$question->id)->get('body')->first())
        You Answerd for this question!
       {{--your answer is {{$question->answer()->'body'->first()}}--}}
        @else
        @if($question)
            <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Question: {!! $question -> body !!} </p>
            <form method="post" action="{{url('Answer')}}">
                @csrf
                <div class="form-group" style="background-color: rgba(174,23,23,0);">
                    <input type="hidden" name="question_id" value="{!! $question->id !!}">
                    <textarea class="form-control" id="summernote" name="useranswer" style="height: 280px;width: 500px;margin-left: 50px;"></textarea></div>
                <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">Submit</button></div>
            </form>
        @endif
    @endif
</div>
@endsection
