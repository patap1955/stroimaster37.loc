<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Форма заказа</h4>
            </div>
            @include('layouts.message_error')
            <div class="modal-body">
                <form role="form" method="post" action="{{ route('feedback.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваше имя *</label>
                        <input type="text" class="form-control" placeholder="Ваше имя" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ваш Email *</label>
                        <input type="email" class="form-control" placeholder="Ваш Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ваш телефон *</label>
                        <input type="tel" class="form-control" placeholder="+7-961-246-90-77" name="phone">
                    </div>
                    <input id="type" type="hidden" value="Заказ на ремонт" name="type">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Дополнительные пожелания</label>
                        <textarea class="form-control" rows="3" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть окно</button>
            </div>
        </div>
    </div>
</div>


