<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>A wedding Planner&#9880;</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.2.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

        <section class="md:h-screen py-36 flex items-center bg-[url('C:\Users\user\Desktop\wedding planner\flower.jpg')] bg-no-repeat bg-center">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="container">
                <div class="flex justify-center">
                    <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                        <a href="index.html"><img src="C:\Users\user\Desktop\WP project\rosee.png" class="mx-auto" alt=""></a>
                        <h5 class="my-6 text-xl font-semibold">Signup</h5>
                        <form action="admin-signup-success.php" method="post" class="text-left">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="RegisterName">Your Name:</label>
                                    <input type="text" name="name" class="form-input mt-3" placeholder="Harry">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input type="email" name="email" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input type="password" name="password" class="form-input mt-3" placeholder="Password:">
                                </div>

                                <div class="mb-4">
                                    <div class="form-checkbox flex items-center mb-0">
                                        <input class="mr-2 border border-inherit w-[14px] h-[14px]" type="checkbox" value="" id="AcceptT&C">
                                        <label class="form-check-label text-slate-400 ms-2" for="AcceptT&C">I Accept <a href="" class="text-primary">Terms And Condition</a></label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <input type="submit" name="submit"class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Register">
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Already have an account ? </span> <a href=".php" class="text-black dark:text-white font-bold">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!--end section -->

        <div class="fixed bottom-3 right-3">
            <a href="" class="back-button btn btn-icon bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>