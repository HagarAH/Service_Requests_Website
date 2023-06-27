@extends('layouts.main')
<link rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
<link rel="stylesheet" media="screen, print" href="css/app.bundle.css">
@section('content')

    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="col-xl-8">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <a href="@if(auth()->user()->role=='admin')
                {{route('profileA.show',[auth()->user()->id])}}
                @else
                 {{route('profile.show',[auth()->user()->id])}}
@endif
                ">
                            <i class="fal fa-arrow-left"></i>
                        </a>

                        <h2 class="pl-2">
                          Profil <span class="fw-300"><i>Düzenleme</i></span>
                        </h2>
                    </div>
                    @yield('proocontent')
                </div>
            </div>

        </div>
    </div>



@endsection
