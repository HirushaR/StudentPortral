@extends('layouts.app')
@section('content')

<div class="container" style="margin:40px">
    <p></p>
    <form method="post" action="{{route('insert')}}">
        @csrf
        <select name="name" class="dropdow ">
            <option>python</option>
            <option>c-language</option>
            <select>
        <div class="form-group"><textarea class="form-control" id="summernote" name="editordata">add a question</textarea></div>
        <div class="form-group"><textarea class="form-control" id="summernote" name="editordata2">add a answer</textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(15,103,122);">Submit</button></div>
    </form>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend"></div>
</div>
<div class="input-group mb-3" style="margin-left: 80px;"></div>
<div class="projects-horizontal">
    <div class="container">
        <div class="intro"></div>
    </div>
</div>

@if($question == null)
    there are no question
    @else
    <section>
    <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
            <a class="links" href="{{url('allAnswers/')}}" >

                <div class="card device-card">
                    <div class="card-device-status bg-success"></div>
                    <div class="card-body" style="margin-left: 80px;">
                        <h5 class="card-title">Quection number {!! $question->id !!}</h5>
                        <p class="card-text"> {!!$question->body!!}</p>
                        <div class="line-ellipse light"><span>{!!$question->answers!!}</span></div>
                        <p class="card-text-small">Created: {!! $question->created_at !!}<br></p>
                        <p class="card-text-small">card-catagary<br></p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="infopanel show" style="display:none">
            <div class="d-inline-block float-right mr-2 mt-1"><a class="close d-inline-block mr-2 mt-4" href="javascript:closeInfoPanel()" data-dismiss=".infopanel" aria-label="close"><span aria-hidden="true">x</span></a></div>
            <div class="clear p-2 ml-1 mb-2 bold"><span><br>Infopanel Title<br><br></span></div>
            <div class="clear p-2  "><span><br>{!!$question->question!!}<br><br></span></div>


        </div>
    </section>
</section>
@endif
@endsection
