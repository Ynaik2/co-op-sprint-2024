<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luminae - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
$selection= array (array("1",22,18),array("2",15,13),array("3",5,2),array("4",17,15));// Selection bar List here ((Value to display, Route to page),(Value to display, Route to page))
$Banner1 = array ("It is a long established fact that a ","reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,"," sometimes by accident, sometimes on purpose (injected humour and the like","link","https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80") ; // Banner List here (Tag name in purple box, Title, Description, link to page, link of picture)
$Banner2 = array ("It is a long established fact that a ","reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,"," sometimes by accident, sometimes on purpose (injected humour and the like","link","https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80") ; // Banner List here (Tag name in purple box, Title, Description, link to page, link of picture)
$categorycontent = array(array("1",22,18,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); // ((Name of category, category description, link to category page), x 4)
$dailydeal = array(array("1",22,18,4563,"1","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,76,"2","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,47,"3","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,5,"4","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); //((name, price discounted, price original, percent discount, link to page))
$top100 = array(array("1",22,18,4563,"1","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,76,"2","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,47,"3","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,5,"4","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); //((name, price discounted, price original, percent discount, link to page))
$trending = array(array("1",22,18,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); //((name, price discounted, price, link to page))
?>

<x-layout>
    <div class="bg-white">
        <header>
            <div class="mx-auto px-6 py-3">
                <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                    <div class="flex flex-col sm:flex-row">
                        <!--Selection bar here-->
                        @foreach ($selection as $select)
                            <a class="mt-3 text-gray-600 hover:font-bold sm:mx-3 sm:mt-0" href="{{$select[1]}}">{{$select[0]}}</a><!-- change to correct link required-->
                        @endforeach
                    </div>
                </nav>
                <div class="relative mt-6 max-w-lg mx-auto">
                </div>
            </div>
        </header>
        </div>
        <main class="my-8">
    
          <div class="relative flex w-full flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:scale-105">
            <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-l-none bg-white bg-clip-border text-gray-700 ">
              <img src="{{$Banner1[4]}}" alt="image" class="h-full w-full object-cover" />
            </div>
            <div class="p-6">
              <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">{{$Banner1[0]}}</h6>
              <h4 class="text-blue-gray-900 mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal antialiased">{{$Banner1[1]}}</h4>
              <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">{{$Banner1[2]}}</p>
              <a class="inline-block" href="{{$Banner1[3]}}"><!-- change to correct link required-->
                <button class="flex select-none items-center gap-2 rounded-lg px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                  </svg>
                </button>
              </a>
            </div>
          </div>
    
    
          <!-- start of boxes -->
            <div class=" mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium mt-10">Deal Of the Day</h3>
                <span class="mt-3 text-sm text-gray-500">Ends in 24 h</span>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-full mx-auto rounded-md shadow-md overflow-hidden hover:scale-105"><a href="{{$dailydeal[$i][4]}}"><!--to correct page-->
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$dailydeal[$i][5]}}')">
                            </div>
                            <div class="flex items-end justify-end h-0 w-full bg-cover">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 hover:scale-150"><a href="#">
                                    <svg class="h-5 w-5 " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z "></path></svg>
                                </a></button><!--link to appropriate page it is for adding to cart not to open product page-->
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$dailydeal[$i][0]}}</h3>
                                <span class="mt-2 text-red-500 font-bold">${{$dailydeal[$i][1]}}</span><span>  </span><span class="mt-2 text-gray-500 tracking-normal ">${{$dailydeal[$i][2]}}</span><span>  </span><span class="mt-2 text-red-500 font-bold">-{{$dailydeal[$i][3]}}%</span>
                            </div>
                        </a></div>
                    @endfor
                </div>
            </div>
            <!-- End Of deal of the day -->
            <div class=" mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium py-10">Trending must-haves</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="w-full mx-auto rounded-md shadow-md overflow-hidden hover:scale-105"><a href="{{$trending[$i][2]}}"><!--to correct page-->
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$trending[$i][3]}}')">
                            </div>
                            <div class="flex items-end justify-end h-0 w-full bg-cover">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 hover:scale-150"><a href="#">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </a></button><!--link to appropriate page it is for adding to cart not to open product page-->
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$trending[$i][0]}}</h3>
                                <span class="text-gray-500 mt-2">{{$trending[$i][1]}}</span>
                            </div>
                        </a></div>
                    @endfor
                </div>
            </div>
            <!-- End Of Trending Must haves -->
            <div class=" mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium py-10">Top 100 Products</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6 mb-6">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="w-full mx-auto rounded-md shadow-md overflow-hidden hover:scale-105"><a href="{{$top100[$i][4]}}"><!--to correct page-->
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$top100[$i][5]}}')">
                            </div>
                            <div class="flex items-end justify-end h-0 w-full bg-cover">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 hover:scale-150"><a href="#">
                                    <svg class="h-5 w-5 " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z "></path></svg>
                                </a></button><!--link to appropriate page it is for adding to cart not to open product page-->
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$top100[$i][0]}}</h3>
                                <span class="mt-2 text-red-500 font-bold">${{$top100[$i][1]}}</span><span>  </span><span class="mt-2 text-gray-500 tracking-normal ">${{$top100[$i][2]}}</span><span>  </span><span class="mt-2 text-red-500 font-bold">-{{$top100[$i][3]}}%</span>
                            </div>
                        </a></div>
                    @endfor
                </div>
            </div>
            <!-- End Of Top 100 -->
    
            <div class="relative flex w-full flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md hover:scale-105">
            <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-l-none bg-white bg-clip-border text-gray-700 ">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="image" class="h-full w-full object-cover" />
            </div>
            <div class="p-6">
              <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">{{$Banner2[0]}}</h6>
              <h4 class="text-blue-gray-900 mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal antialiased">{{$Banner2[1]}}</h4>
              <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">{{$Banner2[2]}}</p>
              <a class="inline-block" href="{{$Banner2[3]}}"><!-- change to correct link required-->
                <button class="flex select-none items-center gap-2 rounded-lg px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                  </svg>
                </button>
              </a>
            </div>
          </div>
    
            <div class=" mx-auto px-6">
                <h3 class="text-gray-700 text-2xl font-medium py-10">Explore Categories</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <?php $categorycolour = array("bg-blue-700","bg-green-700","bg-pink-700","bg-red-700") ?>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="w-full mx-auto rounded-md shadow-md overflow-hidden hover:scale-105"><!--to correct page-->
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$categorycontent[$i][3]}}')">
                            </div>
                            <div class="px-5 py-3 {{$categorycolour[$i]}}">
                              <h3 class="text-white">{{$categorycontent[$i][0]}}</h3>
                              <span class="mt-2 text-gray-300 ">{{$categorycontent[$i][1]}}</span><br>
                              <a href="{{$categorycontent[$i][2]}}"><span class="mt-2 text-white font-bold">Category Page →</span></a><!-- change to correct link required--><!--link to appropriate page it is for adding to cart not to open product page-->
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <!-- End Of Explore Categories -->            
                            
        </main>
    </div>
</x-layout>