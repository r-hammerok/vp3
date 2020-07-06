@extends('admin.app')

@section('content')
    @include('admin.categories-header')
    <div class="content-main__container">
        <div class="row">
            <button type="button" class="btn btn-primary btn-lg ml-auto"
                    data-toggle="modal" data-target="#addCategory">Добавить категорию
            </button>
        </div>
        <br/>
        <div class="row @if(count($categories) != 0){{'d-block'}}@else{{'d-none'}}@endif" id="category-wrap">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{route('categories.edit', $item->id)}}">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete" data-href="{{route('categories.destroy', $item->id)}}">
                                delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="alert alert-warning @if(count($categories) != 0){{'d-none'}}@else{{'d-block'}}@endif"
                 role="alert">
                Записей нет
            </div>
        </div>
    </div>

    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addArticleLabel">Добавление категории</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <input type="text" class="form-control" id="description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" id="save">Сохранить</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('#save').on('click', function(){
                let name = $('#name').val();
                let description = $('#description').val();
                $.ajax({
                    url: '{{ route('categories.store') }}',
                    type: "POST",
                    data: {name:name, description:description},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        $('#addCategory').modal('hide');
                        $('#category-wrap').removeClass('d-none').addClass('d-block');
                        $('.alert').removeClass('d-block').addClass('d-none');

                            let str = '<tr>' +
                                '<th scope="row">' + data['id'] + '</th>' +
                                '<td>' + data['name'] + '</td>' +
                                '<td>' + data['description'] + '</td>' +
                                '<td><a href="/admin/categories/' + data['id']+ '/edit"' + '>edit</a></td>' +
                                '<td><a href="" class="delete" data-href="' +
                                '/admin/categories/' + data['id'] +'">delete</a></td>' +
                            '</tr>';
                        $('.table > tbody:last').append(str);
                    },
                    error: function (msg) {
                        alert('Ошибка');
                    }
                });
            });
        });

        $(function() {
            $('body').on('click','.delete', function(e){
                e.preventDefault();
                let url = $(this).data('href');
                let el = $(this).parents('tr');
                alert(url);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {_method:'DELETE'},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        el.detach();
                    },
                    error: function (msg) {
                        alert('Ошибка');
                    }
                });
            });
        });

    </script>
@endsection
