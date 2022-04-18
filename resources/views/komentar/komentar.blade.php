<div class="h-10">
    @if(Auth::check())
        <div class="border-b-[2px] border-gray-700 pb-2 mb-[10px]">
            <form action="{{ url('pilihan/'. $id_destinasi .'/post_komen/'. Auth::user()->id) }}" method="post" class="flex shadow-sm">
                @csrf
                <input type="text" placeholder="Comment..." class="bg-gray-200 w-full p-5" name="komen">
                <button type='submit' class="bg-gray-200 px-2 font-medium">KIRIM</button>
            </form>
        </div>
    @endif
    @foreach ($komen as $komen)
        <div class="flex py-[10px] border-b-[2px] border-gray-700">
            <div>
                <img src="{{ $komen->gambar }}" class="h-[50px] w-[50px] object-cover">
            </div>
            <div class="ml-3">
                <p class="font-semibold">{{ $komen->name . " " . $komen->created_at }}</p>
                <div>{{$komen->komen}}</div>
            </div>
        </div>
    @endforeach
</div>
