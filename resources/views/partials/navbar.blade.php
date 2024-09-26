<nav class="w-full max-w-screen-xl  shadow-lg ">
    <div class="w-full p-3 bg-white md:bg-transparent flex justify-between">
        {{-- Logo dan menu --}}
        <div class=" flex px-3 gap-2">
            <img class="w-12 h-11" src="/images/Logo.png" alt="Logo ">
            <img class="w-full h-11" src="/images/Logo_kedua.png" alt="Logo ">
            <ul class="hidden md:flex gap-5 item-center my-auto ml-3 font-semibold text-slate-700">
                <li class="hover:cursor-pointer">Home</li>
                <li class="hover:cursor-pointer">About</li>
                <li class="hover:cursor-pointer">Gallery</li>
                <li class="hover:cursor-pointer">Program</li>
            </ul>
        </div>
        {{-- login button --}}
        <div class="px-2">
            <button type="button" class="hidden md:block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-slate-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 font-bold">Login</button>
            <i class="bi bi-list text-4xl block md:hidden hover:scale-90 hover:cursor-pointer transition-transform duration-200 ease-in-out"></i>

        </div>
    </div>
</nav>