@extends('layouts.app')

@section('content')
    @if(Auth::user())
        <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                    <div class="card device-card">
                        <div class="card-device-status bg-success"></div>
                        <div class="card-body" style="margin-left: 80px;">
                            <h5 class="card-title">All Users</h5>
                            <p>{{\App\User::all()->count()}}</p>
                        </div>
                    </div>

            </div>
        </section>
        <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <a class="links" href="javascript:openInfoPanel()">
                    <div class="card device-card">
                        <div class="card-device-status bg-success"></div>
                        <div class="card-body" style="margin-left: 80px;">
                            <h5 class="card-title">All Question</h5>
                            {{\App\Question::all()->count()}}

                        </div>
                    </div>
                </a>
            </div>
        </section>
            <section class="shadow-none row m-3" id="container" style="filter: blur(0px);">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                    <div class="card device-card">
                        <div class="card-device-status bg-success"></div>
                        <div class="card-body" style="margin-left: 80px;">
                            <h5 class="card-title">All Answers</h5>
                            <p>{{\App\Answer::all()->count()}}</p>
                        </div>
                    </div>

                </div>
            </section>
        <div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
            <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>

        </div>
    @else
        <div class="container" style="margin: 40px;margin-left: 80px;padding-top: 10px;">
            <p class="bg-light border-dark shadow-sm" style="height: 50px;width: 800px;margin-left: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias amet cum, ducimus earum fuga hic id, incidunt minus nesciunt obcaecati omnis perferendis provident quam, quia reiciendis ullam veniam!  </p>

        </div>
    @endif

@endsection
