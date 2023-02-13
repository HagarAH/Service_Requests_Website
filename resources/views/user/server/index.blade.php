@extends('layouts.table_pdf')

@section('title')
    Sunucu Talep
@endsection


@section('head')
    <tr>
        <th>ID</th>
        <th>Durum<i class="text-white">.............</i></th>

        <th>CPU</th>
        <th>RAM</th>
        <th>Disk</th>



        <th>A<i class="text-white">.</i>Kaydi<i class="text-white">..................</i></th>
        <th>Ağ<i class="text-white">.</i>Türü</th>

        <th>Talep Edilme Sebebi<i class="text-white">..................</i></th>

        <th>Geri<i class="text-white">.</i>Bildirim<i class="text-white">..................</i></th>


        <th><div class="d-flex align-items-center justify-content-center">Güncelleme<i class="text-white">...........</i></div></th>

        <th>Işletim Sistemi Versiyonu</th>
        <th>Açiklama<i class="text-white">..............</i></th>

        <th>Talep Güncelleme Tarihi</th>

        <th>Talep Oluşturma Tarihi</th>

    </tr>
@endsection



@section('body')
    @foreach($servers as $server)
        <tr>
            <td>{{ $server->id }}</td>
            <td>{{ $server->status_id }}</td>

            <td>{{ $server->cpu->name }}</td>
            <td>{{ $server->ram->name }}</td>
            <td>{{ $server->disk->name }}</td>


            <td>{{ $server->kayit}}</td>
            <td>{{ $server->ic_ag ? 'Iç Ağ' : ($server->dis_ag ? 'Diş Ağ' : '') }}</td>
            <td>{{ $server->reason}}</td>



            <td>{{ $server->comment }}</td>

            <td class="d-flex align-items-center justify-content-center">
                @if($server->status_id == 1)
                    <a href="{{ route('user.server.edit', $server->id) }}" class="mr-1">
                        <i class="fal fa-edit fa-lg"></i>
                    </a>
                    <form action="{{ route('user.server.delete', $server->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-white p-0">
                            <i class="text-primary fal fa-trash-alt fa-lg"></i>
                        </button>
                    </form>


                @else
                    <a href="javascript:void(0);" class="disabled mr-1">
                        <i class="fal fa-edit fa-lg"></i>
                    </a>
                    <a href="javascript:void(0);" class="disabled">
                        <i class="fal fa-trash-alt fa-lg"></i>
                    </a>
                @endif

            </td>
            <td>{{ $server->system->name }}</td>
            <td>{{ $server->description}}</td>


            <td>{{ \Carbon\Carbon::parse($server->updated_at)->format('Y-m-d') }}</td>
            <td>{{ \Carbon\Carbon::parse($server->created_at)->format('Y-m-d') }}</td>

        </tr>
    @endforeach
@endsection

