<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <header style="background-color: #66cdaa;">
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
</body>
</html>

