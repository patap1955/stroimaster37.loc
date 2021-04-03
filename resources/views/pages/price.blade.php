@extends('layouts.master')
@section('title', 'Прайс-лис компании СтройМастер37')
@section('description', ' Стоимость работ компании СтройМастер37.Полный прайс-лист на все работы по отделке и ремонты помещений.')
@section('content')
    <main class="col-xs-12" role="main">
        <div class="row">
            <div class="col-xs-12">
                <div class="content">
                    <article class="post-2573 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div id="pl-2573" class="panel-layout">
                                <hr>
                                <h1>@yield('title')</small></h1>
                                <hr>
                            </div>

                            <div class="bs-example">
                                @foreach($services as $service)
                                    <h3>{{ $service->title }}</h3>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th style="width: 60%">Наименование</th>
                                                <th style="width: 15%">Ед.Измерения</th>
                                                <th style="width: 15%">Цена за ед.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($service->prices as $price)
                                                <tr>
                                                    <td>{{ $price->id }}</td>
                                                    <td>{{ $price->name }}</td>
                                                    <td>{{ $price->unit }}</td>
                                                    <td>{{ $price->price }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                @endforeach

                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection


