@extends('layouts.mainafterlogin')
@section('container')

<div class="bg-white ml-20 mt-10 w-[50%]">
  <div class="">
    <h1 class="font-medium leading-tight text-4xl mt-0 mb-2 text-blue-600">Edit Profile</h1>
    <form action="{{ url('/profile/edit/'.$id.'/post' ) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <div class="shrink-0">
          <img class="object-cover w-16 h-16 rounded-full"
            src="{{ $data[0]->gambar }}" alt="profile photo" />
        </div>
        <label class="block">
          <span class="sr-only">Choose File</span>
          <input type="file" name="image"
            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
        </label>
      </div>
      @if ($errors->any())
          @foreach ($errors->all() as $error)
              <p style="color: red;">{{ $error }}</p>
          @endforeach
      @endif
      <div class="mb-3">
        <label for="username" class="form-label inline-block mb-2 text-gray-700">Username :</label>
        <input
          type="text" name="username"
          id="username"
          value="{{ $data[0]->username }}"
          class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
      </div>
      <div class="mb-3">
        <label for="password" class="form-label inline-block mb-2 text-gray-700">Password :</label>
        <input
          type="password"
          name="password"
          id="password"
          value="{{ $data[0]->password }}"
          class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label inline-block mb-2 text-gray-700">Email :</label>
        <input
          type="text"
          name="email"
          id="email"
          value="{{ $data[0]->email }}"
          class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
      </div>
      <div class="mb-3">
        <label for="job" class="form-label inline-block mb-2 text-gray-700">Pekerjaan :</label>
        <input
          type="text"
          name="job"
          id="job"
          value="{{ $data[0]->job }}"
          class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
      </div>
      <div class="mb-3">
        <label for="faculty" class="form-label inline-block mb-2 text-gray-700">Fakultas :</label>
        <input
          type="text"
          name="faculty"
          id="faculty"
          value="{{ $data[0]->faculty }}"
          class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
      </div>
      <div class="mb-3">
        <label for="bio" class="form-label inline-block mb-2 text-gray-700">Deskripsi :</label>
        <textarea
        rows="5"
        name="bio"
        id="bio"
        class=" resize-none
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >{{ $data[0]->bio }}</textarea>
      </div>

      <button
        type="submit"
        name="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
      >
        Save
      </button>
    </form>
  </div>
</div>
@endsection
