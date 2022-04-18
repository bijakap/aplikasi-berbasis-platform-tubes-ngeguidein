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
                        @foreach ($titik as $titik)
                        {{-- {{ $titik->titik_y }} --}}
                            <div class="group absolute h-10 hidden justify-center items-center step" style="top: {{ $titik->titik_y . "px" }};right: {{ $titik->titik_x . "px" }}">
                                <img src="/img/pinpoint.png" class="cursor-pointer h-full">
                                <div class="relative z-50">
                                    <div class="w-[200px] hidden group-hover:flex justify-center rounded-lg shadow-lg absolute bg-white p-5 transform bottom-5 -translate-x-[60%]">
                                        <div class="text-center">
                                            {{-- <p>{{ $loop->index }}</p> --}}
                                            <p class="font-light pb-3 text-lg">Click To View</p>
                                            <button data-modal-toggle="{{ 'Preview'. $loop->index }}" type="submit" class="">
                                                <div>
                                                    <img src="{{ $titik->src }}"/>
                                                </div>
                                            </button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{ 'Preview'. $loop->index }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                Gambar
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ 'Preview'. $loop->index }}">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <div class="flex justify-center mx-auto">
                                                <img src="{{ $titik->src }}" class="rounded-lg w-3/4    "/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pt-10">
                        <div class="text-[25px] space-y-[24px]">
                            <h1 class="font-semibold">Informasi terkait</h1>
                            <h1 class="font-semibold">{{ $destinasi->nama_tempat }}</h1>
                            <p>{{ $destinasi->deskripsi }}</p>
                            <h1 class="font-semibold">Foto</h1>
                            <div class="flex gap-2">
                                @foreach($img as $img)
                                    <button data-modal-toggle="{{ 'img'. $loop->index }}" type="submit" class="">
                                        <div>
                                            <img src="{{ $img->src }}" class="h-[100px]">
                                        </div>
                                    </button>
                                    
                                    <div id="{{ 'img'. $loop->index }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                        Gambar
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ 'img'. $loop->index }}">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <div class="flex justify-center mx-auto">
                                                        <img src="{{ $titik->src }}" class="rounded-lg w-3/4    "/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <h1 class="font-semibold pb-4">Komentar</h1>
                        </div>
                    </div>
                    <div>
                        @include('komentar.komentar', ['komen' => $komen, 'id_destinasi' => $destinasi->id_destinasi]) 
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
    <script type="text/javascript" src="{{ url('js/destinasi.js') }}"></script>
@endsection
