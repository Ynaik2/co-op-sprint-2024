<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<section class="w-full overflow-hidden dark:bg-gray-900">
  <div class="flex flex-col">
    <!-- Cover Image -->
    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxjb3ZlcnxlbnwwfDB8fHwxNzEwNzQxNzY0fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="User Cover" class="object-cover h-48 w-full" />

    <!-- Profile Image -->
    <div class="xs:w-[90%] mx-auto flex sm:w-[80%]">
      <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxwZW9wbGV8ZW58MHwwfHx8MTcxMTExMTM4N3ww&ixlib=rb-4.0.3&q=80&w=1080" alt="User Profile" class=" object-cover h-48 w-96xs:w-[7rem] xs:h-[7rem] xs:bottom-[3rem] relative rounded-md outline outline-2 outline-offset-2 outline-blue-500 sm:bottom-[4rem] sm:h-[8rem] sm:w-[8rem] md:h-[10rem] md:w-[10rem] lg:bottom-[5rem] lg:h-[12rem] lg:w-[12rem]" />

      <!-- FullName -->
      <h1 class="xs:pl-4 xs:text-xl my-4 w-full text-left font-serif text-gray-800 sm:mx-4 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">Samuel Abera</h1>
    </div>

    <div class="xs:w-[90%] xs:-top-4 relative mx-auto flex flex-col items-center gap-4 sm:-top-4 sm:w-[92%] md:-top-6 md:w-[90%] lg:-top-8 lg:w-[90%] xl:w-[80%]">
      <!-- Description -->

      <!-- Detail -->
      <div class="my-auto flex w-full flex-col justify-center gap-2 py-6">
        <div class="xs:flex-col flex w-full justify-center gap-2 sm:flex-row">
          <div class="w-full">
            <dl class="divide-y divide-gray-200 text-gray-900 dark:divide-gray-700 dark:text-white">
              <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">First Name</dt>
                <dd class="text-lg font-semibold">Samuel</dd>
              </div>
              <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Last Name</dt>
                <dd class="text-lg font-semibold">Abera</dd>
              </div>
              <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Date Of Birth</dt>
                <dd class="text-lg font-semibold">21/02/1997</dd>
              </div>
            </dl>
          </div>
          <div class="w-full">
            <dl class="divide-y divide-gray-200 text-gray-900 dark:divide-gray-700 dark:text-white">
              <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Delivery Address</dt>
                <dd class="text-lg font-semibold">Ethiopia, Addis Ababa</dd>
              </div>

              <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone Number</dt>
                <dd class="text-lg font-semibold">+251913****30</dd>
              </div>
              <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                <dd class="text-lg font-semibold">samuelabera87@gmail.com</dd>
              </div>
            </dl>
          </div>
        </div>

        <div class="">
          <!--  -->
          <h1 class="xs:text-xl my-4 w-fit rounded-b-md border-b-4 border-blue-600 pb-1 pr-2 font-serif md:text-3xl lg:text-4xl dark:border-b-4 dark:border-yellow-600 dark:text-white">My Delivery Address</h1>

          <!-- Location -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252230.02028974562!2d38.613328040215286!3d8.963479542403238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2sAddis%20Ababa!5e0!3m2!1sen!2set!4v1710567234587!5m2!1sen!2set" class="h-10/12 w-full rounded-lg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
  </div>
</section>
