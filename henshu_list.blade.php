<html xml:lang="ja" lang="ja" dir="ltr">

<!-- head -->

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="csrf-token" content="041Bm5dBIao198wCRuHktlfXyaGojPBHB3ThGiaB">

        <title>本編集</title>

        <!-- js -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- css -->

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZa8N9jp" crossorigin="anonymous">

    </head>

<!--body -->

<body>

<style>



</style>

<!-- header -->

    <div class="container">

        <header class="blog-header py-3">

            <div class="row flex-nowrap justify-content-between align-items-center">

                <div class="col-4 pt-1">

                    <a class="navbar-brand">本編集</a>

                </div>

                <div class="col-6 d-flex justify-content-end align-items-center">

                    <a class="text-success"></a>

                    <button class="btn btn-sm btn-outline-primary" onClick="location.href='/laravel/public/top'">トップに戻る</button>

                    <div class="ml-1">

                        <button class="btn btn-sm btn-outline-secondary" onClick="location.href='https://kowakowa.mixh.jp/laravel/public/logout'" value="Jump">ログアウト</button>

                    </div>

                </div>

            </div>

        </header>

    </div>

    <hr>

</div>



        <div class="card ml-auto mr-auto mt-5" style="width:800px">
            <div class="card-header">

                本編集
            </div>

@foreach($lists as $list)
            <div class="card-body">
                <div class="container">
                    <form method="POST" action="/laravel/public/book/henshu">
                    {{ csrf_field() }}

                    <div class="form-row mt-4" style="200px">
                            <label>ID：</label>
                            <input class="form-control col-sm" type="text" name="id" value="{{$list->id}}">
                        </div>
                    <div class="form-row mt-4" style="200px">
                            <label>タイトル：</label>
                            <input class="form-control col-sm" type="text" name="title" value="{{$list->title}}">
                        </div>
                    <div class="form-row mt-4" style="200px">
                            <label>価格　　：</label>
                            <input class="form-control col-sm" type="text" name="price" value="{{$list->price}}">
                    </div>
                    <div class="form-row mt-4" style="200px">
                            <label>出版社　：</label>
                            <input class="form-control col-sm" type="text" name="publisher" value="{{$list->pubisher}}">
                    </div>
                    <div class="form-row mt-4" style="200px">
                            <label>著者名　：</label>
                            <input class="form-control col-sm" type="text" name="author" value="{{$list->author}}">
                    </div>
                    <div class="form-row mt-4" style="200px">
                            <label>出版日　：</label>
                            <input class="form-control col-sm" type="text" name="pub_date" value="{{$list->pub_date}}">
                    </div>
                    <div class="form-row mt-4" style="200px">
                            <label>冊数　　：</label>
                            <input class="form-control col-sm" type="text" name="number" value="{{$list->number}}">
                    </div>

                        <div class="d-flex justify-content-center mt-4">

                        <input type="submit" class="btn btn-primary" value="編集">       

                        </div>

@endforeach
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

   





<!-- footer -->

        <footer class="fixed-bottom">

            <div class="text-center">興和化成　株式会社</div>

        </footer>

</div>

    </body>

</html>

