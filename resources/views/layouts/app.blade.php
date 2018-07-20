<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <a class="navbar-brand" href="{{ url('/tasks') }}">
          タスク一覧
        </a>
        <a class="navbar-brand" href="{{ url('/tasks/create') }}">
          新規作成
        </a>
      </nav>
    </div>
    
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
