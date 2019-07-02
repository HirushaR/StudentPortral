
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-left: 10px;">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('python')}}" style="background-color: #a5dde2;filter: brightness(100%);color: #575957;">&nbsp; Python &nbsp;</a></li>

            </ul>

        </div>
    </div>
</nav>
<div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
    <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Question: {!! $question -> question !!} </p>
    <form>
        <div class="form-group" style="background-color: rgba(174,23,23,0);"><textarea class="form-control" id="summernote" name="editordata" style="height: 280px;width: 500px;margin-left: 50px;"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">Submit</button></div>
    </form>
</div>
@endsection
