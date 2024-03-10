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

                <!-- profile  -->
                <div class="py-6 relative">
  
                    <div class="flex md:gap-16 gap-4 max-md:flex-col">
                        <div class="relative md:p-1 rounded-full h-full max-md:w-16 bg-gradient-to-tr from-pink-400 to-pink-600 shadow-md hover:scale-110 duration-500 uk-animation-scale-up">
                            <div class="relative md:w-40 md:h-40 h-16 w-16 rounded-full overflow-hidden md:border-[6px] border-gray-100 shrink-0 dark:border-slate-900"> 
                                <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full absolute object-cover">
                            </div>
                            <button type="button" class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-white shadow p-1.5 rounded-full sm:flex hidden"> <ion-icon name="camera" class="text-2xl"></ion-icon></button>
                        </div>
                        <div class="max-w-2x flex-1">
                            <h3 class="md:text-xl text-base font-semibold text-black dark:text-white"> Monroe Parker </h3>
                              
                            <p class="sm:text-sm text-blue-600 mt-1 font-normal text-xs">@Monroepak</p>
                            
                            <p class="text-sm mt-2 md:font-normal font-light"> I love beauty and emotion. 🥰 I’m passionate about photography and learning. 📚 I explore genres and styles. 🌈 I think photography is storytelling. 📖 I hope you like and feel my photos. 😊</p>

                            <p class="mt-2 space-x-2 text-gray-500 text-sm hidden" style="margin-top: 11px; "><a href="#" class="inline-block">Travel</a> . <a href="#" class="inline-block">Business</a> . <a href="#" class="inline-block">Technolgy</a>  </p>
                            
                            <div class="flex md:items-end justify-between md:mt-8 mt-4 max-md:flex-col gap-4">
                                <div class="flex sm:gap-10 gap-6 sm:text-sm text-xs max-sm:absolute max-sm:top-10 max-sm:left-36">
                                    <div>
                                        <p>Posts</p>
                                        <h3 class="sm:text-xl sm:font-bold mt-1 text-black dark:text-white text-base font-normal">162</h3>
                                    </div>
                                    <div>
                                        <p>Following</p>
                                        <h3 class="sm:text-xl sm:font-bold mt-1 text-black dark:text-white text-base font-normal">14,260</h3>
                                    </div>
                                    <div>
                                        <p>Followers</p>
                                        <h3 class="sm:text-xl sm:font-bold mt-1 text-black dark:text-white text-base font-normal">8,542</h3>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 text-sm">
                                    <button type="submit" class="button text-gray-600 bg-slate-200 hidden">Follow</button>
                                    <button type="button" class="button bg-pink-100 text-pink-600 border border-pink-200">Unfallow</button>
                                    <button type="submit" class="button bg-pink-600 text-white">Message</button>
                                    <div> 
                                        <button type="submit" class="rounded-lg bg-slate-200/60 flex px-2 py-1.5 dark:bg-dark2"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon></button>
                                        <div  class="w-[240px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10"> 
                                            <nav>
                                                <a href="#"> <ion-icon class="text-xl" name="pricetags-outline"></ion-icon> Unfollow </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="time-outline"></ion-icon>  Mute story </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Report </a>  
                                                <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon> Share profile </a>  
                                                <hr>
                                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl" name="stop-circle-outline"></ion-icon>  Block </a>  
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                </div>
 
                <div class="mt-10">

                    <!-- sticky tabs -->

                    <div  uk-sticky="cls-active: bg-slate-100/60 z-30 backdrop-blur-lg px-4 dark:bg-slate-800/60; start: 500; animation: uk-animation-slide-top">
                        
                        <nav class="text-sm text-center text-gray-500 capitalize font-semibold dark:text-white">
                            <ul class="flex gap-2 justify-center border-t dark:border-slate-700" uk-switcher="connect: #story_tab ; animation: uk-animation-fade, uk-animation-slide-left-medium">
                                <li>
                                    <a href="#" class="flex items-center p-4 py-2.5 -mb-px border-t-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-2xl" name="camera-outline"></ion-icon> Gallery  </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-4 py-2.5 -mb-px border-t-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-2xl" name="play-outline"></ion-icon> Reviews </a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div id="story_tab" class="uk-switcher">
                        
                        
                        <!-- Post list -->
                        <div>
                        
                            <!-- hightlets slider post -->

                            <div class="mt-8">

                                <!-- post heading -->
                                <!-- <div class="flex items-center justify-between py-3">
                                    <h1 class="text-xl font-bold text-black dark:text-white">Gallery</h1>

                                    <button type="button" class="lg:hidden">
                                        <svg id="icon__outline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </button>
                                </div> -->

                                <div class="relative mt-5" tabindex="-1" uk-slider="autoplay: true;finite: true">

                                    <div class="overflow-hidden uk-slider-container py-10">
                                    
                                    <ul class="-ml-2 uk-slider-items w-[calc(100%+0.875rem)]" uk-scrollspy="target: > li; cls: uk-animation-slide-right-small; delay: 50" uk-lightbox="">
                                        <!-- <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5 max-lg:hidden" uk-scrollspy-class="uk-animation-fade">
                                            <div class="flex flex-col items-center justify-center rounded-lg h-64 border-2 border-dashed border-teal-600">
                                                <ion-icon name="add-circle" class="text-4xl text-teal-900"></ion-icon>
                                                <div class="mt-1 font-semibold">Add New</div>
                                            </div>
                                        </li>   -->
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <a href="assets/images/avatars/avatar-lg-1.jpg"  data-caption="Caption">
                                                <div class=" lg:hover:scale-105 hover:shadow-lg hover:z-10 duration-500 delay-100">
                                                    <div class="w-full lg:h-64 aspect-[2.5/4] realtive">
                                                        <img src="assets/images/avatars/avatar-lg-1.jpg" class="rounded-lg w-full h-full object-cover inset-0" alt="">
                                                    </div>  
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <a href="assets/images/avatars/avatar-lg-2.jpg"  data-caption="Caption">
                                                <div class=" lg:hover:scale-105 hover:shadow-lg hover:z-10 duration-500 delay-100">
                                                    <div class="w-full lg:h-64 aspect-[2.5/4] realtive">
                                                        <img src="assets/images/avatars/avatar-lg-2.jpg" class="rounded-lg w-full h-full object-cover inset-0" alt="">
                                                    </div>  
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <a href="assets/images/avatars/avatar-lg-3.jpg"  data-caption="Caption">
                                                <div class=" lg:hover:scale-105 hover:shadow-lg hover:z-10 duration-500 delay-100">
                                                    <div class="w-full lg:h-64 aspect-[2.5/4] realtive">
                                                        <img src="assets/images/avatars/avatar-lg-3.jpg" class="rounded-lg w-full h-full object-cover inset-0" alt="">
                                                    </div>  
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <a href="assets/images/avatars/avatar-lg-4.jpg"  data-caption="Caption">
                                                <div class=" lg:hover:scale-105 hover:shadow-lg hover:z-10 duration-500 delay-100">
                                                    <div class="w-full lg:h-64 aspect-[2.5/4] realtive">
                                                        <img src="assets/images/avatars/avatar-lg-4.jpg" class="rounded-lg w-full h-full object-cover inset-0" alt="">
                                                    </div>  
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <a href="assets/images/avatars/avatar-lg-5.jpg"  data-caption="Caption">
                                                <div class=" lg:hover:scale-105 hover:shadow-lg hover:z-10 duration-500 delay-100">
                                                    <div class="w-full lg:h-64 aspect-[2.5/4] realtive">
                                                        <img src="assets/images/avatars/avatar-lg-5.jpg" class="rounded-lg w-full h-full object-cover inset-0" alt="">
                                                    </div>  
                                                </div>
                                            </a>
                                        </li>
                                        <li class="lg:w-1/5 sm:w-1/4 w-1/3 pr-3.5">
                                            <div class="w-full lg:h-64 aspect-[2.5/4] bg-slate-200/60 rounded-lg animate-pulse"></div>
                                        </li>
                                    </ul>
                                
                                    </div>
                                
                                    <button type="button" class="absolute -translate-y-1/2 bg-white rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center shadow  dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                    <button type="button" class="absolute -right-4 -translate-y-1/2 bg-white rounded-full top-1/2 grid w-9 h-9 place-items-center shadow  dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>
                                    
                                </div>

                            </div>


                            <div class="bg-white shadow rounded-md overflow-hidden dark:bg-slate-800" style="margin-bottom: 40px;">
                                <div class="relative border-b dark:border-slate-800">
                                    <ul class="flex gap-2 text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80 -mb-px" uk-switcher="connect: #tabsOne ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                        
                                        <li>
                                            <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-xl max-md:hidden" name="cart-outline"></ion-icon> In-Call Service </a>
                                        </li>

                                        <li>
                                            <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-xl max-md:hidden" name="cloud-download-outline"></ion-icon> Out-Call Service </a>
                                        </li>
                                    
                                    </ul> 
                                </div>

                                <div id="tabsOne" class="uk-switcher text-sm">

                                    <div>

                                        <div class="p-6">
                                            <p class="font-normal"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                        </div>

                                    </div>
                                    <div>

                                        <div class="p-6"> 
                                            <p class="font-normal"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <br>
                            <br>
                            <br>

                        </div>

                        
                        <!-- Reels  list -->
                        <div class="pt-16">
                            
                            <div class="bg-white shadow rounded-md overflow-hidden dark:bg-slate-800">
                                <div class="relative border-b dark:border-slate-800">
                                    <ul class="flex gap-2 text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80 -mb-px" uk-switcher="connect: #tabsOne ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                        <li>
                                            <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-xl max-md:hidden" name="cart-outline"></ion-icon> John Doe </a>
                                        </li>
                                    
                                    </ul> 
                                </div>

                                <div id="tabsOne" class="uk-switcher text-sm">

                                    <div>

                                        <div class="p-6">
                                            <p class="font-normal">11 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <br>

                            <div class="bg-white shadow rounded-md overflow-hidden dark:bg-slate-800">
                                <div class="relative border-b dark:border-slate-800">
                                    <ul class="flex gap-2 text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80 -mb-px" uk-switcher="connect: #tabsOne ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                        <li>
                                            <a href="#" class="flex items-center md:p-4 p-2.5 border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> <ion-icon class="mr-2 text-xl max-md:hidden" name="cart-outline"></ion-icon> John Doe </a>
                                        </li>
                                    
                                    </ul> 
                                </div>

                                <div id="tabsOne" class="uk-switcher text-sm">

                                    <div>

                                        <div class="p-6">
                                            <p class="font-normal">11 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        <div>


                    </div>

                </div>
                
            </div>


        </main>
        
    </div>


 
    
    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 

</body>
</html>