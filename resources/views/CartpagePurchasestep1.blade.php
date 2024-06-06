<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
$total = 0;
$shipping = 9.99;
$Products = array(array("1",22,18,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("2",15,13,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("3",5,2,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"),array("4",17,15,"https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80")); // ((Name of product, Price, quantity, image of product, link to page), x 4)
$Coupon = 0;
?>

<body>
  <div class="h-screen pt-20 mx-6">
    <div class="w-full rounded-full bg-gray-200 dark:bg-gray-200">
      <div class="rounded-full bg-blue-600 p-5 text-center text-xs font-medium leading-none text-blue-100" style="width: 20%">Cart</div>
    </div>
    <div class="mx-0 justify-center  md:flex md:space-x-6 xl:px-0 mt-6">
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
      <!-- total -->
      <div class="m-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          <p class="text-gray-700">$<?php echo(round($total,4))?></p>
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Coupon</p>
          <p class="text-gray-700">${{$Coupon}}</p>
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Shipping</p>
          <p class="text-gray-700">${{$shipping}}</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold">{{ $total =  $shipping + $total - $Coupon}}</p>
            <p class="text-sm text-gray-700">including VAT</p>
          </div>
        </div>
        <a href="C:\Users\richa\OneDrive\Documents\HTML UI\Tobepushedthisweek\CartpagePurchasestep1.html"><button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Continue</button></a>
      </div>
      <!-- coupon -->
    </div>
  </div>
</body>
