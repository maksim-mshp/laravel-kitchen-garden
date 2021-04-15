<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Овощнофф</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container py-4">
        <h1>Овощнофф</h1>
        <h4 class="text-muted">Самые свежие овощи и фрукты</h4>
        <hr>
        @if ($alert)
            <div class="alert alert-success" role="alert">
                Товар успешно добавлен!
            </div>
        @endif

        <form method="POST" action="/">
            @csrf
            <div class="form-row mb-3">
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Поиск" name="text" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" placeholder="Минимальная цена" name="min">
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" placeholder="Максимальная цена" name="max">
                </div>
                <div class="col-md-1">
                    <input type="submit" value="Найти" class="btn btn-primary btn-block">
                </div>
            </div>
        </form>

        <div class="row">

            @foreach ($goods as $item)
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="{{ $item['img'] }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['info'] }}</p>
                            <a href="#" class="btn btn-success">{{ $item['price'] }} руб.</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>

</html>
