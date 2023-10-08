@extends('layouts.layout')

@section('content')

<div class="isolate bg-white px-6 py-2 sm:py-5 lg:px-8 mt-24 justify-center">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Creator's Lounge</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Changes you make here will affect <a href="/platform" class="text-blue-600 font-semibold text-md">openvrs.co </a>, Please be careful</p>
    </div>

    <form method="POST" action="/store" enctype="multipart/form-data" class="mt-10 w-full flex justify-center py-5  rounded-md">
      @csrf
      <div class="w-1/2">
        
        <div class="py-3">
          <div class="flex">
              <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Website name</label><span class="mx-2 block text-sm font-normal text-blue-600">{{"(required)"}}</span>
              </div>
          <div class="relative mb-2 py-3">
            <input type="text" id="hs-inline-add-on" name="website-name" class="bg-white py-3 px-4  block w-full border border-gray-300 shadow-sm rounded-md text-sm focus:z-10  " placeholder="OpenVerse">
        </div>

          <div class="flex">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Thumbnail</label><span class="mx-2 block text-sm font-normal text-blue-600">{{"(required)"}}</span>
            </div>
          <input type="file" id="thumbnail" name="thumbnail"/>

        <div class="py-3">
            <div class="flex">
                <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Github URL</label><span class="mx-2 block text-sm font-normal text-blue-600">{{"(required)"}}</span>
                </div>
            <div class="relative">
              <input type="text" id="hs-inline-add-on" name="github-code" class="bg-white py-3 px-4 pl-16 block w-full border border-gray-300 shadow-sm rounded-md text-sm focus:z-10  " placeholder="www.example.com">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                <span class="text-sm text-gray-500">http://</span>
              
              </div>
            </div>
          </div>
      
          <div class="py-3">
            <div class="flex">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Website URL</label><span class="mx-2 block text-sm font-normal text-gray-600">{{"(optional)"}}</span>
            </div>
            <div class="relative">
              <input type="text" id="hs-inline-add-on" name="website-link" class="py-3 px-4 pl-16 block w-full border border-gray-300 shadow-sm rounded-md text-sm focus:z-10  " placeholder="www.example.com">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                <span class="text-sm text-gray-500">http://</span>
              </div>
            </div>
          </div>
          <div class="flex">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Gif</label><span class="mx-2 block text-sm font-normal text-gray-600">{{"(optional)"}}</span>
            </div>
          <input type="file" id="gif" name="gif"/>
          <div class="py-3">
            <div class="flex">
                <label for="hs-inline-add-on" class="block text-sm font-medium mb-2 ">Blog link</label><span class="mx-2 block text-sm font-normal text-gray-600">{{"(optional)"}}</span>
                </div>
            <div class="relative">
              <input type="text" id="hs-inline-add-on" name="blog-link" class="py-3 px-4 pl-16 block w-full border border-gray-300 shadow-sm rounded-md text-sm focus:z-10 " placeholder="www.example.com">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                <span class="text-sm text-gray-500">http://</span>
              </div>
            </div>
          </div>
          <button type="submit" class="py-3 px-4 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-gray-200 text-gray-700 shadow-sm align-middle hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm w-full">
            Publish
              <svg class="w-2.5 h-auto" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 7C0.447715 7 -3.73832e-07 7.44771 -3.49691e-07 8C-3.2555e-07 8.55228 0.447715 9 1 9L13.0858 9L7.79289 14.2929C7.40237 14.6834 7.40237 15.3166 7.79289 15.7071C8.18342 16.0976 8.81658 16.0976 9.20711 15.7071L16.0303 8.88388C16.5185 8.39573 16.5185 7.60427 16.0303 7.11612L9.20711 0.292893C8.81658 -0.0976318 8.18342 -0.0976318 7.79289 0.292893C7.40237 0.683417 7.40237 1.31658 7.79289 1.70711L13.0858 7L1 7Z" fill="currentColor"/>
              </svg>
            </button>
        </div>
      </form>
      
  </div>
@section('scripts')
<script>
  // Get a reference to the file input element
  const inputElementThumbnail = document.querySelector('input[id="thumbnail"]');
  const inputElementGif = document.querySelector('input[id="gif"]');

  // Create a FilePond instance
  const thumbnail = FilePond.create(inputElementThumbnail);
  const git = FilePond.create(inputElementGif)
  //then we store the information on a temporaly server before we do anything else
  //we are also going to make the "server: " a structure so that we can use CSRF
  FilePond.setOptions({
    server: {
     url : '/upload',
     headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
     }
    }
});
</script>
@endsection
@endsection