<!DOCTYPE html>
<html lang="en">
<?php include"head.php"; ?>
<body class="bg-white dark:bg-slate-900">


    <div class="flex flex-col h-screen justify-center items-center">


        <div class="max-w-sm mx-auto md:px-10 p-4 w-full">


            <div>

                <!-- logo -->
                <div class="flex justify-center mb-12">
                    <img src="assets/images/logo.png" alt="" class="w-auto h-16 shrink-0 bg-fuchsia-100 px-3 rounded-2xl p-2.5">
                </div>

                <form method="#" action="#" class="space-y-3">
                    
                    <input class="!w-full" id="username" name="username" type="text" autofocus=""  placeholder="username" required=""> 
                    <input class="!w-full" id="name" name="name" type="text" autofocus=""  placeholder="Full name" required=""> 
                    <input class="!w-full" id="email" name="email" type="email" autofocus=""  placeholder="Email" required=""> 
                    <input class="!w-full" id="password" name="password" type="password" autofocus=""  placeholder="Password" required=""> 

                    <a href="#" class="hidden">
                        <div class="text-sm text-right text-gray-400 py-4"> Forget password </div>
                    </a>

                    <button type="submit" class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150"> <span>Get Started</span> </button>

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> i have account? </span>
                        <span>—</span>
                        <a href="login.php" class="text-gray-600 hover:text-gray-500">Login</a>
                    </div>
 
                </form>

                 
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