<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
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
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="">
                            <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="h-4 w-4"></i></span></span>
                            <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="h-4 w-4"></i></span></span>
                        </a>
                    </li>
            
                    <li class="inline pl-1 mb-0">
                        <a href="https://1.envato.market/techwind" target="_blank">
                            <div class="login-btn-primary"><span class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                            <div class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>

                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html" class="sub-menu-item">Saas <span class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Animation</span></a></li>
                                        <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                        <li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
                                        <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                        <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
                                        <li><a href="index-seo.html" class="sub-menu-item">SEO Agency <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                        <li><a href="index-job.html" class="sub-menu-item">Job</a></li>
                                        <li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
                                        <li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
                                        <li><a href="index-gym.html" class="sub-menu-item">Gym <span class="bg-black dark:bg-slate-50 text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Dark</span></a></li>
                                        <li><a href="index-nft.html" class="sub-menu-item">NFT Marketplace <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
                                        <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                        <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                        <li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
                                        <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate</a></li>
                                        <li><a href="index-event.html" class="sub-menu-item">Event/Conference <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency <span class="bg-black dark:bg-slate-50 text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Dark</span></a></li>
                                        <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                        <li><a href="index-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                        <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                        <li><a href="index-coworking.html" class="sub-menu-item">Co-Woriking</a></li>
                                        <li><a href="index-course.html" class="sub-menu-item">Online Courses <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
                                        <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
                                        <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
                                        <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                        <li><a href="index-service.html" class="sub-menu-item">Service</a></li>
                                        <li><a href="index-food-blog.html" class="sub-menu-item">Food Blog <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                        <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                        <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                        <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                        <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                        <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                        <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                        <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                        <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                        <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                        <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                        <li><a href="nft-creators.html" class="sub-menu-item">Creators</a></li>
                                        <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                        <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                        <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                    </ul> 
                                </li>
                                <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe <span class="bg-amber-500 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">New</span></a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                        <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                        <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                        <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                        <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
                                        <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                        <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Modern Portfolio</li>
                                        <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Classic Portfolio</li>
                                        <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Creative Portfolio</li>
                                        <li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Masonry Portfolio</li>
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Portfolio Detail</li>
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                        <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                        <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                        <li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li>
                
                        <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="md:h-screen flex py-36 w-full items-center  bg-[url('../../assets/images/auth.jpg')] bg-center bg-no-repeat">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="container">
                <div class="lg:flex justify-center mt-12">
                    <div class="lg:w-11/12 bg-white dark:bg-slate-900 rounded-md shadow-lg dark:shadow-gray-800 overflow-hidden">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                            <div class="lg:col-span-7 md:col-span-6">
                                <div class="w-full leading-[0] border-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full lg:h-[540px] md:h-[600px] h-[200px]" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                            <div class="lg:col-span-5 md:col-span-6">
                                <div class="p-6">
                                    <h3 class="mb-6 text-2xl leading-normal font-medium">Let's talk about your portfolio</h3>
                                    <p class="text-slate-400">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="mail" class="w-6 h-6 mr-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Email</h5>
                                            <a href="mailto:contact@example.com" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">contact@example.com</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="phone" class="w-6 h-6 mr-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Phone</h5>
                                            <a href="tel:+152534-468-854" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+152 534-468-854</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mt-6">
                                        <i data-feather="map-pin" class="w-6 h-6 mr-4"></i>
                                        <div class="">
                                            <h5 class="title font-bold mb-0">Location</h5>
                                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="video-play-icon btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 transition duration-500 lightbox">View on Google map</a>
                                        </div>
                                    </div>

                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="flex justify-center text-center p-6 border-t border-gray-100 dark:border-gray-700">
                                    <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

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
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>