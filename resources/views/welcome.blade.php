<x-guest-layout>
    <!-- component -->
    <section class="bg-whit">
        <div class="container px-6 py-8 mx-auto">
            <div class="lg:flex lg:-mx-2">
                <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                    @foreach ($categories as $category)
                    <div>
                        <input type="checkbox" id="category-{{ $category->id }}">
                        <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                    @endforeach
                </div>

                <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                    <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                        <p class="text-gray-500 ">{{ count($products) }} Produktów</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-gray-500">Sort</p>
                            <select class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                                <option value="#">Recommended</option>
                                <option value="#">Size</option>
                                <option value="#">Price</option>
                            </select>
                        </div>
                    </div>
                    <section class="w-full py-12 bg-white sm:py-16 lg:py-20">
                        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                            <div class="max-w-md mx-auto text-center">
                                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">Our featured items</h2>
                                <p class="mt-4 text-base font-normal leading-7 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus faucibus massa dignissim tempus.</p>
                            </div>

                            <div class="grid grid-cols-2 gap-6 mt-10 lg:mt-16 lg:gap-4 lg:grid-cols-4">
                                @foreach($products as $product)
                                <div class="relative group">
                                    <div class="overflow-hidden aspect-w-1 aspect-h-1">
                                        @if(!is_null($product->image_path))
                                        <img class="object-cover  w-full h-[240px] transition-all duration-300 group-hover:scale-125"
                                            src="{{ asset('storage/' . $product->image_path) }}"
                                            alt="Zdjęcie produktu" />
                                        @else
                                        <img class="object-cover w-full h-[240px] transition-all duration-300 group-hover:scale-125" src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-1.png" alt="Zdjęcie produktu" />
                                        @endif
                                    </div>
                                    <div class="absolute left-3 top-3">
                                        <p class="sm:px-3 sm:py-1.5 px-1.5 py-1 text-[8px] sm:text-xs font-bold tracking-wide text-gray-900 uppercase bg-white rounded-full">New</p>
                                    </div>
                                    <div class="flex items-start justify-between mt-4 space-x-4">
                                        <div>
                                            <h3 class="text-xs font-bold text-gray-900 sm:text-sm md:text-base">
                                                <a href="#" title="">
                                                    {{ $product->name}}
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                </a>
                                            </h3>
                                            <div class="flex items-center mt-2.5 space-x-px">
                                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg class="w-3 h-3 text-gray-300 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <p class="text-xs font-bold text-gray-900 sm:text-sm md:text-base">{{ $product->price }} PLN</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>