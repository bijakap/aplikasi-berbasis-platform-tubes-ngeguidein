@extends('layouts.main')
@section('container')
    <div class="flex justify-center">
        <div>
            <div class="flex justify-between mx-auto mt-10">
                <a href="/pilihan" class="text-[20px] rounded border p-2">Kembali</a>
        
                <p class="font-semibold text-[20px]">{{ $destinasi->nama_tempat }}</p>
            </div>
            <div class="flex justify-center mt-5 mx-auto gap-5">
                <div class="w-auto">
                    @foreach ($step as $step)
                        @if ($loop->index == 0)
                        <div class="py-4 px-10 border rounded mb-2 text-center bg-gray-700  text-white inputan active ">
                            <p class="font-semibold text-[20px] leading-[30px]">{{ $step->step_ke }}</p>
                        </div>
                        @else
                        <div class="py-4 px-10 border-2 rounded mb-2 text-center inputan">
                            <p class="font-semibold text-[20px] leading-[30px]">{{ $step->step_ke }}</p>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="w-[1000px]">
                    {{-- custom map --}}
                    <div class="relative">
                        <img src="/img/map.png" class="w-[1000px] rounded-lg">
                         {{-- titip map --}}
                        {{-- @foreach ($step as $step)
                            <div class="group absolute h-10 flex justify-center items-center first-step" style="top: {{ $titik[0] . "px" }};right: {{ $titik[1] . "px" }}">
                                <img src="/img/pinpoint.png" class="cursor-pointer h-full">
                                <div class="relative z-50">
                                    <div class="w-[200px] hidden group-hover:flex justify-center rounded-lg shadow-lg absolute bg-white p-5 transform bottom-5 -translate-x-[60%]">
                                        <div class="text-center">
                                            <p>{{ $halaman["langkah"][0]['nama'] }}</p>
                                            <button class="rounded border bg-gray-800 text-white px-3 py-1" onclick="PencetPilih({{ $loop->index }}, {{ count($halaman['langkah']) }})">test</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                        {{-- @foreach ($halaman['langkah'][1]['titik'] as $titik)
                            <div class="hidden justify-center items-center group absolute h-10  {{ $halaman["langkah"][1]['nama'] }}" style="top: {{ $titik[0] . "px" }};right: {{ $titik[1] . "px" }}">
                                <img src="/img/pinpoint.png" class="cursor-pointer h-full">
                                <div class="relative z-50">
                                    <div class="w-[200px] hidden group-hover:flex justify-center rounded-lg shadow-lg absolute bg-white p-5 transform bottom-5 -translate-x-[60%]">
                                        <div class="text-center">
                                        <p>{{ $halaman["langkah"][1]['nama'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                        {{-- @foreach ($halaman['langkah'][2]['titik'] as $titik)
                        <div class="hidden justify-center items-center group absolute h-10 {{ $halaman["langkah"][2]['nama'] }}" style="top: {{ $titik[0] . "px" }};right: {{ $titik[1] . "px" }}">
                            <img src="/img/pinpoint.png" class="cursor-pointer h-full">
                            <div class="relative z-50">
                                <div class="relative">
                                    <div class="w-[200px] hidden group-hover:flex justify-center rounded-lg shadow-lg absolute bg-white p-5 transform bottom-5 -translate-x-[60%]">
                                        <div class="text-center">
                                        <p>{{ $halaman["langkah"][2]['nama'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                        
                    </div>
                    <div class="pt-10">
                        <div class="text-[25px] space-y-[24px]">
                            <h1 class="font-semibold">Informasi terkait</h1>
                            <h1 class="font-semibold">{{ $destinasi->nama_tempat }}</h1>
                            <p>{{ $destinasi->deskripsi }}</p>
                            <h1 class="font-semibold">Foto</h1>
                            <div class="flex gap-2">
                                @foreach($img as $img)
                                    <img src="{{ $img->src }}" class="h-[100px]">
                                @endforeach
                            </div>
                            <h1 class="font-semibold">Komentar Coming Soon</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ url('js/destinasi.js') }}"></script>
@endsection