<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザーメニュー</title>
    <!-- CSS や JavaScript のリンクなど -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('user.menu') }}">ユーザーメニュー</a></li>
                <!-- ログアウトやその他のリンクを追加 -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- フッターの内容 -->
    </footer>
</body>
</html>


