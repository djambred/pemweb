@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.book.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.books.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="bookname">{{ trans('cruds.book.fields.bookname') }}</label>
                <input class="form-control {{ $errors->has('bookname') ? 'is-invalid' : '' }}" type="text" name="bookname" id="bookname" value="{{ old('bookname', '') }}" required>
                @if($errors->has('bookname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bookname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.bookname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.book.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection