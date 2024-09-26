<div>
    <div class="mt-[130vh] md:mt-[80vh] w-full h-fit flex flex-col-reverse md:flex-row">
        {{-- text --}}
        <div class="w-full md:w-1/2 p-4 px-12 flex flex-col justify-center">
            <h1 class="text-3xl md:text-2xl font-bold text-gray-800 leading-tight mb-4">
                Career Development Center UMY
            </h1>
            <p class="text-gray-600 text-lg mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt iste officia et dolorum sed voluptatibus mollitia, fugit maxime ut quam, animi atque amet doloremque qui aliquid vero! Optio, earum itaque corporis eaque tempore ab illo, quod, modi id sit enim nulla nisi mollitia? Expedita necessitatibus sapiente labore porro quaerat illum?
            </p>
            <p class="text-gray-600 text-lg mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt iste officia et dolorum sed voluptatibus mollitia, fugit maxime ut quam, animi atque amet doloremque qui aliquid vero! Optio,
                </p>
            <div class="w-full flex gap-10 item-center">
                <button type="button" class=" md:block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-slate-300 rounded-lg text-sm px-5 py-2.5 font-bold mb-2">
                    See More
                </button>

            </div>
        </div>
        {{-- image --}}
        <div class="w-full md:w-1/2 flex items-center justify-center p-4">
            <img src="/images/about.jpg" class="w-[80%] h-[300px] md:h-[450px]" alt="About-image">
        </div>
    </div>
    <div>
        @include('components.Card')
    </div>
</div>