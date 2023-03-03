<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
        {{-- header --}}
        <header class="py-4 shadow-sm bg-white">
            <div class="container flex items-center justify-between">
                {{-- logo --}}
                <a href="#" class="w-32">BookShop</a>
                {{-- search Bar --}}
                <div class="w-full max-w-xl relative flex">
                    <span class="absolute left-4 top-3 texzt-lg text-gray-400">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none" placeholder="search">
                    <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
                </div>
                {{-- icons --}}
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                        <div class="text-2xl">
                            <div class="far fa-heart"></div>
                        </div>
                        <div class="text-xs leading-3">Wishlist</div>
                        <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">0</span>
                    </a>

                    
                    <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                        <div class="text-2xl">
                            <div class="fas fa-shopping-bag"></div>
                        </div>
                        <div class="text-xs leading-3">Cart </div>
                        <span class="absolute -right-2 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">0</span>
                    </a>

                    
                    <div href="#" class="text-center text-gray-700 transition group main relative cursor-pointer">
                        <div class="text-2xl">
                            <div class="far fa-user"></div>
                        </div>
                        <div class="text-xs leading-3 group-hover:text-primary">Account</div>

                        <div class="absolute top-full right-0 transition group-hover:translate-y-5 translate-y-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible duration-500 ease-in-out group-hover:transform z-50 min-w-[200px] transform">
                            <div class="relative top-0 p-2 bg-white rounded-sm shadow-xl w-full">
                                <h3 class="font-medium">Welcome to Book Shop</h3>
                                <div class="grid grid-cols-2 gap-4 my-2">
                                    <a href="#" class="col-span-1 bg-primary rounded-sm py-1 border border-primary font-medium text-white hover:bg-transparent hover:text-primary uppercase transition delay-100 duration-500">join</a>
                                    <a href="#" class="col-span-1 bg-transparent rounded-sm py-1 border border-primary font-medium text-primary hover:bg-primary hover:text-white uppercase transition delay-100 duration-500">sign in</a>
                                </div>
                                <div class="bg-white py-3 divide-y divide-gray-200 divide-dashed">
                                    <a href="#" class="flex items-center py-3 text-gray-600 hover:text-primary hover:bg-gray-50 transition">
                                        {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                                        <i class="las la-shoe-prints"></i>
                                        <span class="ml-4 text-sm">Shoes</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- header end --}}

        {{-- navbar --}}
        <nav class="bg-gray-800">
            <div class="container flex">
                {{-- all category --}}
                <div class="px-8 py-4 bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All categories</span>

                    <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-200 divide-dashed hidden group-hover:block">
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-shoe-prints text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Shoes</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-male text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Men</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-female text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Women</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-plug text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Electronics</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-headphones text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Headphones</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-glasses text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Glasses</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-desktop text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Computers</span>
                        </a>
                        
                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            {{-- <img src="" alt="" class="w-5 h-5 object-contain"> --}}
                            <i class="las la-mobile text-primary"></i>
                            <span class="ml-4 text-gray-600 text-sm">Mobile</span>
                        </a>
                    </div>
                </div>
                {{-- nav links --}}
                <div class="flex items-center justify-between flex-grow pl-12">
                    <div class="flex items-center space-x-6 capitalize">
                        <a href="http://" class="text-gray-200 hover:text-white transition">Home</a>
                        <a href="http://" class="text-gray-200 hover:text-white transition">Shop</a>
                        <a href="http://" class="text-gray-200 hover:text-white transition">About us</a>
                        <a href="http://" class="text-gray-200 hover:text-white transition">Contact us</a>
                    </div>
                    <a href="" class="text-gray-200 hover:text-white transition">Login/Register</a>
                </div>
            </div>
        </nav>
        {{-- navbar end --}}

        {{-- banner --}}
        <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url({{ asset('/img/banner-2.jpg') }})">
            <div class="container">
                <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                    best collection for <br> home decoration
                </h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis <br> maxime rerum officia ad eveniet animi alias molestiae.</p>
                <div class="mt-12">
                    <a href="#" class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-primary transition capitalize">shop now</a>
                </div>
            </div>
        </div>
        {{-- banner end --}}

        {{-- feature section --}}
        <div class="container py-16">
            <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
                {{-- single feature --}}
                <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-4">
                    {{-- <i class="las la-truck text-4xl text-primary"></i> --}}
                    <img src="{{ asset('/img/delivery-van.svg') }}" alt="">
                    <div>
                        <h4 class="font-medium capitalize text-lg">Free shopping</h4>
                        <p class="text-gray-500 text-sm">order over $200</p>
                    </div>
                </div>
                {{-- single feature end --}}
                {{-- single feature --}}
                <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-4">
                    {{-- <i class="las la-hand-holding-usd text-4xl text-primary"></i> --}}
                    <img src="{{ asset('/img/money-back.svg') }}" alt="">
                    <div>
                        <h4 class="font-medium capitalize text-lg">money return</h4>
                        <p class="text-gray-500 text-sm">30 days mony return</p>
                    </div>
                </div>
                {{-- single feature end --}}
                {{-- single feature --}}
                <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-4">
                    {{-- <i class="las la-history text-4xl text-primary"></i> --}}
                    <img src="{{ asset('/img/service-hours.svg') }}" alt="">
                    <div>
                        <h4 class="font-medium capitalize text-lg">24/7</h4>
                        <p class="text-gray-500 text-sm">Customer support</p>
                    </div>
                </div>
                {{-- single feature end --}}
            </div>
        </div>
        {{-- feature section end --}}

        {{-- categories --}}
        <div class="container py-16">
            <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">shop by category</h2>

            <div class="grid grid-cols-3 gap-3">
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-1.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">Bedroom</a>
                </div>
                {{-- single category end --}}
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-2.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">Mattress</a>
                </div>
                {{-- single category end --}}
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-3.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">office</a>
                </div>
                {{-- single category end --}}
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-4.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">outdoor</a>
                </div>
                {{-- single category end --}}
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-5.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">sofa</a>
                </div>
                {{-- single category end --}}
                {{-- single category --}}
                <div class="relative rounded-sm overtflow-hidden group">
                    <img src="{{ asset('/img/category/category-6.jpg') }}" alt="" class="w-full">
                    
                    <a href="#" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition capitalize">living & dining</a>
                </div>
                {{-- single category end --}}
            </div>
        </div>
        {{-- categories end --}}

        {{-- new appival --}}
        <div class="container pb-16">
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>

            {{-- product grid --}}
            <div class="grid grid-cols-4 gap-6">
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
            </div>
            {{-- product grid end --}}
        </div>
        {{-- new appival end --}}

        {{-- ad section --}}
        <div class="container pb-16">
            <a href="#">
                <img src="{{ asset('/img/offers/offer-2.jpg') }}" alt="" class="w-full">
            </a>
        </div>
        {{-- ad section end --}}

        {{-- just for you --}}
        <div class="container pb-16">
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Just For You</h2>

            {{-- product grid --}}
            <div class="grid grid-cols-4 gap-6">
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
                
                {{-- single product --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    {{-- product image --}}
                    <div class="relative">
                        <img src="{{ asset('/img/products/product1.jpg') }}" alt="" class="w-full">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-search"></i>
                            </a>
                            
                            <a href="#" class="text-white text-lg w-9 h-9 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    {{-- product image end --}}

                    {{-- product content --}}
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">guyer chair</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$45</p>
                            <p class="text-sm text-gray-400 line-through">$55</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(50)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition capitalize">add to cart</a>
                    {{-- product content end --}}
                </div>
                {{-- single product end --}}
            </div>
            {{-- product grid end --}}
        </div>
        {{-- just for you end --}}

        {{-- footer --}}
        <footer class="bg-white pt-6 pb-12 border-t border-gray-100">
            <div class="container grid grid-cols-3">
                {{-- about section --}}
                <div class="col-span-1 space-y-8">
                    {{-- <img src="" alt="" class="w-30"> --}}
                    <h2>BookShop</h2>
                    <p class="text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                {{-- about section end --}}

                {{-- footer link --}}
                <div class="col-span-2 grid grid-cols-2 gap-8">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                                <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- footer link end --}}
            </div>
        </footer>
        {{-- footer end --}}

        {{-- copyright --}}
        <div class="bg-gray-800 py-4">
            <div class="container flex items-center justify-between">
                <p class="text-white">&copy;BookShoop - All Rights Reserved</p>
                <img src="{{ asset('/img/payment-method.png') }}" alt="" class="h-5">
            </div>
        </div>
        {{-- copyright end --}}
    </body>
</html>
