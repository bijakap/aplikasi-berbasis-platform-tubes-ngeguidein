@extends('layouts.main')
{{-- @dd($data[0]->gambar) --}}
@section('container')
<div class="text-gray-800 antialiased">
  <main class="profile-page">
    <section class="relative block" style="height: 500px;">
      <div
        class="absolute top-0 w-full h-full bg-center bg-cover"
        style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'
      >
        <span
          id="blackOverlay"
          class="w-full h-full absolute opacity-50 bg-black"
        ></span>
      </div>
      <div
        class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    </section>
    <section class="relative py-16 bg-gray-300">
      <div class="container mx-auto px-4">
        <div
          class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
        >
          <div class="m-8">
            <button
              class="bg-pink-500 active:bg-pink-800 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
              type="button"
              style="transition: all 0.15s ease 0s;"
              onclick="window.location='profile/edit/{{ $data[0]->id }}'"
            >
            <svg width="10" height="10" fill="currentColor" class="h-4 w-4 mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
              </path>
            </svg>
              Edit
            </button>
          </div>
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div
                class="w-full lg:w-3/12 flex justify-center mx-auto"
              >
                <div class="relative">
                  <img
                    alt="..."
                    src="{{ $data[0]->gambar }}"
                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-14"
                    style="max-width: 150px;"
                  />
                </div>
              </div>
            </div>
            <div class="text-center mt-24">
              <h3
                class="text-4xl font-semibold leading-normal mb-2 text-gray-800"
              >
                {{ $data[0]->name }}
              </h3>
              <div class="mb-2 text-gray-700 mt-10">
                <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                >{{ $data[0]->job }}
              </div>
              <div class="mb-2 text-gray-700">
                <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                >{{ $data[0]->faculty }}
              </div>
            </div>
            <div class="mt-10 py-10 border-t border-gray-300 text-center">
              <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-9/12 px-4">
                  <p class="mb-4 text-lg leading-relaxed text-gray-800">
                    {{ $data[0]->bio }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<script>
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
</script>
@endsection
