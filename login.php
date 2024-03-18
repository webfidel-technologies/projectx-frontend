<!DOCTYPE html>
<html lang="en">
<?php include"head.php"; ?>
<body class="bg-white dark:bg-slate-900">


    <div class="flex flex-col h-screen justify-center items-center">


        <div class="max-w-sm mx-auto md:px-10 p-4 w-full">


            <div uk -scrollspy="target: > * > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

                <!-- logo -->
                <div class="flex justify-center mb-12" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                <img src="custom-images/logo/getbanny-logo.png" alt="" width="100px">
                </div>

                <div style="color: red; text-align: center;" id="errorMessages"></div>
                <div id="waitMessage" style="display: none; text-align: center;">Please wait...</div>

                <form id="loginForm" method="POST" class="space-y-3"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                    
                    <input class="!w-full" id="email" name="email" type="email" autofocus=""  placeholder="Email" required=""> 
                    <input class="!w-full" id="password" name="password" type="password" placeholder="Password" required=""> 

                    <a href="#" class="hidden">
                        <div class="text-sm text-right text-gray-400 py-4"> Forget password </div>
                    </a>

                    <button type="submit" value="Login" class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150"> <span>Sign in</span> </button>
 
                    <!-- <div class="flex gap-3 justify-center text-2xl py-5 text-slate-500">

                        <a href="#"> <ion-icon name="logo-facebook"></ion-icon> </a>
                        <a href="#"> <ion-icon name="logo-google"></ion-icon> </a>
                        <a href="#"> <ion-icon name="logo-apple"></ion-icon> </a> 

                    </div> -->

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> No account? </span>
                        <span>—</span>
                        <a href="register.php" class="text-gray-600 hover:text-gray-500">Join now</a>
                        <br>
                        <br>
                        <a href="home.php" class="text-gray-600 hover:text-gray-500"><< home</a>
                    </div>
 
                </form>
                <script src="custom-js/login.js"></script>

                 
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