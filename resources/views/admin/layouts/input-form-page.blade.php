<div class="form-group">
    <label for="inputName">Название страницы</label>
    <input name="title" type="text" id="inputName" class="form-control" value="{{ old('title', $page->title) }}">
</div>
<div class="form-group">
    <label for="inputDescription">Краткое описание</label>
    <textarea name="description" id="inputDescription" class="form-control" rows="4">{{ old('description', $page->description) }}</textarea>
</div>
<div class="form-group">
    <label for="inputText">Текст страницы</label>
    <textarea name="text" id="inputText" class="form-control" rows="4">{{ old('text', $page->text) }}</textarea>
</div>
<a href="{{ route('pages.create') }}" class="btn btn-secondary">Добавить страницу</a>
<input type="submit" value="Редактировать" class="btn btn-primary float-right">

