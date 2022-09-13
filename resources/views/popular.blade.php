<x-front-layout>
    <div class="grid grid-cols-12 mt-8">
        <section class="col-span-10 col-start-2">
            <div class="mb-16">
                <h4 class="text-3xl font-bold capitalize">Popular</h4>
                <ul class="sm:gap-y-12 lg:grid-cols-4 mt-6 grid gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-8 md:grid-cols-3 2xl:gap-16 2xl:gap-y-16">
                    @foreach($popular as $item)
                    <li class="relative">
                        <div class="text-left focus:outline-none">
                            <a href="/detail/{{$item->id}}">
                                <div class="LazyLoad is-visible">
                                    <img class="mb-1 w-full h-full rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $item->poster_path }}" alt="{{ $item->original_title }}" style="opacity: 1; transform: none;">
                                </div>
                            </a>
                            <span class="mt-1 mb-2 block max-w-sm leading-tight tracking-tighter">
                                <a class="text-gray-800 font-medium line-clamp-1" href="/detail/{{$item->id}}">
                                    {{ $item->original_title }}
                                </a>
                            </span>
                            <span class="flex items-center justify-between text-xs">
                                <span class="flex items-center space-x-2 text-gray-600 text-[11px]">
                                    <span>{{ $item->release_date }}</span>
                                </span>
                                <span class="block rounded-full text-gray-900">
                                    <span>Vote average is
                                        <span class="text-orange-500 underline decoration-skip-ink underline-offset-0 decoration-orange-500/30">
                                            {{ $item->vote_average }}
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </li>

                    @endforeach

                </ul>
            </div>

            <div class="mt-10 lg:mt-12"></div>
        </section>

    </div>

</x-front-layout>
