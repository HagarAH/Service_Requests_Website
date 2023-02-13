@extends('layouts.main')

@section('content')

    <main id="js-page-content" role="main" class="page-content">
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-bell'></i> Duyurular
            </h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-g border shadow-0">
                    <div class="card-header bg-white">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <span class="h6 font-weight-bold text-uppercase">Sunucu Duyurusu</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-white p-0">
                        <div class="row no-gutters row-grid align-items-stretch">
                            <div class="col-12 col-md">
                                <div class="text-uppercase text-muted py-2 px-3">Talepler</div>
                            </div>
                            <div class="col-sm-6 col-md-2 col-xl-4 hidden-md-down">
                                <div class="text-uppercase text-muted py-2 px-3">Tarih</div>
                            </div>
                        </div>
                    </div>

                    @foreach($servers as $server)
                        <div class="card-body p-0">
                            <div class="row no-gutters row-grid">
                                <div class="col-12">
                                    <div class="row no-gutters row-grid align-items-stretch">
                                        <div class="col-md">
                                            <div class="p-3">
                                                <div class="d-flex">
                                                    <div class="d-inline-flex flex-column">
                                                        <a
                                                            href="@if(auth()->user()->role == 'admin')
                                                                {{route('admin.server.index')}}
                                                            @else
                                                            {{route('user.server.index')}}
                                                            @endif"

                                                            class="fs-lg fw-500 d-block">
                                                            {{$server->profile->fname}} {{$server->profile->lname}} | {{ $server->id }}

                                                            <span class="
                                                            @if($server->notification_id == 1)
                                                                badge badge-info ml-1

                                                            @elseif($server->notification_id == 2)
                                                            badge badge-warning text-white ml-1

                                                            @elseif($server->notification_id == 3)
                                                                badge badge-primary ml-1

                                                            @elseif($server->notification_id == 4)
                                                               badge badge-success ml-1

                                                            @endif">
                                                                {{$server->notification->name}}
                                                        </span>
                                                        </a>
                                                        <div class="d-block text-muted fs-sm">
                                                            @if($server->notification_id == 1)
                                                                <span>Kullanıcı yeni bir sunucu talebini oluşturuldu</span>

                                                            @elseif($server->notification_id == 2)
                                                                <span>Admin sunucu talebinize geri bildirimde bulundu</span>

                                                            @elseif($server->notification_id == 3)
                                                                <span>Kullanıcı sunucu talebini güncelledi</span>

                                                            @elseif($server->notification_id == 4)
                                                                <span>Admin sunucu talebiniz üzerinde çalışıyor</span>

                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-xl-4 hidden-md-down">
                                            <div class="p-3 p-md-3">
                                                <span class="d-block text-muted">{{$server->updated_at}}</i></span>
                                                <span class="d-block text-muted">Sunucu Talep</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
            <div class="col-md-6">
                <div class="card mb-g border shadow-0">
                    <div class="card-header bg-white">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <span class="h6 font-weight-bold text-uppercase">Hizmet Duyurusu</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-white p-0">
                        <div class="row no-gutters row-grid align-items-stretch">
                            <div class="col-12 col-md">
                                <div class="text-uppercase text-muted py-2 px-3">Talepler</div>
                            </div>
                            <div class="col-sm-6 col-md-2 col-xl-4 hidden-md-down">
                                <div class="text-uppercase text-muted py-2 px-3">Tarih</div>
                            </div>
                        </div>
                    </div>


                    @foreach($posts as $post)
                        <div class="card-body p-0">
                            <div class="row no-gutters row-grid">
                                <div class="col-12">
                                    <div class="row no-gutters row-grid align-items-stretch">
                                        <div class="col-md">
                                            <div class="p-3">
                                                <div class="d-flex">
                                                    <div class="d-inline-flex flex-column">
                                                        <a
                                                            href="
                                                        @if(auth()->user()->role == 'admin')
                                                            {{route('admin.post.index')}}
                                                        @else
                                                            {{route('Post.index')}}
                                                        @endif"

                                                            class="fs-lg fw-500 d-block">
                                                            {{$post->profile->fname}} {{$post->profile->lname}}  | {{ $post->id }}
                                                            <span class="
                                                            @if($post->notification_id == 1)
                                                                badge badge-info ml-1

                                                            @elseif($post->notification_id == 2)
                                                                badge badge-warning text-white ml-1

                                                            @elseif($post->notification_id == 3)
                                                                badge badge-primary ml-1

                                                            @elseif($post->notification_id == 4)
                                                               badge badge-success ml-1

                                                            @endif">
                                                                {{$post->notification->name}}
                                                            </span>
                                                        </a>
                                                        <div class="d-block text-muted fs-sm">
                                                            @if($post->notification_id == 1)
                                                                <span>Kullanıcı yeni bir talep oluşturdu</span>

                                                            @elseif($post->notification_id == 2)
                                                                <span>Admin talebinize geri bildirimde bulundu</span>

                                                            @elseif($post->notification_id == 3)
                                                                <span>Kullanıcı talebini güncelledi</span>

                                                            @elseif($post->notification_id == 4)
                                                                <span>Admin talebiniz üzerinde çalışıyor</span>}

                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-xl-4 hidden-md-down">
                                            <div class="p-3 p-md-3">
                                                <span class="d-block text-muted">{{$post->updated_at}}</i></span>
                                                <span class="d-block text-muted">Kullanici Talep</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </main>

@endsection




