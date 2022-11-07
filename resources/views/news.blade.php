<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News API</title>
</head>
<body>
    <h1>News API</h1>
    @foreach ($articles['articles'] as $article)
        <div class="container-fluid">
                <div class="clearfix">
                    <p><b>Author:</b> {{$article['author']}}</p>

                    <p><b>Titulo</b>{{$article['title']}}</p>

                    <p><b>Descrição:</b> {{$article['description']}}</p>
                </div>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>
