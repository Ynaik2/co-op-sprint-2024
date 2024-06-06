<?php
$search= "IDK";
$results = array(array("1",22,18,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("2",15,13,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("3",5,2,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("4",17,15,55,65,"https://source.unsplash.com/random/200x200?sig=1")); // ((Name of product, no.of stars, no.of reviews, price, link to product page, image of product page ), x 4)
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luminae - {{$search}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<x-layout>
    <div class="min-h-screen bg-gray-50/50">
        <div class="p-4">
          <nav class="block w-full max-w-full bg-transparent text-black shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center ">
              <div class="capitalize ">
                <nav aria-label="breadcrumb" class="w-max ">
                  <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                    <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                      <a href="#"><!-- PhP list required here-->
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100 mt-1 ml-1">Showing results for:</p>
                      </a>
                    </li>
                  </ol>
                </nav>
                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900 mb-1 ml-1">{{$search}}</h6>
              </div>
            </div>
          </nav>
          <!-- Product box starts here--><!-- Repeatable and will auto format no need to code just copy it and add relevant info-->
        <div class="mt-12 "><!--please fill with relevant information-->
          <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4"><!-- PhP list required here-->
            @for ($c = 0; $c < count($results); $c++)
              <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md  hover:scale-105"><a href="{{$results[$c][4]}}">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                  <img src="{{$results[$c][5]}}" alt="image" class="h-full w-full object-cover rounded-t-xl" />
                </div>
                <div class="border-blue-gray-50 border-t p-4 bg-gray-200 rounded-xl rounded-t-none ">
                  <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                    <strong class="hover:font-extrabold">{{$results[$c][0]}}</strong>
                    <div class="flex items-center">
                      @for ($i = 0; $i < $results[$c][1]; $i++)
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                      @endfor
                      <strong>{{$results[$c][2]}} reviews</strong>
                    </div>
                    <span class="mt-2 text-red-500 font-bold">${{$results[$c][3]}}</span>
                  </p>
                </div>
              </a></div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
