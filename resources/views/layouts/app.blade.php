<!DOCTYPE html>
<html>
<head>
    <title>�������� �����</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/bootstrap-theme.min.css")}}"/>
</head>
<body>
<div class="container">
    <h1>������</h1>

    <div class="row">
        <div class="col-md-8">
            <label class="control-label" for="denomination">������������</label>
            <input class="form-control" type="text" name="title"/>
            <div class="row">
                <div class="col-md-4">
                    <input type="file" name="img"/><br>
                </div>
            </div>
            <label class="control-label" for="price">����</label>
            <input class="form-control" type="text" name="price"/>
            <label for="description" class="control-label">�������� ������</label>
            <textarea class="form-control" rows="4"></textarea>

        </div>
    </div>
    <hr>
</div>
</body>
</html>