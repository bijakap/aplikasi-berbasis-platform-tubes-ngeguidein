@extends('layouts.main')
@section('container')
    <div class="flex justify-center mt-8 w-[80%] mx-auto">
        <div>
            <p class="mb-8"><a href="/admin" class="text-[20px] rounded border p-2 mb-10">Kembali</a></p>
            
            <div class="border p-3 w-full shadow-md">
                <h1 class="font-semibold text-[20px] leading-5 tracking-wide border-b pb-2">Edit - Danau Galau</h1>
                <div class="mt-4">
                    <form action="{{ url('admin/edit/'. $destinasi[0]->id_destinasi .'/update_destinasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label class="uppercase text-sm font-bold">Nama Tempat</label>
                            <input name="nama_tempat" value="{{ $destinasi[0]->nama_tempat }}" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Deskripsi</label>
                            <textarea name="deskripsi" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none" rows="4">{{ $destinasi[0]->deskripsi }}</textarea>
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Gambar</label>
                            <input type="file" id="image" name="image" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none">
                        </div>
                        <button type="submit" class="bg-gray-700 text-white rounded-lg px-2 my-2 py-[10px] self-end font-medium uppercase">Update</button>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(Session::has('success'))
                            <p>{{Session::get('success')}}</p>
                        @endif
                    </form>
                        <div class="mt-10">
                            <h1 class="font-bold text-[20px] uppercase my-2">Langkah</h1>
                            @foreach($step as $langkah)
                            <form action="{{ url('admin/edit/'. $destinasi[0]->id_destinasi .'/update_step/' . $langkah->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="flex gap-3 w-full h-full">   
                                    <div>
                                        <label class="uppercase text-sm font-bold">Nama Langkah</label>
                                        <input name="langkah" value="{{ $langkah->step_ke }}" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="uppercase text-sm font-bold">Titik X</label>
                                        <input name="titik_x" value="{{ $langkah->titik_x }}" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="uppercase text-sm font-bold">Titik Y</label>
                                        <input name="titik_y" value="{{ $langkah->titik_y }}" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="uppercase text-sm font-bold">Gambar</label>
                                        <input type="file" class="py-[5px] px-1 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    </div>
                                    <button type="submit" class="bg-gray-700 text-white rounded-lg px-2 mb-4 py-[10px] self-end font-medium uppercase">Update</button>
                                </div>
                            </form>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            @endif
                            @if(Session::has('success'))
                                <p>{{Session::get('success')}}</p>
                            @endif
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection