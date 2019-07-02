@extends('layouts.app')

@section('content')
    @if(Auth::user())
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="margin-left: 10px;">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('programing', ['python']) }}" style="background-color: #a5dde2;filter: brightness(100%);color: #575957;">&nbsp; Python &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('programing', ['c-language']) }}" style="background-color: #a5dde2;margin-left: 0px;">&nbsp;C Language</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('programing', ['html']) }}" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; WEB &nbsp;&nbsp;</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('programing', ['c#']) }}" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; &nbsp;C# &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('programing', ['java']) }}" style="background-color: #a5dde2;margin-left: 0px">&nbsp; Java &nbsp;</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="background-color: #a5dde2;margin-left: 0px;">&nbsp; Link&nbsp;</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
    <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>

</div>
        @else
        <div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
        <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>

    </div>
@endif

@endsection

