<x-app-layout>
    <section class="my-16">
        <h1 class="text-center text-3xl text-gray-700 mb-7 "> PROYECTOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($proyectos as $proyecto)
                <article class="bg-white shadow-lg rounded">
                    <div class="px-6 py-3 mb-3">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($proyecto->name, 40)}} </h1>
                        <p class="text-gray-500 text-sm mb-2">Creador: {{$proyecto->user->name}}</p>

                        <!-- component -->
                        <a  href="{{route('proyectos.show', $proyecto)}}" class=" block text-center w-full bg-blue-500 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                            ver historias
                        </a>
                    </div>                    

                </article>
                
            @endforeach

        </div>
    </section>
</x-app-layout>