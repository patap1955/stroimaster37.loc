@extends('adminlte::page')

@section('title', 'Редактирование страницы ' . 'Добавление страницы')

@section('content_header')
    <h1>Добавление страницы </h1>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Форма добавления</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                @include('layouts.message_error')
                <form method="post" action="{{ route('pages.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('admin.layouts.input-form-page')
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl : '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '{{ route('filemanager.upload', ['_token' => csrf_token()]) }}',
        };
        CKEDITOR.replace('ckeditor', options);
    </script>
@stop




