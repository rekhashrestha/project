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
                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
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
                        <a href="" class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="h-4 w-4"></i></a>
                    </li>
            
                    <li class="inline pl-1 mb-0">
                        <a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="h-4 w-4"></i></a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
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
        <section class="relative table w-full py-32 lg:py-40 bg-gray-50 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="text-3xl leading-normal font-medium">Changelog</h3>
                </div><!--end grid-->
            </div><!--end container-->
            
            <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
                <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block">
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="index.html">Techwind</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="">Docs</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Changelog</li>
                </ul>
            </div>
        </section><!--end section-->
        <div class="relative">
            <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="md:flex justify-center">
                    <div class="lg:w-3/4 rounded-md shadow dark:shadow-gray-800 h-fit bg-white dark:bg-slate-900">
                        <div class="p-6">
                            <!-- 1.3.0 Start -->
                            <h5 class="text-xl font-bold">Version <span class="text-emerald-600">1.3.0</span> - 20th July 2022</h5>
                            <ul class="list-none mb-10">
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update Latest <span class="text-black dark:text-white font-semibold mx-1">Tailwind CSS v3.1.6</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">NFT Marketplace</span> (index-nft.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">NFT Market</span> inner page like <span class="text-black dark:text-white font-semibold mx-1">Explore, Collections, Wallet, Creators, Create NFT Item, NFT Detail, & Auction</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">SEO Agency</span> (index-seo.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Online Course</span> (index-course.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">Course</span> inner page like <span class="text-black dark:text-white font-semibold mx-1">Courses Listing & Course detail</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Event & Conference</span> (index-event.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Food Blog</span> (index-food-blog.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">Food Blog</span> inner page like <span class="text-black dark:text-white font-semibold mx-1">Blog detail / Food Recipe</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update <span class="text-black dark:text-white font-semibold mx-1">Gulp File</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update <span class="text-black dark:text-white font-semibold mx-1">package.json</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-sky-500 font-semibold mr-2">Removed : </b> Remove <span class="text-black dark:text-white font-semibold mx-1">postcss.config.js</span></li>
                            </ul>
                            <!-- 1.3.0 Start -->

                            <!-- 1.2.0 Start -->
                            <h5 class="text-xl font-bold">Version <span class="text-emerald-600">1.2.0</span> - 24th June 2022</h5>
                            <ul class="list-none mb-10">
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update Latest <span class="text-black dark:text-white font-semibold mx-1">Tailwind CSS v3.1.4</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">Wow Animation Plugin</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">Animate Animation Plugin</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update Saas (index-saas.html) Demo in <span class="text-black dark:text-white font-semibold mx-1">Animation</span> Mode</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Real Estate</span> (index-real-estate.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add <span class="text-black dark:text-white font-semibold mx-1">Real Estate</span> inner page like <span class="text-black dark:text-white font-semibold mx-1">Listing page</span> and <span class="text-black dark:text-white font-semibold mx-1">Property Detail Page</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Co-working Space</span> (index-coworking.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">Service Provider</span> (index-service.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Add new <span class="text-black dark:text-white font-semibold mx-1">User Profile Pages</span> (user-profile.html) demo</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update <span class="text-black dark:text-white font-semibold mx-1">Gulp File</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Update CSS to <span class="text-black dark:text-white font-semibold mx-1">SASS(SCSS)</span></li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-red-600 font-semibold mr-2">Fixed : </b> Fix some <span class="text-black dark:text-white font-semibold mx-1">CSS</span> issues like, buttons, breadcrumb, and some in HTML pages</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-sky-500 font-semibold mr-2">Removed : </b> Remove some <span class="text-black dark:text-white font-semibold mx-1">External CSS</span> like bg video animation, Kenburn Effect, and etc.</li>
                            </ul>
                            <!-- 1.2.0 Start -->

                            <!-- v1.0 Start -->
                            <h5 class="text-xl font-bold">Version <span class="text-emerald-600">1.1.0</span> - 1st June 2022</h5>
                            <ul class="list-none mb-10">
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-emerald-600 font-semibold mr-2">Added : </b> Added Dark Version</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-red-600 font-semibold mr-2">Fixed : </b> Fixed Back to top buttons and Js</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-amber-500 font-semibold mr-2">Updated : </b> Remove some external css</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-red-600 font-semibold mr-2">Fixed : </b> Fixed some menu issues</li>
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i><b class="text-red-600 font-semibold mr-2">Fixed : </b> Fixed responsive issue in App Landing page</li>
                            </ul>
                            <!-- v1.0 End -->

                            <!-- v1.0 Start -->
                            <h5 class="text-xl font-bold">Version <span class="text-emerald-600">1.0.0</span> - 17th May 2022</h5>
                            <ul class="list-none mb-10">
                                <li class="items-center text-slate-400 my-3 ml-2"><i data-feather="arrow-right-circle" class="h-4 w-4 mr-2 text-indigo-600 inline"></i>Initial Released</li>
                            </ul>
                            <!-- v1.0 End -->

                            <div>
                                <a href="https://1.envato.market/techwind" target="_blank" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div><!--grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="assets/images/logo-light.png" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                        <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-file align-middle" title="customization"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="page-aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                        <li class="mt-[10px]"><a href="page-services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                        <li class="mt-[10px]"><a href="page-team.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                        <li class="mt-[10px]"><a href="page-pricing.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                        <li class="mt-[10px]"><a href="portfolio-creative-four.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                        <li class="mt-[10px]"><a href="blog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                        <li class="mt-[10px]"><a href="auth-login.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="page-terms.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                        <li class="mt-[10px]"><a href="page-privacy.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                        <li class="mt-[10px]"><a href="documentation.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                        <li class="mt-[10px]"><a href="changelog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                        <li class="mt-[10px]"><a href="widget.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Widget</a></li>
                                    </ul>
                                </div><!--end col-->
    
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="foot-subscribe my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input type="email" class="form-input bg-gray-800 border border-gray-800 text-gray-100 pl-12 focus:shadow-none" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" id="submitsubscribe" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="md:text-left text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none md:text-right text-center mt-6 md:mt-0">
                            <li class="inline"><a href=""><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href=""><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

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