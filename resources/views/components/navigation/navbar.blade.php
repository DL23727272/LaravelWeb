@section('navbar')
<header class="text-gray-600 body-font" style="position: fixed; top: 0; width: 100%; background-color: rgb(90, 246, 223); z-index: 100;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/home">
     <img src="{{ asset('assets/image/home.png') }}" alt="img here" width="40px">
        <span class="ml-3 text-xl">DL</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" aria-current="page" href="/home">Home</a>
        <a class="mr-5 hover:text-gray-900" href="/art">Arts</a>
        <a class="mr-5 hover:text-gray-900" href="/contact">Contact</a>
        <a class="mr-5 hover:text-gray-900" href="#socials">Socials</a>
      </nav>
    </div>
</header>
