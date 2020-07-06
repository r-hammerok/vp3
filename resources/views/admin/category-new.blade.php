@extends('admin.app')

@section('content')
    @include('admin.categories-header')
    <div class="content-main__container">
        <form method="POST" action="{{route('categories.update', $category->id)}}">
            @csrf
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="category_name">Название категории</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                       placeholder="Название категории" value="{{ old('category_name', $category->name) }}">
                @error('category_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_desc">Описание категории</label>
                <input type="text" class="form-control" id="category_desc" name="category_desc"
                       placeholder="Описание категории" value="{{ old('category_desc', $category->description) }}">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a type="button" href="{{route('categories.index')}}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
