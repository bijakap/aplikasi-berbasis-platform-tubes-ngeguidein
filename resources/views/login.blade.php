@extends('layouts.notincludednav')

@section('container')
<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg drop-shadow-md">
    <section>
        <h3 class="font-bold text-2xl" style="text-align:center;font-weight:bold;font-size:30px;">Login</h3>
        {{-- <p class="text-gray-600 pt-2">Sign up to your account.</p> --}}
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="#">
            @csrf
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="Username">Username</label>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <input type="text" id="Username"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-slate-600 transition duration-500 px-3 pb-3">
            </div>
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <input type="password" id="password"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-slate-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="flex justify-end">
                <a href="#" class="text-sm text-slate-600 hover:text-slate-700 hover:underline mb-6">Forgot your
                    password?</a>
            </div>
            <button
                    class="bg-slate-600 hover:bg-slate-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                    type="submit">Log In</button>
            <span style="text-align:center; margin-top:10px;">or</span>
            <button
                    class="bg-slate-600 hover:bg-slate-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                    type="submit" style="margin-top:10px;">Daftar</button>

            <div class="flex justify-center">
                <a href="#" class="text-sm text-slate-600 hover:text-slate-700 hover:underline mb-6" style="font-weight:bold; margin-top:20px;">
                  Kembali ke home..</a>
            </div>
        </form>
    </section>
</main>
@endsection
