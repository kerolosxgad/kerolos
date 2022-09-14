<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kerolos Gad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <!--Navbar-->
    <nav class="relative container mx-auto p-6">
      <!--Flex Container-->
      <div class="flex items-center justify-between">
        <!--Logo-->
        <div class="pt-2">
          <img src="{{ asset('img/logo.svg') }}" alt="Logo">
        </div>
        <!--Menu Items-->
        <div class="hidden space-x-6 md:flex">
          <a href="#" class="hover:text-darkGrayishBlue">Pricing</a>
          <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
          <a href="#" class="hover:text-darkGrayishBlue">Product</a>
          <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
          <a href="#" class="hover:text-darkGrayishBlue">Contact</a>
        </div>
        <a href="#" class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">Get Started</a>
      </div>
    </nav>
    <!--Hero ٍSection-->
    <section id="hero">
      <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <!--Left Item-->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
          <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
            Bring everyone together to build better products.
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Manage makes it simple for software teams to plan day-to-day tasks while keeping the larger team goals in view.
          </p>
          <div class="flex justify-center md:justify-start">
              <a href="#" class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Get Started</a>
          </div>
        </div>
        <!--Right Item-->
        <div class="md:w-1/2">
          <img src="{{ asset('img/illustration-intro.svg') }}" alt="Hero Image">
        </div>
    </section>
  </body>
</html>