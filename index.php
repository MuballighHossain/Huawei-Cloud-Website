<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huawei Cloud Website</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

    <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 lg:pt-2">
      <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between p-4">
          <div class="px-3">
            <img src="./img/huawei.png" alt="" class="w-8 h-8">
          </div>
          <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Huawei Cloud</a>
          <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-2 md:pb-0 md:flex md:justify-end md:flex-row">
          <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://activity.huaweicloud.com/intl/en-us/promotion/index.html">Activities</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/solution/">Solutions</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://id5.cloud.huawei.com/UnifiedIDMPortal/portal/userRegister/regbyemail.html?themeName=red&access_type=offline&clientID=103493351&loginChannel=88000000&loginUrl=https%3A%2F%2Fauth.huaweicloud.com%2Fauthui%2Flogin.html%3Fservice%3Dhttps%253A%252F%252Fwww.huaweicloud.com%252Fintl%252Fen-us%252F%23&casLoginUrl=https%3A%2F%2Fauth.huaweicloud.com%2Fauthui%2FcasLogin&service=https%3A%2F%2Fauth.huaweicloud.com%2Fauthui%2FcasLogin%3Fservice%3Dhttps%253A%252F%252Fwww.huaweicloud.com%252Fintl%252Fen-us%252F&countryCode=bd&scope=https%3A%2F%2Fwww.huawei.com%2Fauth%2Faccount%2Funified.profile+https%3A%2F%2Fwww.huawei.com%2Fauth%2Faccount%2Frisk.idstate&reqClientType=88&state=4d6b2c736052452e99fe2d1e14ea82ee&lang=en-us">Register</a>
          
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
              <span>Products</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
              <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/product/ecs.html">ECS</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="huaweicloud.com/intl/en-us/product/evs.html">EVS</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/product/obs.html">OBS</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/product/eip.html">EIP</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/product/cce.html">CCE</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://www.huaweicloud.com/intl/en-us/product/modelarts.html">ModelArts</a>
              </div>
            </div>
          </div>    
        </nav>
      </div>
    </div>

      <div>
        <!-- Section: Design Block -->
        <section class="mb-40">
          <svg
            data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            preserveAspectRatio="none"
            class="absolute hidden svg lg:block"
            style="height: 560px; width: 100%; z-index: -10; overflow: hidden"
          >
            <defs>
              <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="hsl(217, 102%, 99%)" offset="0%"></stop>
                <stop stop-color="hsl(217,88%, 93%)" offset="100%"></stop>
              </linearGradient>
            </defs>
            <path
              fill="url(#sw-gradient-0)"
              d="M 0.351 264.418 C 0.351 264.418 33.396 268.165 47.112 270.128 C 265.033 301.319 477.487 325.608 614.827 237.124 C 713.575 173.504 692.613 144.116 805.776 87.876 C 942.649 19.853 1317.845 20.149 1440.003 23.965 C 1466.069 24.779 1440.135 24.024 1440.135 24.024 L 1440 0 L 1360 0 C 1280 0 1120 0 960 0 C 800 0 640 0 480 0 C 320 0 160 0 80 0 L 0 0 L 0.351 264.418 Z"
            ></path>
          </svg>

          <div class="px-6 py-12 text-center text-gray-800 lg:my-0 md:px-12 lg:text-left">
            <div class="container mx-auto xl:px-32">
              <div class="flex grid items-center gap-12 lg:grid-cols-2">
                <div class="mt-12 lg:mt-0">
                  <h1 class="mb-12 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">Innovative, Trustworthy, &<br /><span class="text-blue-600">Secure Products & Services</span></h1>
                  <a class="inline-block py-3 mr-2 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md px-7 hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg" data-mdb-ripple="true" data-mdb-ripple-color="light" href="https://www.huaweicloud.com/intl/en-us/" role="button">Get started</a>
                  <a class="inline-block py-3 text-sm font-medium leading-snug text-blue-600 uppercase transition duration-150 ease-in-out bg-transparent rounded px-7 hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200" data-mdb-ripple="true" data-mdb-ripple-color="light" href="https://www.huaweicloud.com/intl/en-us/about/index.html" role="button">Learn more</a>
                </div>
                <div class="mb-12 lg:mb-0">
                  <img
                    src="./img/huawei-cloud-banner.png"
                    class="w-full rounded-lg shadow-lg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
      </div>



    <div class="px-6 py-12 text-center text-gray-800 bg-gray-100 md:px-12 lg:text-left">
      <div class="container mx-auto xl:px-32">
        <div class="flex grid items-center gap-12 lg:grid-cols-2">
          <div class="mt-12 lg:mt-0">
            <h1 class="mb-12 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">The best <br /><span class="text-blue-600">Cloud for your business</span></h1>
            <p class="text-xl text-gray-600">
            Leverage Huawei's over 30 years of technical expertise to protect your applications and data. Fill up the form to get the best Cloud Deals!
            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <div class="block px-6 py-12 bg-white rounded-lg shadow-lg md:px-12">
              <form action="action.php" method="POST" autocomplete="off" id="form">
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="mb-6">
                    <input type="text" name="firstName" id="firstName" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="First name" required/>
                  </div>
                  <div class="mb-6">
                    <input type="text" name="lastName" id="lastName" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Last name" required/>
                  </div>
                </div>
                <input type="email" name="email" id="email" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" required/>
                <input type="tel" name="phone" id="phone" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Phone Number" required/>
                <input type="text" name="message" id="message" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Organization Name & Details" required/>
                
                <div class="flex justify-center mb-6 form-check">
                  <input class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="inline-block text-gray-800 form-check-label" for="flexCheckChecked">
                    Get the best Cloud Offers
                  </label>
                </div>
                <button type="submit" id="send" onclick="popup()" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 mb-6 w-full bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>







<hr class="h-px my-8 bg-gray-300 border-0 ">


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-indigo-600 md:text-5xl xl:text-6xl">ECS</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Elastic Cloud Server (ECS) provides secure, scalable, on-demand compute resources, enabling you to flexibly deploy applications and workloads.</p>
            <a href="https://www.huaweicloud.com/intl/en-us/product/ecs.html" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                View
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="https://www.huaweicloud.com/intl/en-us/pricing/index.html#/ecs" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Pricing
            </a> 
        </div>
        <div class="mt-6 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="./img/ecs.svg" alt="mockup">
        </div>                
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-indigo-600 md:text-5xl xl:text-6xl">RDS</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Quickly deploy and scale RDS for MySQL on the cloud - a fully managed database service powered by the world's most popular enterprise-grade open-source relational database system.</p>
            <a href="https://www.huaweicloud.com/intl/en-us/product/mysql.html" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                View
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="https://www.huaweicloud.com/intl/en-us/pricing/index.html#/rds" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Pricing
            </a> 
        </div>
        <div class="mt-6 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="./img/rds.svg" alt="mockup">
        </div>                
    </div>
</section>


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-indigo-600 md:text-5xl xl:text-6xl">OBS</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Object Storage Service (OBS) provides stable, secure, efficient, and easy-to-use cloud storage that lets you store virtually any volume of unstructured data in any format and access it from anywhere using REST APIs.</p>
            <a href="https://www.huaweicloud.com/intl/en-us/product/obs.html" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                View
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="https://www.huaweicloud.com/intl/en-us/pricing/index.html?/obs#/obs" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Pricing
            </a> 
        </div>
        <div class="mt-6 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="./img/obs.svg" alt="mockup">
        </div>                
    </div>
</section>


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-indigo-600 md:text-5xl xl:text-6xl">CCE</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">A fully hosted Kubernetes service for you to build, run, and scale containerized applications.</p>
            <a href="https://www.huaweicloud.com/intl/en-us/product/cce.html" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                View
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="https://www.huaweicloud.com/intl/en-us/pricing/index.html?tab=detail#/cce" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Pricing
            </a> 
        </div>
        <div class="mt-6 lg:mt-0 lg:col-span-5 lg:flex">
            <img src="./img/cce.svg" alt="mockup">
        </div>                
    </div>
</section>




<div class="bg-gray-50">
    <div class="px-6 py-12 mx-auto max-w-7xl lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Ready to dive in?</span>
            <span class="block text-indigo-600">Start exploring the Cloud today.</span>
        </h2>
        <div class="flex mt-8 lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="https://www.huaweicloud.com/intl/en-us/product/" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700">Products</a>
            </div>
            <div class="inline-flex ml-3 rounded-md shadow">
                <a href="https://www.huaweicloud.com/intl/en-us/solution/" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-600 bg-white border border-transparent rounded-md hover:bg-indigo-50">Solutions</a>
            </div>
        </div>
    </div>
</div>


<hr class="h-px my-8 bg-gray-300 border-0 ">




<section class="bg-white dark:bg-gray-900">
  <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
      <div class="max-w-screen-sm mx-auto mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Our team</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Get connected with the Bangladesh <span class="font-bold text-blue-600">Cloud Team!</span></p>
      </div> 
      <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
         
      <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Alex.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Alex Li Zhifang</a>
              </h3>
              <p>Vice President & Director</p>
              <p class="text-sm text-gray-400">South Asia Cloud Business</p>
              
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Huang.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Huang Weiming</a>
              </h3>
              <p>Head of Marketing and Solution Sales</p>
              <p class="text-sm text-gray-400">weiming.huang@huawei.com</p>
              
          </div>
         
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Sahjahan.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Md Shajahan Ahmed</a>
              </h3>
              <p>Business Developement Manager</p>
              <p class="text-sm text-gray-400">md.shajahan.ahmed@huawei.com</p>
             
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Tonmoy.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Tonmoy Chakraborty</a>
              </h3>
              <p>Business Developement Manager</p>
              <p class="text-sm text-gray-400">tonmoy.chakraborty@huawei.com</p>
              
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/muballigh.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Muballigh Hossain</a>
              </h3>
              <p>Solution Architect</p>
              <p class="text-sm text-gray-400">md.muballigh.bhuyain@huawei.com</p>
             
          </div>
          
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Amrin.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Amrin Jahan</a>
              </h3>
              <p>Business Developement Executive</p>
              <p class="text-sm text-gray-400">amrin.jahan1@huawei.com</p>
              
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Fahim.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">A.N.M.Fahim Faisal</a>
              </h3>
              <p>Business Developement Executive</p>
              <p class="text-sm text-gray-400">ANMFahimFaisal@huawei.com</p>
             
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Farhan.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Farhan Uz Zaman</a>
              </h3>
              <p>Business Developement Executive</p>
              <p class="text-sm text-gray-400">farhan.uz.zaman1@huawei.com</p>
              
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Abir.jpeg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Abir Ebna Harun</a>
              </h3>
              <p>Solution Architect</p>
              <p class="text-sm text-gray-400">abir.ebna.harun@huawei.com</p>
             
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 rounded-full w-36 h-36" src="./img/Ifti.jpg" alt="Leslie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Md Ifte Kharul Alam</a>
              </h3>
              <p>Solution Architect</p>
              <p class="text-sm text-gray-400">md.ifte.alam@huawei.com</p>
              
          </div>
          
          
        
      </div>  
  </div>
</section>

<footer class="text-center text-gray-600 bg-gray-100 lg:text-left">
  <div class="flex items-center justify-center p-6 border-b border-gray-300 lg:justify-between">
    <div class="hidden mr-12 lg:block">
      <span>Get connected with us on social networks:</span>
    </div>
    <div class="flex justify-center">
      <a href="https://www.facebook.com/HuaweiCloud/" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
          class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512">
          <path fill="currentColor"
            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
          </path>
        </svg>
      </a>
      <a href="https://twitter.com/HuaweiCloudAPAC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
          class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor"
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
          </path>
        </svg>
      </a>
      <a href="https://www.huaweicloud.com/intl/en-us/" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
          class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
          <path fill="currentColor"
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
          </path>
        </svg>
      </a>
      <a href="https://www.instagram.com/huaweient/?hl=en" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
          class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor"
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
          </path>
        </svg>
      </a>
      <a href="https://www.linkedin.com/company/huaweicloudapac/" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
          class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512">
          <path fill="currentColor"
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
          </path>
        </svg>
      </a>
      <a href="https://github.com/huaweicloud" class="text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
          class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
          <path fill="currentColor"
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
          </path>
        </svg>
      </a>
    </div>
  </div>
  <div class="py-10 mx-6 text-center md:text-left">
    <div class="grid gap-8 grid-1 md:grid-cols-2 lg:grid-cols-4">
      <div class="">
        <h6 class="flex items-center justify-center mb-4 font-semibold uppercase md:justify-start">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cubes"
            class="w-4 mr-3" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z">
            </path>
          </svg>
          Huawei Cloud
        </h6>
        <p>
        Innovative, Trustworthy, and Secure Products and Services
        </p>
      </div>
      <div class="">
        <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">
          Products
        </h6>
        <p class="mb-4">
          <a href="https://www.huaweicloud.com/intl/en-us/product/ecs.html" class="text-gray-600">ECS</a>
        </p>
        <p class="mb-4">
          <a href="huaweicloud.com/intl/en-us/product/evs.html" class="text-gray-600">EVS</a>
        </p>
        <p class="mb-4">
          <a href="https://www.huaweicloud.com/intl/en-us/product/eip.html" class="text-gray-600">EIP</a>
        </p>
        <p>
          <a href="https://www.huaweicloud.com/intl/en-us/product/obs.html" class="text-gray-600">OBS</a>
        </p>
      </div>
      <div class="">
        <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">
          Useful links
        </h6>
        <p class="mb-4">
          <a href="https://activity.huaweicloud.com/intl/en-us/promotion/index.html" class="text-gray-600">Activities</a>
        </p>
        <p class="mb-4">
          <a href="https://www.huaweicloud.com/intl/en-us/product/" class="text-gray-600">Products</a>
        </p>
        <p class="mb-4">
          <a href="https://www.huaweicloud.com/intl/en-us/solution/" class="text-gray-600">Solutions</a>
        </p>
        <p>
          <a href="https://www.huaweicloud.com/intl/en-us/product/price.html" class="text-gray-600">Pricing</a>
        </p>
      </div>
      <div class="">
        <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="flex items-center justify-center mb-4 md:justify-start">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="currentColor"
              d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
            </path>
          </svg>
          Lotus Kamal Tower II, Gulshan-1
        </p>
        <p class="flex items-center justify-center mb-4 md:justify-start">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
            </path>
          </svg>
          md.shajahan.ahmed@huawei.com
        </p>
        <p class="flex items-center justify-center mb-4 md:justify-start">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
            </path>
          </svg>
          + 880 167 097 2025
        </p>
        <p class="flex items-center justify-center md:justify-start">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print"
            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
            </path>
          </svg>
          + 880-2-8834890
        </p>
      </div>
    </div>
  </div>
  <div class="p-6 text-center bg-gray-200">
    <span>© Developed By:</span>
    <a class="font-semibold text-gray-600" href="https://tailwind-elements.com/">Md Muballigh Hossain Bhuyain</a>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.js"></script>
<script>
  function popup(){
    var FirstName = document.getElementById('firstName');
    var LastName = document.getElementById('lastName');
    var Email = document.getElementById('email');
    var Message = document.getElementById('message');
    var Phone = document.getElementById('phone');  
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');
    if(FirstName.value === '' || LastName.value === '' || Email.value === '' || Phone.value === '' || Message.value === ''){
        alert("Empty Form");
    }
    else{
      alert("Form submitted");  
    }
}
</script>
</body>
</html>