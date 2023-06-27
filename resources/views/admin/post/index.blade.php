@extends('layouts.table_pdf')

@section('title')
    Kullanıcı Talep
@endsection


@section('head')
    <tr>
        <th>ID</th>
        <th>Durum<i class="text-white">.............</i></th>

        <th>Isim<i class="text-white">.</i>Soyisim<i class="text-white">...........</i></th>


        <th>Talep<i class="text-white">.</i>Edilme<i class="text-white">.</i>Sebebi</th>

        <th>Genel<i class="text-white">.</i>Müdürluk<i class="text-white">.........</i></th>
        <th>Daire<i class="text-white">.</i>Başkanligi<i class="text-white">.........</i></th>


        <th>Geri<i class="text-white">.</i>Bildirim<i class="text-white">...........</i></th>
        <th>Guncelleme</th>

        <th>Açiklama</th>
        <th>Telefon</th>
        <th>Talep güncelleme tarihi</th>
        <th>Talep oluşturma tarihi</th>
    </tr>
@endsection



@section('body')
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->status_id }}</td>

            <td>{{ $post->profile->fname }} {{ $post->profile->lname }}</td>


            <td>{{ $post->category->name }}</td>

            <td>{{ $post->profile->daire->name }}</td>

            <td>{{ $post->profile->daire->mudurluk->name }}</td>
            <td>{{ $post->comment }}</td>
            <td class="text-center">
            <a href="javascript:void(0);" data-id="{{ $post->id }}" data-comment="{{ $post->comment }}" data-status_id="{{ $post->status_id }}" class="edit-btn"><i class="fal fa-comment-alt fa-lg"></i></a>
            </td>


            <td>{{ $post->description }}</td>
            <td>{{ $post->profile->phone }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>{{ $post->created_at }}</td>
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

                $.get('admin/posts/' + id + '/edit', function (data) {
                    bootbox.dialog({
                        title: 'Edit Post',
                        message:
                            '<form action="admin/posts/' + id + '" method="post">' +
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



