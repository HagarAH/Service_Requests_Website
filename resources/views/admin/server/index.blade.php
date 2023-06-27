@extends('layouts.table_pdf')

@section('title')
    Sunucu Talep
@endsection

@section('head')
    <tr>

        <th>ID</th>
        <th>Durum<i class="text-white">.............</i></th>

        <th>Isim<i class="text-white">.</i>Soyisim<i class="text-white">....................</i></th>



        <th>CPU<i class="text-white">...................</i></th>
        <th>RAM<i class="text-white">...................</i></th>
        <th>Disk<i class="text-white">..................</i></th>

        <th>İşletim<i class="text-white">.</i>Sistemi Versiyonu</th>


        <th>Geri Bildirim</th>

        <th class="text-center">Yorumlama</th>




        <th>A<i class="text-white">.</i>Kaydı<i class="text-white">..............</i></th>

        <th>Ag<i class="text-white">.</i>Turu</th>

        <th>Talep Edilme Sebebi</th>
        <th>Açiklama</th>

        <th>Genel Müdürlük</th>
        <th>Daire Başkanlığı</th>
        <th>Telefon</th>


        <th>Talep Güncelleme Tarihi</th>
        <th>Talep Oluşturma Tarihi</th>

    </tr>
@endsection


@section('body')
    @foreach($servers as $server)
        <tr>
            <td>{{ $server->id }}</td>
            <td>{{ $server->status_id }}</td>

            <td>{{ $server->profile->fname }} {{ $server->profile->lname }}</td>


            <td>{{ $server->cpu->name }}</td>
            <td>{{ $server->ram->name }}</td>
            <td>{{ $server->disk->name }}</td>

            <td>{{ $server->system->name }}</td>

            <td>{{ $server->comment }}</td>
            <td class="text-center">
                <a href="javascript:void(0);" data-id="{{ $server->id }}" data-comment="{{ $server->comment }}" data-status_id="{{ $server->status_id }}" class="edit-btn"><i class="fal fa-comment-alt fa-lg"></i></a>
            </td>

            <td>{{ $server->kayit }}</td>
            <td>{{ $server->ic_ag ? 'İç Ağ' : ($server->dis_ag ? 'Diş Ağ' : '') }}</td>


            <td>{{ $server->reason }}</td>
            <td>{{ $server->description }}</td>

            <td>{{ $server->profile->daire->name }}</td>
            <td>{{ $server->profile->daire->mudurluk->name }}</td>
            <td>{{ $server->profile->phone }}</td>


            <td>{{ ($server->updated_at) }}</td>
            <td>{{ ($server->created_at) }}</td>

        </tr>
    @endforeach
@endsection

@section('action')

    <script>
        $(document).ready(function () {
            $('.edit-btn').click(function () {
                var id = $(this).data('id');
                var comment = $(this).data('comment');
                var status_id = $(this).data('status_id');

                $.get('admin/servers/' + id + '/edit', function (data) {
                    bootbox.dialog({
                        title: 'Edit Server',
                        message:
                            '<form action="admin/servers/' + id + '" method="post">' +
                            '<input type="hidden" name="_method" value="PATCH">' +
                            '<input type="hidden" name="_token" value="{{ csrf_token() }}">' +
                            '<div class="form-group">' +
                            '<label>comment:</label>' +
                            '<input type="text" name="comment" value="' + comment + '" class="form-control">' +
                            '</div>' +
                            '<div class="form-group">' +
                            '<label>Status:</label>' +
                            '<select name="status_id" class="form-control">' +
                            '<option value="1"' + (status_id == 1 ? 'selected' : '') + '>Olusturuldu</option>' +
                            '<option value="2"' + (status_id == 2 ? 'selected' : '') + '>Incelemeye Alindi</option>' +
                            '<option value="3"' + (status_id == 3 ? 'selected' : '') + '>Cozuldu</option>' +
                            '<option value="4"' + (status_id == 4 ? 'selected' : '') + '>Reddedildi</option>' +
                            '</select>' +
                            '</div>' +
                            '</form>',
                        buttons: {
                            update: {
                                label: 'Update',
                                className: 'btn-primary',
                                callback: function () {
                                    $('form').submit();
                                }
                            }
                        }
                    });
                });
            });
        });
    </script>

@endsection
