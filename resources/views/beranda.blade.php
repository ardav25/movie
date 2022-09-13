<x-front-layout>
    <div class="lg:!py-44 mb-8 lg:mb-16 bg-gradient-to-b relative from-white via-primary-50 to-white dark:bg-gray-900 dark:bg-grid-gray-700/50 py-8 lg:py-32 border-b dark:border-gray-800/50">
        <div class="bg-gradient-to-br dark:from-gray-900 dark:via-gray-900 dark:to-gray-900/50 absolute inset-0"></div>
        <div class="grid grid-cols-12">
            <section class="col-span-10 col-start-2">
                <div class="relative">
                    <div class="flex h-full flex-col justify-between">
                        <div class="flex-1">
                            <h1 class="text-2xl font-bold tracking-tighter text-invert sm:text-3xl md:text-5xl leading-1 lg:leading-[1.2] text-white">Selamat datang di
                                <br class="sm:block hidden">
                                <span class="tracking-tight bg-gradient-to-r from-primary-600 via-sky-500 to-cyan-500 text-transparent bg-clip-text -mt-2 lg:-mt-0 block">Movie Maniak.</span>
                            </h1>
                            <p class="text-white text-base lg:text-2xl max-w-3xl leading-relaxed mt-2 md:mt-4">
                                Millions of movies, TV shows and people to discover. Explore now.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="grid grid-cols-12">
        <section class="col-span-10 col-start-2">
            <div class="mb-16">
                <h4 class="text-xl font-semibold capitalize">Now Playing</h4>
                <ul class="sm:gap-y-12 lg:grid-cols-4 mt-6 grid gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-8 md:grid-cols-3 2xl:gap-16 2xl:gap-y-16">
                    @foreach($nowPlaying as $item)
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
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </ul>
            </div>

            <div class="mt-10 lg:mt-12"></div>
        </section>

        <section class="col-span-10 col-start-2">
            <div class="mb-16">
                <h4 class="text-xl font-semibold capitalize">Popular</h4>
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
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </ul>
            </div>

            <div class="mt-10 lg:mt-12"></div>
        </section>

        <section class="col-span-10 col-start-2">
            <div class="mb-16">
                <h4 class="text-xl font-semibold capitalize">Top Rated</h4>
                <ul class="sm:gap-y-12 lg:grid-cols-4 mt-6 grid gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-8 md:grid-cols-3 2xl:gap-16 2xl:gap-y-16">
                    @foreach($topRated as $item)
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
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </ul>
            </div>

            <div class="mt-10 lg:mt-12"></div>
        </section>

        <section class="col-span-10 col-start-2">
            <div class="mb-16">
                <h4 class="text-xl font-semibold capitalize">Up Coming</h4>
                <ul class="sm:gap-y-12 lg:grid-cols-4 mt-6 grid gap-x-4 gap-y-8 sm:grid-cols-2 sm:gap-8 md:grid-cols-3 2xl:gap-16 2xl:gap-y-16">
                    @foreach($upComing as $item)
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
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </ul>
            </div>

            <div class="mt-10 lg:mt-12"></div>
        </section>
    </div>

</x-front-layout>
