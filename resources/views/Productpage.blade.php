<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
$title = "nike";
$Descriptionmini = "absolutley useless";
$Description = "absolutley useless like i asaid";
$price = 212;
$reviews = $results = array(array("1",22,2,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("2",15,2,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("3",5,4,55,65,"https://source.unsplash.com/random/200x200?sig=1"),array("4",17,5,55,65,"https://source.unsplash.com/random/200x200?sig=1")); // ((Name of user, no.of stars, no.of reviews, price, link to product page, image of user ), x 4);
$colur = array("#f8fafc","#f1f5f9","#e2e8f0","#cbd5e1","#94a3b8","#64748b","#475569","#334155","#1e293b","#0f172a","#020617");
$images = array("https://source.unsplash.com/random/200x200?sig=1","https://source.unsplash.com/random/200x200?sig=1","https://source.unsplash.com/random/200x200?sig=1","https://source.unsplash.com/random/200x200?sig=1","https://source.unsplash.com/random/200x200?sig=1","https://source.unsplash.com/random/200x200?sig=1");
$suggestions = array(array("1",22,18,4563,"1","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,76,"2","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,47,"3","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,5,"4","https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); //((name, price discounted, price original, percent discount, link to page))
?>
<x-layout>
  <div class="bg-white">
    <main class="my-8">
      <div class="container mx-auto px-6">
        <div class="md:flex md:items-center">
          <div class="">
            <img class="mx-auto rounded-md object-fill h-11/12 hover:scale-105 "
              src="{{$images[0]}}"
              alt="Nike Air" />
          </div>
          <div class="mx-auto mt-5 w-full max-w-lg md:ml-8 md:mt-0 md:w-1/2">
            <h3 class="text-lg uppercase text-gray-700">{{$title}}</h3>
            <span class="mt-3 text-gray-500">${{$price}}</span>
            <hr class="my-3" />
            <div class="mt-2">
              <label class="text-sm text-gray-700" for="count">Count:</label>
              <div class="mt-1 flex items-center">
                <button class="text-gray-500 focus:text-gray-600 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </button>
                <span class="mx-2 text-lg text-gray-700">0</span>
                <button class="text-gray-500 focus:text-gray-600 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-3">
              <label class="text-sm text-gray-700" for="count">Color:</label>
              <div class="mt-1 flex items-center">
                @for ($c = 0; $c < count($colur); $c++)
                  <a href=#><button class="mr-2 h-5 w-5 rounded-full border-2 bg-[{{$colur[$c]}}] focus:outline-none hover:scale-125"></button></a>
                @endfor
              </div>
            </div>
            <div class="mt-6 flex items-center">
              <a href="#"><button
                  class="rounded bg-indigo-600 px-8 py-2 text-sm font-medium text-white hover:bg-indigo-500 focus:bg-indigo-500 focus:outline-none hover:scale-125">Order
                  Now</button></a>
              <a href="#"><button class="mx-2 rounded-md border p-2 text-gray-600 hover:bg-gray-200 focus:outline-none hover:scale-125">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button></a>
            </div>
            <div>
              <hr class="my-3" />
              <h3 class="text-lg font-bold uppercase text-gray-700">PRoduct Description</h3>
              <span class="mt-3 text-gray-500">{{$Descriptionmini}}</span>
            </div>
          </div>
        </div>
        <!-- end of product page-->
        <div class="mt-16">
          <hr class="my-3" />
          <h3 class="text-2xl font-medium text-gray-600">Information about the product</h3>
          <br />
          <div>
            <span class="w-full text-gray-500">{{$Description}}</span>
          </div>
        </div>
        <!-- end of Product Description Section-->
        <div class="mt-16">
          <hr class="my-3" />
          <h3 class="text-2xl font-medium text-gray-600">Images</h3>

          <div class="grid grid-cols-2 gap-4 mt-10 justify-items-center">
            <div class="grid gap-4">
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[0]}}" alt="" />
              </div>
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[1]}}" alt="" />
              </div>
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[2]}}" alt="" />
              </div>
            </div>
            <div class="grid gap-4">
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[3]}}" alt="" />
              </div>
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[4]}}" alt="" />
              </div>
              <div>
                <img class="h-auto max-w-full rounded-xl hover:scale-105"
                  src="{{$images[5]}}" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- end of Images page-->
        <?php
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        $count5 = 0;
        foreach ($reviews as $subarray) {
            $thirdElement = $subarray[2];
            switch ($thirdElement) {
                case 1:
                    $count1++;
                    break;
                case 2:
                    $count2++;
                    break;
                case 3:
                    $count3++;
                    break;
                case 4:
                    $count4++;
                    break;
                case 5:
                    $count5++;
                    break;
            }
        }
        $percentage1 = ($count1 / count($reviews)) * 100;
        $percentage2 = ($count2 / count($reviews)) * 100;
        $percentage3 = ($count3 / count($reviews)) * 100;
        $percentage4 = ($count4 / count($reviews)) * 100;
        $percentage5 = ($count5 / count($reviews)) * 100;
        ?>
        <div class="mt-16">
          <hr class="my-3" />
          <h3 class="text-2xl font-medium text-gray-600">Reviews</h3>
          <br />
          <div>
            <div class="mt-0">
              <!-- component -->
              <!-- review item -->
              <div class="mx-auto rounded-xl bg-white px-4 py-4 shadow-lg">
                <div class="mb-1 px-4 py-4 tracking-wide">
                  <h2 class="mt-1 font-semibold text-gray-800">{{count($reviews)}} Users reviews</h2>
                  <div class="-mx-8 border-b px-8 pb-3">
                    <div class="mt-1 flex items-center">
                      <div class="w-1/5 tracking-tighter text-indigo-500">
                        <span>5 star</span>
                      </div>
                      <div class="w-11/12">
                        <div class="h-2 w-full rounded-lg bg-gray-300">
                          <div class="h-2 w-[{{$percentage1}}%] rounded-lg bg-indigo-600"></div>
                          <!--percentahge bar contoller here w-7/12 is the controller (out of 12-->
                        </div>
                      </div>
                      <div class="w-1/5 pl-3 text-gray-700">
                        <span class="text-sm">{{$percentage1}}%</span>
                      </div>
                    </div>
                    <!-- first -->
                    <div class="mt-1 flex items-center">
                      <div class="w-1/5 tracking-tighter text-indigo-500">
                        <span>4 star</span>
                      </div>
                      <div class="w-11/12">
                        <div class="h-2 w-full rounded-lg bg-gray-300">
                          <div class="h-2 w-[{{$percentage2}}%] rounded-lg bg-indigo-600"></div>
                        </div>
                      </div>
                      <div class="w-1/5 pl-3 text-gray-700">
                        <span class="text-sm">{{$percentage2}}%</span>
                      </div>
                    </div>
                    <!-- second -->
                    <div class="mt- flex items-center">
                      <div class="w-1/5 tracking-tighter text-indigo-500">
                        <span>3 star</span>
                      </div>
                      <div class="w-11/12">
                        <div class="h-2 w-full rounded-lg bg-gray-300">
                          <div class="h-2 w-[{{$percentage3}}%] rounded-lg bg-indigo-600"></div>
                        </div>
                      </div>
                      <div class="w-1/5 pl-3 text-gray-700">
                        <span class="text-sm">{{$percentage3}}%</span>
                      </div>
                    </div>
                    <!-- thierd -->
                    <div class="mt-1 flex items-center">
                      <div class="w-1/5 tracking-tighter text-indigo-500">
                        <span>2 star</span>
                      </div>
                      <div class="w-11/12">
                        <div class="h-2 w-full rounded-lg bg-gray-300">
                          <div class="h-2 w-[{{$percentage4}}%] rounded-lg bg-indigo-600"></div>
                        </div>
                      </div>
                      <div class="w-1/5 pl-3 text-gray-700">
                        <span class="text-sm">{{$percentage4}}%</span>
                      </div>
                    </div>
                    <!-- 4th -->
                    <div class="mt-1 flex items-center">
                      <div class="w-1/5 tracking-tighter text-indigo-500">
                        <span>1 star</span>
                      </div>
                      <div class="w-11/12">
                        <div class="h-2 w-full rounded-lg bg-gray-300">
                          <div class="h-2 w-[{{$percentage5}}%] rounded-lg bg-indigo-600"></div>
                        </div>
                      </div>
                      <div class="w-1/5 pl-3 text-gray-700">
                        <span class="text-sm">{{$percentage5}}%</span>
                      </div>
                    </div>
                    <!-- 5th -->
                  </div>
                </div>>
              </div>
            </div>
          </div>
          <!-- end of Overall graphs-->
          
          <!-- coppy following code to make more comment boxces-->
          @for ($i = 0; $i < count($reviews); $i++)
          <div class="mt-16">
            <!-- Review tag -->
            <!-- review item -->
            <div class="mx-auto rounded-xl bg-white px-4 py-4 shadow-lg">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <div class="relative inline-block">
                    <div class="relative h-16 w-16 overflow-hidden rounded-full">
                      <img class="object-fit absolute left-0 top-0 h-full w-full bg-cover object-cover"
                        src="{{$reviews[$i][5]}}" alt="Profile picture" />
                      <div class="absolute left-0 top-0 h-full w-full rounded-full shadow-inner"></div>
                    </div>
                    <svg
                      class="absolute bottom-0 right-0 -mx-1 -my-1 h-6 w-6 rounded-full bg-green-600 fill-current p-1 text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path
                        d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z" />
                    </svg>
                  </div>
                </div>
                
                <div class="ml-6">
                  <p class="flex items-baseline">
                    <span class="font-bold text-gray-600">{{$reviews[$i][0]}}</span>
                    <span class="ml-2 text-xs text-green-600">Verified Buyer</span>
                  </p>
                  <div class="mt-1 flex items-center">
                      @for ($c = 0; $c < $reviews[$i][2]; $c++)
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                      @endfor
                  </div>

                  <div class="mt-3">
                    <span class="font-bold">{{$reviews[$i][3]}}</span>
                    <p class="mt-1">{{$reviews[$i][4]}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- insert repetiition here -->
          @endfor
        </div>
        <!-- end of Review section page-->
        <div class="mt-16">
          <hr class="my-3" />
          <h3 class="text-2xl font-medium text-gray-600">More Products</h3>
          <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-full mx-auto rounded-md shadow-md overflow-hidden hover:scale-105"><a href="{{$suggestions[$i][4]}}"><!--to correct page-->
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$suggestions[$i][5]}}')">
                            </div>
                            <div class="flex items-end justify-end h-0 w-full bg-cover">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 hover:scale-150"><a href="#">
                                    <svg class="h-5 w-5 " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z "></path></svg>
                                </a></button><!--link to appropriate page it is for adding to cart not to open product page-->
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$suggestions[$i][0]}}</h3>
                                <span class="mt-2 text-red-500 font-bold">${{$suggestions[$i][1]}}</span>
                            </div>
                        </a></div>
                    @endfor
                </div>
        </div>
      </div>
  </div>
  </main>
  </div>

</x-layout>

</html>