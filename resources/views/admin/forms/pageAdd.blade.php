@extends('admin.main')
@section('admin_content')
    @include('admin.page_context_nav')
    <div class="form_admin_wrap">
        <form class="form-horizontal" novalidate autocomplete="off" method="post" name="add_page" id="add_page">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="name_field">Название</label>
                <div class="col-sm-9">
                    <input name="name" class="form-control" id="name_field" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="code_field">Код</label>
                <div class="col-sm-9">
                    <input name="code" class="form-control" id="code_field" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="sort_field">Сортировка</label>
                <div class="col-sm-9">
                    <input name="sort" class="form-control" id="sort_field" value="500" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">
                        <label><input type="checkbox" name="active" value="1" checked /> Активность</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="text_field">Текст</label>
                <div class="col-sm-9">
                    <textarea name="text" class="form-control visual_editor" rows="10" id="text_field"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                    <a href="/admin/page" class="btn btn-danger">Отмена</a>
                </div>
            </div>
        </form>
    </div>
@endsection