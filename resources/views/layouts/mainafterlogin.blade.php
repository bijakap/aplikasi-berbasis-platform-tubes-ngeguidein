<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Test ABP</title>
</head>
<body>
    <nav class="px-[50px] py-[20px] border-b-2 border-black font-semibold">
      <div class="flex justify-between">
        <a href="/"><h1>Di-Guide-In</h1></a>
        <div class="flex justify-between gap-4">
          <a href="#">How To Use</a>
          <a href="/profile">Akun</a>
        </div>
      </div>
    </nav>
    @yield('container')
</body>
</html>
