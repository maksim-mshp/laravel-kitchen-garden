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
        <hr class="mb-5">

        <form action="/add" method="POST">
            @csrf
            <div class="mb-3">
                <label for="input-name" class="form-label">Название</label>
                <input type="text" class="form-control" id="input-name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="input-info" class="form-label">Описание</label>
                <textarea class="form-control" id="input-info" rows="5" name="info" required></textarea>
            </div>
            <div class="mb-3">
                <label for="input-img" class="form-label">Ссылка на картинку</label>
                <input type="text" class="form-control" id="input-img" name="img" required>
            </div>
            <div class="mb-3">
                <label for="input-price" class="form-label">Цена</label>
                <input type="number" class="form-control" id="input-price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

    </div>
</body>

</html>
