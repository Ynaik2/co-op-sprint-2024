<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
    </head>
</head>
<?php
$websiteinfo =array("tesat","tesat1","tesat2","tesat3","tesat4","tesat5","tesat6",);
$deliveryinfo =array("tesat7","tesat8","tesat9","tesat10","tesat11","tesat12","tesat13",);
$deliveryprogress =array("sep7","sep8","sept9","sep10","sep11","sep12","sep13",);
$paymentservice = "Paypal";
$deliveryservice = "DHL";
$total = 0;
$shipping = 9.99;
$Products = array(array("1",22,18,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); // ((Name of product, Price, quantity, image of product, link to page), x 4)
?>
<body>
  <div class="mx-6 h-screen pt-6">
    <div class="w-full rounded-full bg-gray-200 dark:bg-gray-200">
      <div class="rounded-full bg-green-500 p-5 text-center text-xl font-extrabold leading-none text-white" style="width: 100%">Confirmation and Delivery</div>
    </div>


    <div class="mx-0 mt-6 justify-center md:flex md:space-x-6 xl:px-0">
      <div class="rounded-lg md:w-full">

        <div class="mb-6 rounded-lg bg-white p-6 shadow-md">
          <p class="text-lg font-bold">Items Purchased</p>
        </div>

        <!-- copy code blok from here to make more copies-->
        <div class="rounded-lg md:w-full">
          @foreach ($Products as $Product)
          <?php $total += $Product[1] ?>
            <div class="mb-6 justify-between rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start hover:scale-105">
              <img src="{{$Product[3]}}" alt="product-image" class="w-full rounded-lg sm:w-40 hover:scale-110" />
              <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                <div class="mt-5 sm:mt-0">
                  <h2 class="text-lg font-bold text-gray-900 hover:font-extrabold">{{$Product[0]}}</h2>
                </div>
                <div class="im mt-4 flex justify-between sm:mt-0 sm:block sm:space-x-6 sm:space-y-6">
                  <div class="flex items-center border-gray-100 max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="12" required />
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                  </div>
                  <div class="flex items-center space-x-4">
                    <p class="text-sm hover:font-extrabold">${{$Product[1]}}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500 scale-110">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <!-- add them her-->
        <div class="mb rounded-lg bg-white p-6 shadow-md">
          <p class="text-lg font-bold">Information Provided To Us</p>

          <table class="table-fixed w-full mt-6">
            <tbody>
              <tr>
                <td class="font-bold">Email address</td>
                <td>{{$websiteinfo[0]}} </td>
              </tr>
              <tr>
                <td class="font-bold">First name</td>
                <td>{{$websiteinfo[1]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Last name</td>
                <td>{{$websiteinfo[2]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Country</td>
                <td>{{$websiteinfo[3]}}</td>
              </tr>
              <tr>
                <td class="font-bold">State/Region</td>
                <td>{{$websiteinfo[4]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Address</td>
                <td>{{$websiteinfo[5]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Phone NUmber</td>
                <td>{{$websiteinfo[6]}} </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mb rounded-lg bg-white p-6 shadow-md mt-6">
          <p class="text-lg font-bold">Information Sent To {{$deliveryservice}}</p>

          <table class="table-fixed w-full mt-6">
            <tbody>
              <tr>
                <td class="font-bold">Email address</td>
                <td>{{$deliveryinfo[0]}} </td>
              </tr>
              <tr>
                <td class="font-bold">First name</td>
                <td>{{$deliveryinfo[1]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Last name</td>
                <td>{{$deliveryinfo[2]}}</td>
              </tr>
              <tr>
                <td class="font-bold">Country</td>
                <td>{{$deliveryinfo[3]}} </td>
              </tr>
              <tr>
                <td class="font-bold">State/Region</td>
                <td>{{$deliveryinfo[4]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Address</td>
                <td>{{$deliveryinfo[5]}} </td>
              </tr>
              <tr>
                <td class="font-bold">Phone NUmber</td>
                <td>{{$deliveryinfo[6]}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- total -->
      <div class="m-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          <p class="text-gray-700">$<?php echo(round($total,4))?></p>
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Shipping</p>
          <p class="text-gray-700">${{$shipping}}</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold">{{ $total += $shipping }}</p>
            <p class="text-sm text-gray-700">including VAT</p>
          </div>
        </div>
        <div class="mt-6 w-full rounded-md bg-green-500 py-1.5 font-medium text-white text-center">Paid using {{$paymentservice}}</div>
        <hr class="my-4" />
        <!-- component -->
        <div class="p-6 max-w-md mx-auto flow-root">
          <ul role="list" class="-mb-8">
            <li>
              <div class="relative pb-8">
                <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                      <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010         18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                    <div>
                      <p class="text-sm text-gray-500">Packing Products</p>
                    </div>
                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                      <time datetime="2020-09-20">{{$deliveryprogress[0]}}</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="relative pb-8">
                <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full  flex items-center justify-center ring-8 ring-white">
                      <img class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        src="https://t3.ftcdn.net/jpg/04/14/78/90/360_F_414789044_6xD0f4z9YcHfQimfnighWoUCIqgEJ66G.jpg" />

                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                    <div>
                      <p class="text-sm text-gray-500">Sending to Delivery Partner</p>
                    </div>
                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                      <time datetime="2020-09-22">{{$deliveryprogress[1]}}</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="relative pb-8">
                <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white">
                      <img class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        src="https://c8.alamy.com/comp/2RC5DTJ/taking-off-plane-logo-2RC5DTJ.jpg" clip-rule="evenodd" />

                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                    <div>
                      <p class="text-sm text-gray-500">Package Enroute</p>
                    </div>
                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                      <time datetime="2020-09-28">{{$deliveryprogress[2]}}</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="relative pb-8">
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                      <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.        5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                    <div>
                      <p class="text-sm text-gray-500">Delivery Succesfull</p>
                    </div>
                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                      <time datetime="2020-10-04">{{$deliveryprogress[3]}}</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </div>
  </div>
</body>
</html>