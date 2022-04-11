@section('komentar')
    <div class="h-10">
        <div class="border-b-[2px] border-gray-700 pb-2 mb-[10px]">
            <form action="" method="post" class="flex">
                <input type="text" placeholder="Komen" class="bg-gray-200 w-full p-5">
                <button type='submit' class="bg-gray-200 px-2">KIRIM</button>
            </form>
        </div>
        @for ($i = 0; $i < 2; $i++)
        <div class="flex py-[10px] border-b-[2px] border-gray-700">
            <div>
                <img src="/img/tempimage.png" class="h-[50px] w-[50px] object-cover">
            </div>
            <div>
                <p class="font-semibold">{{ "Username" . " " . "Tanggal" }}</p>
                <div>Komen</div>
            </div>
        </div>
        @endfor
    </div>
@endsection