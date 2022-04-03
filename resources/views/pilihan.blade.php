@extends('layouts.main')

@section('container')
    <div class="flex justify-center mx-auto w-[880px]">
        <div>
            <h1 class="text-[40px] font-extrabold leading-[60px] tracking-[0.15px] text-center">DAFTAR TEMPAT TEMPAT MENARIK</h1>
            <div class="grid grid-cols-2 p-8 gap-[25px]">
                @foreach($post as $post)
                <a href="/pilihan/{{ $post['id'] }}">
                    <div class="rounded-[10px] bg-white drop-shadow-md border">
                        <h1 class="text-center font-extrabold py-1">{{ $post['Nama'] }}</h1>
                        <div>
                            <img src="{{ $post['img'] }}" class="object-none h-[200px] w-full">
                        </div>
                    </div>
                </a>    
                @endforeach
            </div>
            
        </div>
    </div>
@endsection