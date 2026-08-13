<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- 表示モードのちらつき防止：描画前に保存済みテーマを適用 -->
    <script>
        (function () {
            var theme = localStorage.getItem('app-theme') || 'light';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- テーマCSSは必ず最後に読み込む -->
    <link rel="stylesheet" href="{{ asset('css/theme-toggle.css') }}">
</head>
<body>
    <div class="min-h-screen app-page-bg">
        <header class="app-nav-bg">
            <nav>
                <!-- ナビゲーションバーのコンテンツ -->
            </nav>
        </header>

        <main>
            {{ $slot }} <!-- コンポーネントを使用する際に渡されたコンテンツがここに表示される -->
        </main>

        <footer>
            <!-- フッターのコンテンツ -->
        </footer>
    </div>

    <script src="{{ asset('js/theme-toggle.js') }}"></script>
</body>
</html>
