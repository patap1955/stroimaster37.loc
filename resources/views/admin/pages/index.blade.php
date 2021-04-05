@extends('adminlte::page')

@section('title', 'Статичные страницы')

@section('content_header')
    <h1>Все страницы</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">
        <i class="fas fa-folder">
        </i>
        Добавить страницу
    </a>
@stop

@section('content')
    <section class="content">
    @include('layouts.message_success')
    <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 15%">
                            title страницы
                        </th>
                        <th style="width: 50%">
                            Краткое описание
                        </th>
                        <th style="width: 10%">
                            Дата
                        </th>
                        <th style="width: 24%">
                            Действие
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>
                                {{ $page->id }}
                            </td>
                            <td>
                                <a>
                                    {{ $page->title }}
                                </a>
                                <br>
                                <small>
                                    {{ $page->updated_at }}
                                </small>
                            </td>
                            <td>
                                {{ $page->description }}
                            </td>
                            <td class="project_progress">
                                Created 01.01.2019
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('pages.show', ['page' => $page->id]) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Посмотреть
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('pages.edit',  ['page' => $page->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <!--<a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>-->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <h1>Все страницы</h1>
        <a href="{{ route('pages.create') }}" class="btn btn-primary">
            <i class="fas fa-folder">
            </i>
            Добавить страницу
        </a>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


