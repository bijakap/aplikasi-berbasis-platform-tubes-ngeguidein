<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
</head>

<body>
    <H1>ini halaman admin</H1>
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-jet-responsive-nav-link>
    </form>

</body>

</html>
