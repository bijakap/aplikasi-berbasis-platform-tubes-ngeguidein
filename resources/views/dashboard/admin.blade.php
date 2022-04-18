@extends('layouts.main')
@section('container')
    <div class="flex justify-center mt-8 w-[80%] mx-auto">
        <div>
            <h1 class="font-semibold text-[20px] leading-5 tracking-wide">Dashboard Admin</h1>
            <div class="flex my-5 gap-5">
                <div class="w-[400px]">
                    <button class="block mb-3 p-3 font-semibold border-2 border-gray-700 bg-gray-700 text-white rounded-md w-full inputan active">Edit Destinasi</button>
                    <button class="block mb-3 p-3 font-semibold border-2 text-black rounded-md w-full">Tambah Destinasi</button>
                </div>
                <div class="border-2 px-2 py-2">
                    {{-- Edit Destiansi --}}
                    <div>
                        <h1 class="font-semibold text-[20px] leading-5 tracking-wide">Edit Destinasi</h1>
                        @foreach ($destinasi as $data)
                            <div class="flex my-3 p-3 border-2 gap-4">
                                <div class="w-[30%]">
                                    <img src="{{ $data->src }}" class="h-[100px] w-full object-fill">
                                </div>
                                <div class="">
                                    <h1 class="font-semibold">{{ $data->nama_tempat }}</h1>
                                    <p class="text-justify">{{ $data->deskripsi }}</p>
                                </div>
                                <div class="flex flex-col justify-between py-1">
                                    <a href="{{ url('admin/edit/'. $data->id_destinasi) }}" class="text-center px-3 py-2 border-2 bg-gray-700 text-white w-full">Edit</a>
                                    <a class="text-center px-3 py-2 border-2 bg-red-500 text-white w-full">Hapus</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection