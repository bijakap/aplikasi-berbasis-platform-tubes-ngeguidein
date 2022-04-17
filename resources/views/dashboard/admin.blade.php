@extends('layouts.main')
@section('container')
    <div class="flex justify-center mx-auto">
        @if(Session::has('success'))
         <p class="text-green-300 font-semibold uppercase py-3 text-lg">{{Session::get('success')}}</p>
        @endif
    </div>
    <div class="flex justify-center mt-8 w-[80%] mx-auto">
        <div class="w-full">
            <h1 class="font-semibold text-[20px] leading-5 tracking-wide">Dashboard Admin</h1>
            <div class="flex my-5 gap-5 w-full">
                <div class="w-[350px]">
                    <ul class="" id="tab-control" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block mb-3 p-3 font-semibold border-2 text-black rounded-md w-full" id="edit-tab" type="button" role="tab" aria-controls="edit" aria-selected="false">Edit Destinasi</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block mb-3 p-3 font-semibold border-2 text-black rounded-md w-full" id="tambah-tab" type="button" role="tab" aria-controls="tambah" aria-selected="false">Tambah Destinasi</button>
                        </li>
                    </ul>
                </div>
                <div class="border-2 px-2 py-2 w-full" id="tabContent">
                    {{-- Edit Destiansi --}}
                    <div class="" id="edit" role="tabpanel" aria-labelledby="dashboard-tab-example">
                        <h1 class="font-semibold text-[20px] leading-5 tracking-wide text-center">Pilih Untuk Dapat Mengedit</h1>
                        @foreach ($destinasi as $data)
                        <a href="{{ url('admin/view/'. $data->id_destinasi) }}">
                            <div class="flex my-3 p-3 border-2 gap-4 hover:shadow-lg cursor-pointer">
                                <div class="w-[30%]">
                                    <img src="{{ $data->src }}" class="w-auto object-cover">
                                </div>
                                <div class="w-[70%]">
                                    <h1 class="font-semibold">{{ $data->nama_tempat }}</h1>
                                    <p class="text-justify text-sm text-gray-900 font-normal">{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="" id="tambah" role="tabpanel" aria-labelledby="dashboard-tab-example">
                        <h1 class="font-semibold text-[20px] leading-5 tracking-wide text-center">Tambah Destinasi</h1>
                        <form action="{{ url('admin/post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label class="uppercase text-sm font-bold">Nama Tempat</label>
                                <input name="nama_tempat" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                            </div>
                            <div>
                                <label class="uppercase text-sm font-bold">Deskripsi</label>
                                <textarea name="deskripsi" type="text" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none" rows="4"></textarea>
                            </div>
                            <div>
                                <label class="uppercase text-sm font-bold">Gambar</label>
                                <input type="file" id="image" name="image" class="p-2 my-2 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none resize-none">
                            </div>
                            <button type="submit" class="bg-gray-700 text-white rounded-lg px-2 my-2 py-[10px] font-medium uppercase">Tambah</button>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="flex">
        <div class="w-[400px]">
            <ul class="" id="tab-control" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block mb-3 p-3 font-semibold border-2 text-black rounded-md w-full" id="edit-tab" type="button" role="tab" aria-controls="edit" aria-selected="false">Profile</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block mb-3 p-3 font-semibold border-2 text-black rounded-md w-full" id="tambah-tab" type="button" role="tab" aria-controls="tambah" aria-selected="false">Dashboard</button>
                </li>
            </ul>
        </div>
        <div id="tabContent">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="edit" role="tabpanel" aria-labelledby="profile-tab-example">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tambah" role="tabpanel" aria-labelledby="dashboard-tab-example">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div> --}}
    <script>
        const tabElements = [
            {
                id: 'edit',
                triggerEl: document.querySelector('#edit-tab'),
                targetEl: document.querySelector('#edit')
            },
            {
                id: 'tambah',
                triggerEl: document.querySelector('#tambah-tab'),
                targetEl: document.querySelector('#tambah')
            },
        ];

        // options with default values
        const options = {
            defaultTabId: 'settings',
            activeClasses: 'bg-gray-700 text-white',
            inactiveClasses: 'bg-white',
            onShow: () => {
                console.log('tab is shown');
            }
        };

        const tabs = new Tabs(tabElements, options);
    </script>
@endsection