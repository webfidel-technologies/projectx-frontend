<!DOCTYPE html>
<html lang="en">

<?php include"head.php"; ?>

<body>


    <div id="wrapper">

        <!-- sidebar -->
        <?php include"sidebar.php"; ?>

        <!-- main contents -->
        <main class="2xl:ml-[--w-side] xl:ml-[--w-side-md] md:ml-[--w-side-small]">

            <div class="main__inner">
                
                <div uk-sticky="cls-active: bg-slate-100/60 z-30 backdrop-blur-lg px-4; start: 80; animation: uk-animation-slide-top">
                
                    <!-- heading title -->
                    <!-- <div class="page__heading">
                        <h3> Models </h3>
                    </div>

                    <div class="overflow-hidden mt-6">

                        <div id="product-nav" class="relative flex items-center justify-between border-b dark:border-slate-800 uk-animation-slide-top-medium">

                            <ul  class="flex gap-2 text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80 -mb-px"  
                                 uk-switcher="connect: #market_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                
                                <li> <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">Trending</a> </li>
                                <li> <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-2xl max-md:hidden" name="cloud-download-outline"></ion-icon> Donwloads</a> </li>
                                
                            </ul> 
     
                            <div class="flex items-center gap-4"> 
                                <button class="flex" uk-toggle="target: #product-nav">
                                    <ion-icon class="text-xl" name="search"></ion-icon> 
                                </button> 
                                <select class="!bg-transparent focus:!border-transparent focus:!ring-transparent max-sm:hidden md:w-40">
                                    <option value="1">Latest</option> 
                                    <option value="3">Popular</option>
                                    <option value="4">Newest</option>
                                </select>
                            </div>
    
                        </div> 

                        <div id="product-nav" class=" w-full  rounded-lg z-30 uk-animation-slide-bottom" hidden>
                            <div class="bg-slate-200 py-2 px-3.5 rounded-md w-full flex items-center gap-3 dark:bg-dark2"> 
                                <button type="submit" class="flex"> <ion-icon class="text-2xl" name="search"></ion-icon></button> 
                                <input type="text" class="!bg-transparent !outline-none !w-full" placeholder="Search">
                                <button class="flex" uk-toggle="target: #product-nav">
                                    <ion-icon class="text-2xl" name="close"></ion-icon> 
                                </button>
                            </div>  
                        </div>

                    </div> -->
                

                    <!-- tab style two .  default this tab is hidden just remove to see style tab 2 -->
                    <div class="relative flex items-center justify-between mt-6 border-b hidden">

                        <!-- tabs -->
                        <ul  class="flex gap-2 text-sm text-center text-gray-600 capitalize font-semibold"  
                             uk-switcher="connect: #market_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                            
                            <li> <a href="#" class="flex items-center px-3 py-3.5 -mb-px border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black"> <ion-icon class="mr-2 text-2xl" name="cart-outline"></ion-icon> My Products</a> </li>
                            <li> <a href="#" class="flex items-center px-3 py-3.5 -mb-px border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black"> <ion-icon class="mr-2 text-2xl" name="cloud-download-outline"></ion-icon> Donwloads</a> </li>
                            <li> <a href="#" class="flex items-center px-3 py-3.5 -mb-px border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black"> <ion-icon class="mr-2 text-2xl" name="add-outline"></ion-icon> Upload</a> </li>
                        
                        </ul> 
 
                        <!-- right button icons -->
                        <div class="flex items-center gap-4"> 
                            <button class="flex" uk-toggle="target: #search-box; cls: hidden">
                                <ion-icon class="text-xl" name="search"></ion-icon> 
                            </button> 
                            <select class="!bg-transparent focus:!border-transparent focus:!ring-transparent md:w-40">
                                <option value="1">Latest</option> 
                                <option value="3">best product</option>
                                <option value="4">Engaged</option>
                            </select>
                        </div>
                         
                        <!-- Search box -->
                        <div class="absolute left-0 -bottom-0.5 w-full hidden ring-4 ring-slate-100 rounded-lg z-30 " id="search-box">
                            <div class="bg-slate-200 py-2 px-3.5 rounded-md w-full flex items-center gap-3"> 
                                <button type="submit" class="flex"> <ion-icon class="text-2xl" name="search"></ion-icon></button> 
                                <input type="text" class="!bg-transparent !outline-none !w-full" placeholder="Search">
                                <button class="flex" uk-toggle="target: #search-box; cls: hidden">
                                    <ion-icon class="text-2xl" name="close"></ion-icon> 
                                </button>
                            </div>  
                        </div>

                    </div> 

                </div>

                <div class="uk-switcher" id="market_tab">

                    <!-- product list -->
                    <div>

                        <!-- category list -->
                        <div class="relative" tabindex="-1" uk-slider="finite: true">

                            <div class="py-6 overflow-hidden uk-slider-container">
                 
                                <ul class="uk-slider-items w-[calc(100%+0.10px)] capitalize text-sm font-semibold">
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Lagos </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Abuja </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Onitsha </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Port-Harcourt </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Ilorin </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Asaba </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Kano </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Owerri </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Aba </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Rivers </a> </li>
                                    <li class="w-auto pr-2.5"> <a href="#" class="px-4 py-2 rounded-lg bg-slate-200 inline-block hover:shadow dark:bg-dark2"> Awka </a> </li>
                                </ul>
                            
                            </div>
                                    
                            <a class="absolute left-0 -translate-y-1/2 top-1/2 flex items-center w-16 h-12 p-2.5 justify-start bg-gradient-to-r from-bgbody via-bgbody" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                            <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-16 h-12 p-2.5 justify-end bg-gradient-to-l from-bgbody via-bgbody" href="#" uk-slider-item="next">  <ion-icon name="chevron-forward" class="text-2xl"></ion-icon> </a>
                        
                        </div>

                        <!-- product list  -->
                        <div id="model-list" class="grid xl:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-3 mt-2"  uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">


                            <script>
                                // API endpoint URL
                                const url = 'https://getbanny-backend.up.railway.app/api/V1/models';

                                // Fetch data from the API
                                async function fetchData() {
                                    try {
                                        const response = await fetch(url);
                                        const data = await response.json();

                                        if (!data) {
                                        console.error("Error decoding JSON data.");
                                        return;
                                        }

                                        // Loop through the users
                                        const userList = data.users.map(user => {
                                        const dob = user.attributes.dob;
                                        const city = user.bios?.city ?? 'N/A'; // Use nullish coalescing operator or logical OR

                                        return `

                                            <!-- single item -->
                                            <div>
                                                <a href="model-view.php?id=${user.user_code}" class="group">
                                                    <div class="relative overflow-hidden rounded-lg">
                                                        <div class="relative w-full md:h-60 h-56 transition-all group-hover:scale-110 duration-300">
                                                            <img src="custom-images/models/model-008.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                        </div> 
                                                        <div class="absolute right-0 top-0 m-2 bg-slate-100 rounded-full py-0.5 px-2 text-sm font-bold dark:bg-slate-800/60"> $12 </div>
                                                    </div> 
                                                </a>
                                                <div class="py-2">
                                                    <h4 class="text-black lg:font-medium mb-0.5 dark:text-white"> ${user.attributes.display_name} </h4>
                                                    <p class="md:text-sm text-xs lg:font-medium text-gray-500 dark:text-white"> by <a href="model-details.php?model_id=${user.user_code}"> ${city} - ${dob} </a> </p>
                                                </div> 
                                            </div>

                                        `;
                                        });

                                        const modelListContainer = document.getElementById('model-list');

                                        // Join the HTML snippets and insert into the container
                                        modelListContainer.innerHTML = userList.join(' ');

                                        
                                    } catch (error) {
                                        console.error('Error:', error);
                                    }

                                    

                                }

                                // Call the fetchData function
                                fetchData();


                            </script>
         


                            <!-- placeholders -->
                            <!-- <div class="w-full lg:h-60 h-full aspect-[3/3] bg-slate-200/60 rounded-lg dark:bg-dark2 animate-pulse"></div>
                            <div class="w-full lg:h-60 h-full aspect-[3/3] bg-slate-200/60 rounded-lg dark:bg-dark2 animate-pulse"></div>
                            <div class="w-full lg:h-60 h-full aspect-[3/3] bg-slate-200/60 rounded-lg dark:bg-dark2 animate-pulse"></div>
                            <div class="w-full lg:h-60 h-full aspect-[3/3] bg-slate-200/60 rounded-lg dark:bg-dark2 animate-pulse"></div> -->

                        </div>

                        <!-- load more -->
                        <div class="flex justify-center my-8">
                            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                        </div>


                    </div>

                    
                    <!-- downloads -->
                    <div>
                        
                        <!-- heading title -->
                        <div class="mt-3 hidden">
                            <a href="#" class="flex items-center gap-1 text-blue-500 font-semibold text-sm lg:-ml-1 mb-1">
                                <ion-icon name="chevron-back-outline"></ion-icon> Back
                            </a>
                            <h2 class="text-2xl font-bold text-black dark:text-white"> Downloads</h1>
                        </div>

                        <div class="bg-white rounded-md shadow mt-6 dark:bg-dark2">
                            
                            <!-- heading -->
                            <div class="p-3 md:px-6 border-b flex md:items-center justify-between dark:border-slate-700 max-md:flex-col gap-3"> 
                                <h3 class="text-base font-semibold text-black dark:text-white">Item Purchased 16</h3> 
                                
                                <div class="flex bg-slate-100 border border-slate-200 p-[1px] rounded-lg dark:bg-dark3 dark:border-slate-700 ml-auto max-md:-mt-10">
                                    <ion-icon name="list-outline" class="text-lg p-2 py-1.5 rounded-md bg-white shadow dark:bg-dark4"></ion-icon>
                                    <ion-icon name="grid-outline" class="text-lg p-2 py-1.5"></ion-icon>
                                </div>
                                <div class="bg-slate-100 rounded-md flex items-center dark:bg-dark3 max-md:w-full">
                                    <ion-icon name="search" class="text-lg ml-2"></ion-icon>
                                    <input type="text" placeholder="Search" class="!h-8 w-full">
                                </div>
                                 
                            </div>

                            <!-- grid list -->
                            <div class="grid lg:grid-cols-2 gap-2 md:p-4"  uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100">

 
                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-3.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Gaming Mouse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">  John Michael </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 
                                         
                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-6.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Abstract art </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">  Jesse Steeve </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-1.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> The Deep Cleanse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">  Jesse Steeve  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-2.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Regency High Gloss </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">  Martin Gray  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-4.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Abstract Minimalism   </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white"> James Lewis  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 
 
                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-3.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Gaming Mouse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white"> John Michael  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-3.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Gaming Mouse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white"> John Michael  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 
                                         
                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-6.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Abstract art </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white"> Jesse Steeve  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-1.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> The Deep Cleanse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white"> Jesse Steeve  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-2.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Regency High Gloss </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">   Martin Gray  </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 

                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-4.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Abstract Minimalism   </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">   James Lewis </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 
 
                                <!-- item -->
                                <div class="flex hover:bg-secondery rounded-md p-2 duration-500">

                                    <!-- image -->
                                    <a href="#product_modal" class="group" uk-toggle="">
                                         <div class="relative overflow-hidden rounded-lg w-20">
                                            <div class="relative w-full h-16">
                                                <img src="assets/images/product/product-3.jpg" alt="" class="object-cover w-full h-full">
                                            </div> 
                                        </div> 
                                    </a>

                                    <!-- description -->
                                    <div class="flex-1 px-4">
                                        <h4 class="text-black font-medium mb-1 dark:text-white"> Gaming Mouse </h4>
                                        <a href="profile.html"><p class="text-sm font-normal text-gray-500 dark:text-white">  John Michael </p></a>
                                    </div>

                                    <!-- download button -->
                                    <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="cloud-download-outline"></ion-icon> </button>
                                    
                                    <!-- dropdown menu -->
                                    <div>
                                        <button type="button" class="hover:bg-secondery w-10 h-10 rounded-full grid place-items-center"> <ion-icon class="text-2xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="albums-outline"></ion-icon>  add to collections </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>  Share </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="trash-outline"></ion-icon> Delete  </a>  
                                            </nav>
                                        </div>
                                    </div>

                                </div> 



                            </div>

                        </div>
                        
                        <!-- load more -->
                        <div class="flex justify-center my-8">
                            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                        </div>
                
                    </div>
                    
                    

                </div>
  

            </div>


        </main>
        
    </div>

 
    <!-- create new product button -->
    <!-- <button type="button" class="fixed bottom-0 right-0 m-10" uk-toggle="target: #create_product" uk-tooltip="title:Add Product ; offset:10">
        <div class="flex items-center justify-center w-14 h-14 bg-sky-500 rounded-full">
            <ion-icon name="add-outline" class="text-white text-3xl"></ion-icon>
        </div>
    </button> -->

    <!-- product modal -->
    <div class="hidden lg:p-20 max-lg:!items-start" id="product_modal" uk-modal="">
        
        <div class="uk-modal-dialog tt relative mx-auto overflow-hidden shadow-xl rounded-lg lg:flex items-center ax-w-[86rem] w-full lg:h-[80vh]">
          
            <!-- image previewer -->
            <div class="lg:h-full lg:w-[calc(100vw-400px)] w-full h-96 flex justify-center items-center relative">
                
                <div class="relative z-10 w-full h-full">
                    <img src="assets/images/product/product-6.jpg" alt="" class="w-full h-full object-cover absolute">
                </div>
  
                <!-- close button -->
                <button type="button"  class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 uk-animation-slide-right-medium z-10 dark:bg-slate-600 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

            <!-- right sidebar -->
            <div class="lg:w-[400px] w-full bg-white h-full relative overflow-y-auto shadow-xl dark:bg-dark2">
                
                <div class="p-6">
 
                    <div class="flex absolute right-2.5 top-4 text-black gap-1">
                        <button class="w-8 h-8 hover:bg-slate-100 rounded-full grid place-items-center"> <ion-icon class="text-xl" uk-tooltip="title: Share; pos: top; offset: 6" name="share-outline"></ion-icon> </button>
                        <button class="w-8 h-8 hover:bg-slate-100 rounded-full grid place-items-center"> <ion-icon class="text-xl" uk-tooltip="title: Save; pos: top; offset: 6" name="bookmarks-outline"></ion-icon> </button>
                    </div>

                    <div>
                        <div class="text-lg font-semibold text-black dark:text-white"> Item Name </div>
                        <p class="font-normal text-sm leading-6 mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, mollitia? Eaque consequuntur asperiores eos  Fugiat ullam </p>
                    </div>

                    <div class="grid grid-cols-2 gap-y-5 gap-3 text-xs font-medium mt-5">
                        <div class="col-span-2 p-3 bg-slate-100 rounded-md space-y-1.5 border"> 
                            <div> Price</div> 
                            <div class="text-3xl font-semibold text-black"> $10 </div>
                        </div>
                        <div class="space-y-1.5"> <div> Views</div> <div class="text-2xl font-semibold text-black dark:text-white"> 1,286 </div></div>
                        <div class="space-y-1.5"> <div> Donwloads</div> <div class="text-2xl font-semibold text-black dark:text-white"> 364 </div></div>
                    </div>

                    <div class="space-y-2 text-sm mt-7"> 
                        <div class="flex items-center gap-3"> <ion-icon class="text-xl" name="tag-outline"></ion-icon> <div class="flex-1"> Category  Landscape  </div> </div>
                        <div class="flex items-center gap-3"> <ion-icon class="text-xl" name="navigate-circle-outline"></ion-icon> <div class="flex-1"> Published   4 days ago  </div> </div>
                        <div class="flex items-center gap-3"> <ion-icon class="text-xl" name="camera-outline"></ion-icon> <div class="flex-1"> Featured in  Editorial  </div> </div>
                        <div class="flex items-center gap-3"> <ion-icon class="text-xl" name="image-outline"></ion-icon> <div class="flex-1"> type  Image </div> </div>
                        <div class="flex items-center gap-3"> <ion-icon class="text-xl" name="shield-checkmark-outline"></ion-icon> <div class="flex-1"> Free to use under  Instello License </div> </div> 
                    </div>

                    <div class="font-medium mt-6 space-y-3">
                        <div class="text-sm"> Seller </div> 
                        <a href="#" class="flex items-center gap-3 mb-4 mt-1">
                            <div class="relative w-8 h-8 shrink-0"> <img src="assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                            <div class="flex-1 min-w-0">
                                <div class="text-sm font-medium text-black dark:text-white">Michel Emard</div>  
                            </div>
                            <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Chat </button>
                        </a> 
                    </div>

                </div>

                

                <div class="absolute bottom-0 w-full p-4"> 
                    <div class="flex gap-2 items-center text-sm ">
                        <a href="#" class="bg-teal-100 rounded-md py-2 text-center flex-1 flex items-center justify-center gap-2 text-teal-500 font-semibold"> <ion-icon class="text-2xl" name="cart-outline"></ion-icon> Buy</a>
                        <a href="#" class="bg-red-100 rounded-md py-2 text-center px-3 flex"> <ion-icon class="text-2xl text-red-500" name="heart"></ion-icon> </a>
                    </div>
                </div>

            </div>
   
        </div>
        
    </div>

    <!-- create product modal -->
    <div class="hidden lg:p-20 max-lg:!items-start" id="create_product" uk-modal="">
        
        <div class="uk-modal-dialog tt relative mx-auto bg-white shadow-xl rounded-lg max-lg:w-full dark:bg-dark2">

            <!-- header card -->
            <div class="border-b px-3 py-3 text-center relative dark:border-slate-700/60">

                <h4 class="text-sm text-black dark:text-white"> Create new post</h4>
 
                <!-- close button -->
                <button type="button" class="button__ico absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
          
            <div class="lg:w-[600px] w-full">  

                <div class="relative" tabindex="-1" uk-slideshow="finite: true;animation: Fade;  min-height: 460;animation:fade">

                    <ul class="uk-slideshow-items"> 
                        
                        <!-- Intro -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-4 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">
                                
                                <div>
                                    <svg class="text-gray-600 dark:text-white" color="#262626" fill="#262626" height="77" role="img" viewBox="0 0 97.6 77.3" width="96"><path d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z" fill="currentColor"></path><path d="M84.7 18.4 58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z" fill="currentColor"></path><path d="M78.2 41.6 61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z" fill="currentColor"></path></svg>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Sell Premium Photes</h3>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <p class="text-sm text-center max-w-sm">You can earn money by selling high-quality photos and share them with your friends who are interested</p>
                                </div>
                                <div uk-scrollspy-class="uk-animation-slide-top-small">
                                    <button type="button" class="bg-blue-600 text-white rounded-lg py-1.5 px-4 text-sm mt-2 dark:bg-slate-700" uk-slideshow-item="next"> Start selling </button>
                                </div>

                            </div>

                        </li>

                        
                        <!-- about -->
                        <li class="w-full">

                            <div>

                                <div class="p-8 space-y-4 font-normal text-sm">
    
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Title </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="name" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-start gap-16 justify-between">
                                        <label class="md:w-32"> Description </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <textarea class="w-full" rows="4" placeholder="Product Description.."></textarea>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Price </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="number" placeholder="$12" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Category </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Tags </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="Landscape,Arts" class=" w-full">
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>

                        </li>

                        <!-- add image -->
                        <li class="w-full">

                            <div class="p-8" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="relative w-full h-[395px] border1 rounded-lg overflow-hidden bg-[url('../images/ad_pattern.png')] bg-repeat">
                                
                                    <label for="createProductUrl" class="flex flex-col justify-center items-center absolute -translate-x-1/2 left-1/2 bottom-0 z-10 w-full pb-6 pt-10 cursor-pointer bg-gradient-to-t from-gray-700/60">
                                        <input id="createProductUrl" type="file" class="hidden" />
                                        <ion-icon name="image" class="text-3xl text-teal-600"></ion-icon>
                                        <span class="text-white mt-2">Upload image </span>
                                    </label>
            
                                    <img id="createProductImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;" class="w-full h-full absolute object-cover">
            
                                </div> 

                            </div>

                        </li> 

                        <!-- settings -->
                        <li class="w-full !relative">
                           
                            <div  class="lg:!h-[460px] overflow-y-auto">

                                <div uk-scrollspy="target: > * >; cls: uk-animation-slide-bottom-small; delay: 100">
                
                                    <div class="p-6">
  

                                        <ul class="divide-y divide-gray-100 font-normal text-sm dark:divide-slate-700/60" uk-nav="multiple: true">
                                            <li class="uk-parent uk-open py-3">

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group" aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white">Settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="m-4 space-y-3">
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Buy ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Comment ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </li>
                                            
                                            <li class="uk-parent uk-open py-3"> 

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group " aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white"> Advanced settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="divide-y bg-secondery rounded-md dark:divide-slate-700/60"> 
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Generate license keys</h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Redirect customers after purchase?</h4>
                                                                </div>
                                                                <input type="checkbox"><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Turn off commenting </h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div>  
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                            
                                        </ul>
     
                                        <div class="flex justify-center p-6 pt-0 hidden">
                                            <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>

                        </li>
                             
                        <!-- final steop -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-6 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="text-center">
                                    <ion-icon name="sparkles-sharp" class="text-5xl mb-6 text-blue-600 opacity-60 rotate-12"></ion-icon>
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Almost Done </h3>
                                </div>
                                
                                <div class="font-medium text-sm">
                                    <div>
                                        <label class="flex justify-center max-w-sm mx-auto text-center">
                                          <input class="rounded mt-1" type="checkbox" checked name="checkbox1" value="3" />
                                          <span class="ml-3"> I agree this product is mine and i take resposibilty of this product for selling </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-center p-6 pt-0">
                                    <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                </div>

                            </div>

                        </li> 


                    </ul>

                    <div class="flex  justify-center py-1.5 border-t relative dark:border-slate-700/60">

                        <button type="button" uk-slideshow-item="previous" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute left-4 bottom-3 leading-6 uk-animation-slide-left-small">Previews</button>

                        <ul class="inline-flex flex-wrap justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>

                        <button type="button" uk-slideshow-item="next" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute right-4 bottom-3 leading-6 uk-animation-slide-right-small">Next</button>

                    </div> 

                </div>

            </div>
   
        </div>
        
    </div>

    
    <!-- create post modal -->
    <div class="hidden lg:p-20 max-lg:!items-start" id="create-post" uk-modal="">
        
        <div class="uk-modal-dialog tt relative mx-auto bg-white shadow-xl rounded-lg max-lg:w-full dark:bg-dark2">

            <!-- This is a switcher for multiple tabs. Each switcher tab should have the same number of tabs. https://getuikit.com/docs/switcher-->
            <ul class="hidden" uk-switcher="connect: .posTabs">

                <!-- tab 1 -->
                <li><a href="#">...</a></li>

                <!-- tab 2 -->
                <li><a href="#">...</a></li>

                <!-- tab 3 -->
                <li><a href="#">...</a></li>

            </ul>
 
            <!-- card header -->
            <ul class="uk-switcher posTabs p-3.5 border-b text-center text-sm font-semibold text-black dark:text-white dark:border-slate-700">
                
                <!-- tab 1 -->
                <li> 
                    <div> Upload Photo</div> 
                    <a href="#" class="absolute top-0 m-3 right-1 text-blue-600"  uk-switcher-item="next"> Next</a>
                </li>

                <!-- tab 2 -->
                <li> 
                    <a href="#" class="absolute top-0 m-3.5 left-0" uk-switcher-item="previous"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg>
                    </a>
                    <div> Filter Your Photo </div>
                    <a href="#" class="absolute top-0 m-3.5 right-1 text-blue-600"  uk-switcher-item="next"> Next</a>
                </li>

                <!-- tab 3 -->
                <li>
                    <a href="#" class="absolute top-0 m-3.5 left-0" uk-switcher-item="previous"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg>
                    </a>
                    <div> Premission Photo </div>

                    <!-- submit button -->
                    <button type="button" class="text-white bg-blue-600 rounded-lg py-1.5 px-5 text-sm absolute top-0 m-2.5 right-0 uk-animation-slide-right-small"> Share </button>
                </li>

            </ul>

            <div class="lg:inline-flex">

                <!-- photo upload -->
                <div class="lg:w-[600px] w-full">  

                    <div class="w-full lg:h-[600px] h-80 relative overflow-hidden flex justify-center items-center">
                                
                        <label for="addPostUrl" class="w-full h-full absolute inset-0 z-10 hover: cursor-pointer">
                            <input id="addPostUrl" type="file" class="hidden" />
                        </label>

                        <div  class="space-y-4 absolute flex flex-col justify-center" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                            <div  uk-scrollspy-class="uk-animation-scale-up">
                                <svg class="mx-auto text-gray-600 dark:text-white"  width="96" height="77" role="img" viewBox="0 0 97.6 77.3"><path d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z" fill="currentColor"></path><path d="M84.7 18.4 58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z" fill="currentColor"></path><path d="M78.2 41.6 61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z" fill="currentColor"></path></svg>
                            </div> 
                            <div class=" mx-auto" uk-scrollspy-class="uk-animation-slide-bottom-small">
                                <button type="button" class="text-white bg-blue-600 rounded-lg py-1.5 px-4 text-sm dark:bg-white/5"> Select forom the Computer</button>
                            </div>

                        </div>

                        <img id="addPostImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;" class="w-full h-full absolute object-cover fff">

                    </div> 


                </div>

                <!-- right sidebar -->
                <div class="relative w-auto border-l dark:border-slate-700">

                    <ul class="uk-switcher posTabs">
                          
                        <!-- tab 1 -->
                        <li>  </li>
                        
                        <!-- tab 2 Filter Your Photo-->
                        <li> 
                            
                            <div class="lg:w-[300px] lg:max-h-[600px] overflow-y-auto before:uk-animation-slide-right-small">

                                <div class="p-3.5">

                                    <!-- tabs -->
                                    <ul class="flex p-0.5 text-center text-xs font-medium text-gray-700 border rounded-md bg-slate-100 dark:text-white dark:border-slate-700 dark:bg-white/5" uk-switcher>
                                        <li class="flex-1"> <a href="#" class="block px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-white/10">Filters</a></li>
                                        <li class="flex-1"> <a href="#" class="block px-4 py-1.5 rounded-md aria-expanded:bg-white aria-expanded:shadow aria-expanded:dark:bg-white/10">Adjustments</a></li> 
                                    </ul>
                 
                                    <div class="uk-switcher">

                                        <!-- filter slider -->
                                        <div class="space-y-8 py-6 p-1 text-sm font-medium text-gray-700 dark:text-gray-200"> 
     
                                            <div>
                                                <label for="range1" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range1"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>     
                                            <div>
                                                <label for="range2" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range2"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>   
                                            <div>
                                                <label for="range3" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range3"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>   
                                            <div>
                                                <label for="range4" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range4"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>   
                                            <div>
                                                <label for="range5" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range5"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>
                                            <div>
                                                <label for="range6" class="mb-2 inline-block"> Example range </label>
                                                <input type="range" min="0"  max="6" id="range6"  class="transparent h-1.5 mt-4 w-full cursor-pointer appearance-none rounded-lg border-transparent bg-slate-100 dark:bg-slate-700"/>
                                            </div>                                                          
                                                                                                                         
                                        </div> 

                                        <!-- image effect list -->
                                        <div> 
    
                                            <div class="grid grid-cols-3 gap-4 mt-3 text-xs text-center font-light" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 50;repeat:true">
                
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: brightness-125">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover brightness-125">
                                                    </div>
                                                    <span class="block mt-2">Brightness</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: contrast-150">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover contrast-150">
                                                    </div>
                                                    <span class="block mt-2">Contrast</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: grayscale">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover grayscale">
                                                    </div>
                                                    <span class="block mt-2">Grayscale</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: hue-rotate-60">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover hue-rotate-90">
                                                    </div>
                                                    <span class="block mt-2">Hue</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: invert">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover invert">
                                                    </div>
                                                    <span class="block mt-2">Invert</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: saturate-150">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover saturate-150">
                                                    </div>
                                                    <span class="block mt-2">Saturate</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: sepia">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover sepia">
                                                    </div>
                                                    <span class="block mt-2">Sepia</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: brightness-125">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover brightness-125">
                                                    </div>
                                                    <span class="block mt-2">Brightness</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: grayscale">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover contrast">
                                                    </div>
                                                    <span class="block mt-2">Contrast</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: grayscale">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover grayscale">
                                                    </div>
                                                    <span class="block mt-2">Grayscale</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: hue-rotate-60">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover hue-rotate-60">
                                                    </div>
                                                    <span class="block mt-2">Hue</span>
                                                </div>
                                                <div class="group cursor-pointer" uk-toggle="target: #addPostImage; cls: invert">
                                                    <div class="group-hover:ring-2 ring-blue-600 ring-offset-4 duration-500 rounded dark:ring-offset-slate-800">
                                                        <img src="assets/images/affect.jpg" alt="" class="rounded w-full h-20 object-cover invert">
                                                    </div>
                                                    <span class="block mt-2">Invert</span>
                                                </div>

                                            </div>
    
                                        </div>
                                        
                                    </div> 

                                </div>
             
                            </div>
                            
                        </li>
                       
                        <!-- tab 3 Premission Photo-->
                        <li> 
                            
                            <div class="lg:w-[300px] lg:max-h-[600px] overflow-y-auto uk-animation-fade">

                                <textarea name="" id=""  rows="4" placeholder="What is going on.." class="w-full !p-4 !rounded-none"></textarea>
            
                                <ul class="divide-y divide-gray-100 dark:divide-slate-700" uk-nav="multiple: true">
          
                                    <li>

                                        <div class="flex items-center justify-between py-2 px-3.5">
                                            <input type="text" placeholder="Add locations" class="font-medium text-sm w-full !bg-transparent !px-0 focus:!border-transparent focus:!ring-transparent"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </div>

                                    </li>

                                    <li class="uk-parent uk-open"> 
                                        <a href="#" class="flex items-center justify-between py-2 px-3.5 group " aria-expanded="true"> 
                                            <h4 class="font-medium text-sm"> Accessibility</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </a>
                                        <ul class="-space-y-1">
                                            <li>
                                                <div class="p-4">
                                                    <p class="text-[13px] font-light">  Alt text helps people with visual impairments understand your photos. You can either write your own alt text or let it be created automatically for your photos. </p>
                                                    <input type="text" placeholder="Write alt text.." class="w-full mt-3">
                                                </div> 
                                            </li> 
                                        </ul>
                                        
                                    </li> 
                                    
                                    <li class="uk-parent uk-open"> 
                                        <a href="#" class="flex items-center justify-between py-2 px-3.5 group " aria-expanded="true"> 
                                            <h4 class="font-medium text-sm"> Advanced settings</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </a>
                                        <ul class="-space-y-2">
                                            <li>
                                                <div class="p-4">
                                                    <label class="switch flex justify-between items-start gap-4 cursor-pointer min-h-[30px]">
                                                        <div>
                                                            <h4 class="font-medium text-sm"> Hide like and view counts on this post</h4>
                                                        </div>
                                                        <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                    </label>
                                                    <div> 
                                                        <p class="text-[13px] font-light mt-1.5"> Only you will see the total number of likes and views on this post. You can change this later by going to the ··· menu at the top of the post. To hide like counts on other people's posts, go to your account settings. <a href="#"> Learn more</a>.</p>
                                                    </div> 
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="p-4">
                                                    <label class="switch flex justify-between items-start gap-4 cursor-pointer min-h-[30px]">
                                                        <div>
                                                            <h4 class="font-medium text-sm"> Turn off commenting </h4>
                                                        </div>
                                                        <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                    </label>
                                                    <div> 
                                                        <p class="text-[13px] font-light mt-1.5"> You can change this later by going to the menu at the top of your post.</p>
                                                    </div> 
                                                </div>  
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                </ul>
             
                            </div>
 
                        </li>

                    </ul>

                </div>

            </div>
        
        </div>

    </div>
 
    
    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 

</body>
</html>