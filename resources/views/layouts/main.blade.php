<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
  <title>Test ABP</title>
</head>

<body>
    <nav class="px-[50px] py-[20px] border-b-2 border-black font-semibold">
        <div class="flex justify-between">
            <a href="/">
                <h1>Di-Guide-In</h1>
            </a>
            <div class="flex justify-between gap-4">
                @if(Auth::check())
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        @if (Auth::user()->level === 'admin')
                            <a href="/admin" class="uppercase">{{ Auth::user()->level }} |</a>
                        @else
                            <a href="/profile" class="uppercase">{{ Auth::user()->level }} |</a>
                        @endif
                        <button class="font-semibold uppercase" type="submit">Logout</button>
                    </form>
                @else
                    <a href="/login" class="uppercase">Login</a>
                @endif
                  
            </div>
        </div>
    </nav>
    @yield('container')
</body>
</html>
