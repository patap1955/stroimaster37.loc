@extends('layouts.master')
@section('title', 'Контакты компании СтройМастер37')
@section('description', 'Контакты и обратная связь с компанией СтройМастер37')
@section('content')
    <main class="col-xs-12" role="main">
        <div class="row">
            <div class="col-xs-12">
                <div class="content">
                    <article class="post-2573 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div id="pl-2573" class="panel-layout">
                                <hr>
                                <h1>@yield('title')</h1>
                                <hr>
                            </div>
                            <div class="col-lg-3">
                                <p><strong>Наши телефоны</strong></p>
                                <p>+7-961-246-90-77</p>
                                <p>+7-917-659-41-21</p>
                                <p><strong>Наши Email</strong></p>
                                <p>stroimaster37ivanovo@yandex.ru</p>
                                <p><strong>Режим работы</strong></p>
                                <p>пн-сб с 9-00 до 20-00</p>
                                <p>Выезд на замеры,возможен в любое удобное для Вас время</p>
                                <p>Компания ООО "СТРОЙМАСТЕР37" зарегестрированна и работает в г. Иваново</p>
                            </div>
                            <div class="col-lg-9">
                                <div id="pl-2573" class="panel-layout">
                                    <p><strong>Контактная форма</strong></p>
                                    @include('layouts.message_success')
                                    <form class="form-horizontal" role="form" method="post" action="{{ route('feedback.store') }}">
                                        @include('layouts.message_error')
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Ваше имя</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Ваше имя" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Ваш Email адрес</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Текст сообщения</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" rows="3" name="message"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="Обратная связь" >
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection




