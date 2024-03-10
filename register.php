<!DOCTYPE html>
<html lang="en">
<?php include"head.php"; ?>
<body class="bg-white dark:bg-slate-900">


    <div class="flex flex-col h-screen justify-center items-center">


        <div class="max-w-sm mx-auto md:px-10 p-4 w-full">


            <div>

                <!-- logo -->
                <div class="flex justify-center mb-12">
                    <img src="custom-images/logo/getbanny-logo.png" alt="" width="100px">
                </div>

                <div style="color: red; text-align: center;" id="errorMessages"></div>
                <div id="waitMessage" style="display: none; text-align: center;">Please wait...</div>

                <form id="registrationForm" method="POST" class="space-y-3">
                    
                    <input class="!w-full" id="display_name" name="display_name" type="text"  placeholder="username" required=""> 
                    <input class="!w-full" id="email" name="email" type="email" placeholder="Email" required="">
                    <input class="!w-full" id="phone_number" name="phone_number" type="tel" placeholder="Phone number" required="">
                    <input class="!w-full" id="dob" name="dob" type="text" placeholder="Age" required="">

                    <select class="!w-full" name="gender" id="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>						
                    </select>

                    <input class="!w-full" id="password" name="password" type="password" placeholder="Password" required=""> 

                    <button type="submit"  value="Register" class="font-medium w-full rounded-lg bg-slate-900 py-1.5 px-4 text-white h-[38px] active:scale-[0.97] transition-all duration-150"> <span>Get Started</span> </button>

                    <div class="space-x-2 text-sm text-center text-slate-400 dark:text-white/70">
                        <span> i have account? </span>
                        <span>—</span>
                        <a href="login.php" class="text-gray-600 hover:text-gray-500">Login</a>
                    </div>
 
                </form>
                <script src="custom-js/register.js"></script>

                 
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