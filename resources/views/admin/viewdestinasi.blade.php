@extends('layouts.main')
@section('container')

<div class="flex justify-center mx-auto">
    <div class="flex justify-center w-full">
        <div class="mx-10 w-full">
            <div class="flex justify-between mx-auto mt-4">
                <a href="/admin" class="text-[20px] rounded border p-2">Kembali</a>
                <p class="font-semibold text-[20px]">{{ $destinasi->nama_tempat }}</p>
            </div>
            <div class="mt-4 border-2 shadow-sm">
                <div class="p-2 mt-2">
                    <p class="font-semibold uppercase text-xl text-center">Destinasi</p>
                    <div class="flex justify-center mx-auto my-4">
                        <table class="table-fixed border-2 border-collapse w-3/4">
                            <thead class="border-b">
                                <tr>
                                    <th class="font-medium text-gray-900 px-6 py-4">Nama Tempat</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Deskripsi</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Gambar</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr class="border-b">
                                    <td class="p-3 text-center whitespace-nowrap text-sm font-medium text-gray-900">{{ $destinasi->nama_tempat }}</td>
                                    <td class="p-3 text-sm text-gray-900 font-light text-justify">{{ $destinasi->deskripsi }}</td>
                                    <td class="p-3 text-sm flex justify-center"><img src="{{ $destinasi->src }}" class="w-[200px] rounded-lg" alt="clue-pinpoint"></td>
                                    <td class="px-3 text-sm text-gray-900 font-light whitespace-nowrap">
                                        <div class="flex flex-col justify-between gap-3 pb-6">
                                            <button class="text-center px-3 py-2 border-2 bg-gray-700 text-white w-full" type="button" data-modal-toggle="EditDestinasi">Edit</button>
                                            <a href="{{ $destinasi->id_destinasi . '/hapus' }}" class="text-center px-3 py-2 border-2 bg-red-500 text-white w-full">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-4 border-2 shadow-sm">
                <div class="p-2 mt-2">
                    <p class="font-semibold uppercase text-xl text-center">Langkah Pada Destinasi</p>
                    <div class="flex justify-center mx-auto my-4">
                        <table class="table-auto border-2 border-collapse w-3/4">
                            <thead class="border-b">
                                <tr>
                                    <th class="font-medium text-gray-900 px-6 py-4">No</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Langkah</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Titik X</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Titik Y</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Gambar</th>
                                    <th class="font-medium text-gray-900 px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($step as $langkah)
                                <tr class="border-b">
                                    <td class="p-3 text-center whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->index+1 }}</td>
                                    <td class="p-3 text-sm text-gray-900 font-light text-center whitespace-nowrap">{{ $langkah->step_ke }}</td>
                                    <td class="p-3 text-sm text-gray-900 font-light text-center whitespace-nowrap">{{ $langkah->titik_x }}</td>
                                    <td class="p-3 text-sm text-gray-900 font-light text-center whitespace-nowrap">{{ $langkah->titik_y }}</td>
                                    <td class="p-3 text-sm flex justify-center"><img src="{{ $langkah->src }}" class="w-[200px] rounded-lg" alt="clue-pinpoint"></td>
                                    <td class="p-3 text-sm text-gray-900 font-light text-center whitespace-nowrap">
                                        <div class="flex flex-col gap-1">
                                            <button class="text-center px-3 py-2 border-2 bg-gray-700 text-white w-full" type="button" data-modal-toggle="{{ 'EditDestinasi'. $langkah->id }}">Edit</button>
                                            <a href="{{ $destinasi->id_destinasi . '/hapus/' . $langkah->id }}" class="text-center px-3 py-2 border-2 bg-red-500 text-white w-full">Hapus</a>
                                            <button class="text-center px-3 py-2 border-2 bg-green-500 text-white w-full" type="button" data-modal-toggle="{{ 'Preview'. $langkah->id }}">Preview</button>
                                        </div>
                                    </td>
                                </tr>

                                {{-- modal edit buat titik --}}
                                <div id="{{ 'EditDestinasi'. $langkah->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-[70%] h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                                                    Edit Data Destinasi
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ 'EditDestinasi'. $langkah->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                            </div>
                                            <form action="{{ url('admin/edit/'. $destinasi->id_destinasi .'/update_step/' . $langkah->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
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
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                <button data-modal-toggle="{{ 'EditDestinasi'. $langkah->id }}" type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="{{ 'Preview'. $langkah->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-[70%] h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                                                    Edit Data Destinasi
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ 'Preview'. $langkah->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6 flex justify-center mx-auto">
                                               <div class="relative w-[700px]">
                                                    <img src="/img/map.png" class="w-[700px] h-full rounded-lg">
                                                    <div class="absolute h-8 flex justify-center items-center" style="top: {{ $langkah->titik_y-($langkah->titik_y*30/100) ."px" }};right: {{ $langkah->titik_x-($langkah->titik_x*30/100) . "px" }}">
                                                        <img src="/img/pinpoint.png" class="cursor-pointer h-full">
                                                    </div>
                                               </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <button class="text-center px-3 py-2 border-2 bg-gray-700 text-white flex justify-center mx-auto w-[250px]" type="button" data-modal-toggle="tambah_langkah">Tambah</button>
                </div>
            </div>
        </div>
    </div>


    {{-- modal edit destinasi --}}
    <div id="EditDestinasi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-[70%] h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        Edit Data Destinasi
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="EditDestinasi">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form action="{{ url('admin/edit/'. $destinasi->id_destinasi .'/update_destinasi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                        <div class="">
                            <label class="uppercase text-sm font-bold">Nama Tempat</label>
                            <input name="nama_tempat" value="{{ $destinasi->nama_tempat }}" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Deskripsi</label>
                            <textarea name="deskripsi" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none" rows="4">{{ $destinasi->deskripsi }}</textarea>
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Gambar</label>
                            <input type="file" id="image" name="image" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none">
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="EditDestinasi" type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    {{-- modal Tambah Langkah --}}
    <div id="tambah_langkah" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-[70%] h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        Edit Data Destinasi
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambah_langkah">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form action="{{ url('admin/view/'. $destinasi->id_destinasi .'/post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="flex gap-3 w-full h-full">   
                        <div>
                            <label class="uppercase text-sm font-bold">Nama Langkah</label>
                            <input name="langkah" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Titik X</label>
                            <input name="titik_x" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Titik Y</label>
                            <input name="titik_y" type="text" class="p-2 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                        <div>
                            <label class="uppercase text-sm font-bold">Gambar</label>
                            <input type="file" id="image" name="image" class="py-[5px] px-1 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="tambah_langkah" type="submit" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection