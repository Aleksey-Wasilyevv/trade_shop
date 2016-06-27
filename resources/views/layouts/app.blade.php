<!DOCTYPE html>
<html>
<head>
    <title>Добавить товар</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/bootstrap-theme.min.css")}}"/>
</head>
<body>
<div class="container">
    <h1>Товары</h1>

    <div class="row">
        <div class="col-md-8">
            <label class="control-label" for="denomination">Наименование</label>
            <input class="form-control" type="text" name="title"/>
            <div class="row">
                <div class="col-md-4">
                    <input type="file" name="img"/><br>
                </div>
            </div>
            <label class="control-label" for="price">Цена</label>
            <input class="form-control" type="text" name="price"/>
            <label for="description" class="control-label">Описание товара</label>
            <textarea class="form-control" rows="4"></textarea>
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Добавить
                </button>
            </div>
        </div>
    </div>
    <h2>Параметры товара</h2>
    <hr>
</div>
</body>
</html>