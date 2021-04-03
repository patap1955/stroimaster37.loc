@extends('layouts.master')
@section('title', $service->title . ' от СтройМастер37')
@section('description', $service->description)
@section('carousel')
@section('content')
    <main role="main">
        <div class="col-xs-3 row">
            <div class="sidebar">
                @include('layouts.sidebar')
            </div>
        </div>
        <div class="col-xs-9 row">
            <div class="content">
                <article class="post-2573 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div id="pl-2573" class="panel-layout">
                            <hr>
                            <h1>@yield('title')</h1>
                            <hr>
                            {{ $service->text }}
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection



