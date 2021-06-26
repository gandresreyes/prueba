<x-app-layout>
    <section class="bg-cover " style="background-image: url({{asset('img/home/home.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Pueba Gabriel reyes </h1>
                <p class="text-white text-lg mt-2 ">Sistema de gestion de Tikets para Historias de usuario</p>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        ejemplo1
                    </h1>
                </header>
                <p class="tx-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nemo, </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        ejemplo2
                    </h1>
                </header>
                <p class="tx-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nemo, </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        ejemplo3
                    </h1>
                </header>
                <p class="tx-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nemo, </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/imagen4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        ejemplo4
                    </h1>
                </header>
                <p class="tx-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nemo, </p>
            </article>

        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-20">
        <h1 class="text-center text-white text-3xl">Texto de ejemplo</h1>

    </section>
</x-app-layout>

