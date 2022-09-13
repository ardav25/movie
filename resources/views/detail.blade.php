<x-front-layout>
    <div class="bg-gradient-to-b relative from-white via-primary-50 to-white dark:bg-gray-900 dark:bg-grid-gray-700/50 py-8 lg:py-32 border-b dark:border-gray-800/50">
        <div class="bg-gradient-to-br dark:from-gray-900 dark:via-gray-900 dark:to-gray-900/50 absolute inset-0"></div>
        <div class="grid grid-cols-12">
            <section class="col-span-10 col-start-2">
                <div class="relative">
                    <div class="flex">
                        <div class="w-full lg:w-2/3">
                            <div class="flex h-full flex-col">
                                <div class="flex-1">
                                    <h1 class="font-bold text-2xl lg:text-5xl leading-none text-gray-900 dark:text-white">{{$data->original_title}}</h1>
                                    <div class="facts text-white">
                                        <!-- <span class="border border-lg mr-2">
                                            PG-13
                                        </span> -->
                                        <span class="release mr-2">
                                           {{$data->release_date}}
                                        </span>
                                        @foreach($data->genres as $genre)
                                        <span class="genres mr-2">
                                            {{$genre->name}}
                                        </span>
                                        @endforeach
                                        <span class="runtime">

                                            {{\Carbon\CarbonInterval::minutes($data->runtime)->cascade()->forHumans();}}
                                        </span>
                                    </div>
                                    <div class="leading-relaxed max-w-3xl text-gray-600 dark:text-gray-300 my-4 lg:my-4 text-light lg:text-normal">
                                        <span class="font-semibold text-2xl text-dark-gray-100">Overview</span> <br>
                                        {{$data->overview != '' ? $data->overview : 'Overview belum tersedia dalam Bahasa Indonesia'}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block w-1/3">
                            <div class="col-span-4 hidden justify-end lg:flex">
                                <div class="relative flex h-96 w-72 flex-col justify-between overflow-hidden rounded-3xl border border-transparent shadow dark:border-primary-800 bg-white dark:bg-gray-900 px-8 pt-12 pb-8 text-invert dark:shadow-xl dark:shadow-primary-500/10">
                                    <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-white dark:from-gray-900 dark:via-transparent dark:to-gray-900">
                                        <img class="mb-1 w-full h-full" src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $data->poster_path }}" alt="{{ $data->original_title }}" style="opacity: 1; transform: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-front-layout>
