<?php

/**
 * 
 *  @file: index.php
 * 
 *  @purpose: This is the main file that will be called by the web server.
 * 
 */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- seo and keywords -->
    <meta name="description" content="Oliver Shwaba web developer portfolio">

    <!-- assets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/css/all.css" />
    <link rel="stylesheet" href="/assets/lib/fontawesome/css/all.css" />
    <script src="/assets/js/main.js"></script>

    <title> Hello, Welcome to my portfolio </title>
</head>

<body>

    <!-- container nav bar  -->

    <div class="container mx-auto m-0 bg-white shadow-lg w-full">
        <nav class=" flex items-center justify-between flex-wrap p-6 shadow-md">

            <div class="block items-center flex-shrink-0 text-black mr-6">

                <div class="block items-center text-center">
                    <img src="./assets//images/logo/oliver shwaba-logos_black.png" alt="logo" width='200px'
                        height='200px' class='p-0' />
                </div>
            </div>

            <div class="w-full flex-grow items-end lg:flex lg:items-end lg:w-auto">
                <div class="mx-auto font-extrabold text-2xl">
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-500  mr-4">
                        <span class="bi bi-house m-2"></span>
                        <span class="m-2">Home</span>
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-500  mr-4">
                        <span class="fa-solid fa-code m-2"></span>
                        <span class="m-2">Skills</span>
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-500  mr-4">
                        <span class="fa-solid fa-user-tie m-2"></span>

                        <span class="m-2">Projects</span>
                    </a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-blue-500  mr-4">
                        <span class="fa-solid fa-at m-2"></span>

                        <span class="m-2">Contact</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>



    <!-- hero section for the web application  -->

    <div class="container grid grid-flow-row gap-5 m-0 h-screen bg-indigo-50 opacity-90 shadow-md border border-slate-300  mx-auto">

        <div class="flex flex-row  p-12 mt-32 ">

            <div class="flex-1">
                <h1 class="text font-bold text-7xl text-blue-700 kingdom" id="main-caption"> HI </h1>

                <p class="text-2xl font-semibold text-slate-900 mt-6 w-auto">
                    I'm a software developer with a passion for creating modern digital solutions for <br />
                    <b> YOU </b> to reach your target audience with a atheistically pleasing, and functional digital
                    assets.
                </p>

                <p class="text-2xl font-semibold text-slate-900 mt-6 w-auto" id="idea-text">
                    
                </p>
                <!-- make a colored circle div-->
                <button class="block mt-4 button-56 mx-auto p-10" role="button"> Let's Talk </button>

                <div class='p-3 mt-6 rounded-lg'>
                    <div class="flex flex-cols justify-center align-middle">
                        <div
                            class="bg-blue-500 hover:bg-blue-800 hover:cursor-pointer opacity-80 p-6 ml-4 mr-4 rounded-full shadow-md">
                            <span class='bubble-text'> Projects </span>
                        </div>
                        <div
                            class="bg-green-500 hover:bg-green-800 hover:cursor-pointer opacity-80 p-6 ml-4 mr-4 rounded-full shadow-md">
                            <span class='bubble-text'> Skills </span>
                        </div>
                        <div
                            class="bg-red-500 hover:bg-red-800  hover:cursor-pointer opacity-80 p-6 ml-4 mr-4 rounded-full shadow-md">
                            <span class='bubble-text'> Contact </span>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <div class="bg-teal-600 opacity-60 rounded-full p-12 -z-10 absolute m-2  shadow-custom rotation-ball">
                </div>
                <div
                    class="bg-emerald-600 opacity-60 rounded-md  p-12 -z-10 absolute ml-40 m-8  shadow-custom rotation-ball">
                </div>
                <div
                    class="bg-pink-600 opacity-60 r rounded-full p-12 -z-10 absolute  m-10 mt-40  shadow-custom rotation-ball">
                </div>
                <img src="./assets/images/svg/code-screen.svg" alt="Me" class="w-auto h-auto" />
            </div>
        </div>
    </div>





    <div class="container  mt-12 bg-whit mx-auto">
        <div class="flex flex-col lg:flex-row mx-auto">
            <div class="columns-1 p-10 text-center xl:text-left">
                <h1 class="text font-extrabold text-4xl text-blue-700">Why?</h1>
                <p class="text-xl font-semibold text-slate-800 mt-4">
                    Let me tell you a little about my self, 
                    and what i find important 
                    during the development process. <br/>
                    Digital operations are important its your business. 
                </p>

            </div>
        </div>
    </div>



    <!-- some of the skills i have required skills  -->
    <div class="container grid grid-flow-col mt-10 mx-auto">

        <div class="flex flex-col lg:flex-row mx-auto gap-6 p-6">

            <!-- user is always first card !-->
            <div class='p-8 text-center bg-white rounded-lg shadow-lg border border-slate-200'>
                <div>
                    <img src='/assets/images/svg/brain-bulb.svg' alt='brain-bulb' class='w-60 h-60 mx-auto' />
                </div>


                <section class='mt-20 p-2'>
                    <h2 class="text-xl font-extrabold text-blue-900"> The User is always first </h2>

                    <p class='text-lg font-semibold text-slate-700 mt-4 w-80'>
                        When I start a project.
                        I think about the user and think of the problem from the perspective of the user.
                        Not everyone is technical, I try to make the experience as friendly as possible.
                    </p>
                </section>
            </div>


            <!-- reusseable code card !-->
            <div class='p-8 text-center bg-white rounded-lg shadow-lg border border-slate-200'>
                <div>
                    <img src='/assets/images/svg/Coding.svg' alt='computer screen image' class='w-60 h-60 mx-auto' />
                </div>

                <section class='mt-20 p-2'>
                    <h2 class="text-xl font-extrabold text-blue-800"> Re-useable code </h2>

                    <p class='text-lg font-semibold text-slate-700 mt-4 w-80'>
                        When i write software I try to make it reusable
                        and easy to understand. I follow a modular approach, to make it easy to maintain. and very
                        approachable in the future.
                    </p>

                </section>
            </div>


            <!-- always learning code !-->
            <div class='p-8 text-center bg-white rounded-lg shadow-lg border border-slate-200'>
                <div>
                    <img src='/assets/images/svg/books.svg' alt='computer screen image' class='w-60 h-60 mx-auto' />
                </div>

                <section class='mt-20 p-2'>
                    <h2 class="text-xl font-extrabold text-blue-800"> Always Learning </h2>

                    <p class='text-lg font-semibold text-slate-700 mt-4 w-80'>
                        To challenge myself to solve problems I have never encountered before (always exceeding
                        expectations to be satisfied with my own performance),
                        and to share my knowledge with others along the way.
                    </p>

                </section>
            </div>


        </div>
    </div>


    <div class="container  mt-12 bg-white mx-auto">
        <div class="flex flex-col lg:flex-row mx-auto">
            <div class="columns-1 p-10 text-center mx-auto">
                <h1 class="text font-extrabold text-4xl text-blue-700 mt-10">What do i know?</h1>
                <h2 class="text-lg font-extrabold text-slate-700 mt-4">
                    Let's face it the digital technologies are growing rapidly and growing in  complexity as we speak, <br/>
                     we never will know everything.
                </h2>

              

                <div class="mx-auto">
                    <img src="./assets//images/svg/brianstorm.svg" alt="Me" class="w-auto h-auto mx-auto" />
                </div>
                <p class="text-xl font-semibold text-slate-800 mt-4">
                    How would I help your team you may ask? I'll elaborate  <br />
                    Better yet, why don't I show you what I can do.
                </p>

                <h2 class="text-2xl font-extrabold text-blue-500 mt-10">
                   <!-- font awesome animated icon arrow down -->
                    <i class="fa fa-arrow-down fa-5x fa-beat"></i>
                </h2>   <br />

            </div>
        </div>
    </div>


    <div class="'container grid grid-flow-col mt-10 gap-6 h-auto p-10 mx-auto" id="half">
     

        <div class="flex flex-col lg:flex-row lg:flex bg-white shadow-lg border border-slate-500  mx-auto rounded-lg justify-start align-baseline gap-3 p-6 mt-10 " id="frontend-panel">

                <div class="flex-1">
                    <h1 class="text-3xl font-extrabold mt-10 text-blue-900">
                        <span class="text-blue-700">Frontend</span>
                    </h1>   
                

                <ul class="flex mx-auto font-semibold text-slate-900 mt-4 rounded-md">

                    <li class="m-3">
                        <i class="fab fa-html5 fa-4x font-bold text-red-500"></i>
                        <span> HTML </span>
                    </li>

                    <li class="m-3">
                        <i class="fab fa-css3-alt fa-4x font-bold text-blue-500"></i>
                        <span> CSS3 </span>
                    </li>
                    <!-- scss -->
                    <li class="m-3">
                        <i class="fab fa-sass fa-4x font-bold text-pink-600"></i>
                        <span> Sass </span>
                    </li>
                    <!-- js -->
                    <li class="m-3">
                        <i class="fab fa-js fa-4x font-bold text-yellow-500"
                            style="text-shadow: 1px 0px 1px rgba(0, 0, 0, 0.345);"></i>
                        <span> JavaScript </span>
                    </li>

                </ul>
                
                <p class="text-sm font-semibold text-slate-700 mt-4 w-80">
                    I have experience with the following front end technologies 
                </p>
            </div>
           

            <div class="flex-1">
                <h1 class="text-3xl font-extrabold mt-10 text-blue-900">
                    <span class="text-blue-700">Backend</span>
                </h1>  
              

                <ul class="inline-flex mx-auto font-semibold text-slate-900 mt-4 rounded-md">
                    <li class='m-3'>
                        <i class="fab fa-php fa-4x font-bold text-indigo-800"></i>
                        <span> PHP </span>
                    </li>
                    <!-- mysql -->
                    <li class='m-3'>
                        <i class="fa-solid fa-database fa-4x font-bold text-yellow-400"
                            style="text-shadow: 1px 0px 1px rgba(0, 0, 0, 0.309);"></i>
                        <span> MySQL </span>
                    </li>
                </ul>

                <p class="text-sm font-semibold text-slate-700 mt-4 w-80">
                    I have experience with the following backend technologies
                </p>
            </div> 
        

        <div class="flex flex-col lg:flex-row opacity-80 bg-white shadow-lg border border-slate-500  mx-auto rounded-lg justify-start align-baseline gap-3 p-6 " id="tools-panel">
            <div class="flex-1">
                <h1 class="text-3xl font-extrabold mt-10 text-blue-900">
                    <span class="text-blue-700">Tools</span>
                </h1> 
             
                <ul class="inline-flex mx-auto font-semibold text-slate-900 mt-4 rounded-md">
                    <li class='m-3'>
                        <i class="fab fa-git-alt fa-4x font-bold text-green-500"></i>
                        <span> Git </span>
                    </li>
                    <!-- npm -->
                    <li class='m-3'>
                        <i class="fab fa-npm fa-4x font-bold text-blue-500"></i>
                        <span> npm </span>
                    </li>
                    
                </ul>
                <p class="text-sm font-semibold text-slate-700 mt-4 w-80">
                    I have experience with the following tools
                </p>
            </div> 
        
            <div class="flex-1">
                <h1 class="text-3xl font-extrabold mt-10 text-blue-900">
                    <span class="text-blue-700">FrameWorks</span>
                </h1>
          
                <ul class="flex mx-auto font-semibold text-slate-900 mt-4 rounded-md">
                    <li class='m-3'>
                        <i class="fab fa-react fa-4x font-bold text-blue-500"></i>
                        <span> React </span>
                    </li>
                    <li class="m-3">
                        <i class="fab fa-laravel fa-4x font-bold text-red-500"></i>
                        <span> Laravel </span>
                    </li>
                </ul>
                <p class="text-sm font-semibold text-slate-700 mt-4 w-80">
                    I have experience with the following frameworks
                </p>  
            
            </div>
              
        </div>  
    </div>
</div>  


    <!-- projects -->

    <div class="container grid grid-flow-col mt-10 gap-6 h-auto mx-auto">
        <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
            <div class="flex-1 text-center">
                <h1 class="text-5xl font-extrabold mt-10 text-blue-900">
                    
                    <span class="text-blue-700">Projects</span>
                </h1>
    
            <p class="text-lg font-semibold text-slate-700 mt-4">
                Here are some of my projects, I have worked on in the past.
            </p>   

            <!-- finger print  -->

            </div>
        
        </div> 
    </div>   

    <!-- pannel inorder to trigger the animation -->
    <div id="shadow-pannel">

    </div>

    <div class="container grid grid-flow-col mt-10 mx-auto">

        <div class="flex flex-col lg:flex-row mx-auto gap-6 p-6">

            <!-- user is always first card !-->
            <div class='p-8 text-center bg-white rounded-lg shadow-2xl border border-slate-200'>
                <div class="shadow-lg rounded-md border border-slate-200 p-4">
                    <!-- <img src='/assets/images/cloudchef.png' alt='brain-bulb' class='w-auto h-full mx-auto' /> -->
                    <video class="w-full h-full mx-auto" controls autoplay muted loop>
                        <source src="/assets/videos/cloudchef.webm" type="video/mp4">
                    </video>
                </div>


                <section class='mt-20 p-2 text-center bg-white'>
                    <h2 class="text-2xl font-extrabold text-blue-900"> Cloud Chef  </h2>

                    <p class='text-md font-semibold text-slate-700 mt-4 '>
                        Cloudchef is a restaurant management solution that helps any establishment and its staff work smarter and more efficient. We put all the information you need in one place, for when you need it the most.
                        Make employee training easy and simple by using our recipe management system.
                    </p>
                </section>
                
                
                <div class="mt-4">
                    <button class="button-56 p-4 rounded-lg  mx-auto shadow-lg border border-slate-200">
                        Tell me more
                    </button>
                </div>


                 <!-- live site and site up link -->
                 <ul class='flex justify-center'>
                    <li class='m-3'>
                        <a href='' class='text-black-500'>
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                    </li>
                  
                    <li class='m-3'>
                        <a href='' class='text-black-500'>
                            <!-- globe -->
                            <i class="fas fa-globe fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
     
                    <!-- user is always first card !-->
                    <div class='p-8 text-center bg-white rounded-lg shadow-2xl border border-slate-200'>
                        <div class="shadow-lg rounded-md border border-slate-200 p-4">
                            <!-- <img src='/assets/images/nfldlaw.png' alt='brain-bulb' class='w-auto h-full mx-auto' /> -->
                            <video class="w-full h-full mx-auto" controls autoplay muted loop>
                                <source src="/assets/videos/nfldlaw.webm" type="video/mp4">
                            </video>
                        </div>
        
        
                        <section class='mt-20 p-2 text-center bg-white '>
                            <h2 class="text-2xl font-extrabold text-blue-900"> NewFound Land Law  </h2>
        
                            <p class='text-md font-semibold text-slate-700 mt-4 '>
                                Enter your information, and we'll create a last will and testament customized to your wishes.
                                Save your family's future by creating a last will and testament, all though a online wizard.
                                Access your documents anytime, and download them in a single click. You can also print them.
                            </p>
                        </section>
                        
                        
                        <div class="mt-4">
                            <button class="button-56 p-4 rounded-lg  mx-auto shadow-lg border border-slate-200">
                                Tell me more
                            </button>
                        </div>

                        <!-- live site and site up link -->
                        <ul class='flex justify-center'>
                            <li class='m-3'>
                                <a href='' class='text-black-500'>
                                    <i class="fab fa-github fa-2x"></i>
                                </a>
                            </li>
                         
                            <li class='m-3'>
                                <a href='' class='text-black-500'>
                                    <!-- globe -->
                                    <i class="fas fa-globe fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>



                <!-- contact me  desc container   -->
                <div class="container grid grid-flow-col mt-10 mx-auto">
                    <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1 text-center">
                            <h1 class="text-5xl font-extrabold mt-10 text-blue-900">
                                
                                <span class="text-blue-700">Contact Me</span>
                            </h1>

                            <p class="text-lg font-semibold text-slate-700 mt-4">
                                Feel free to contact me, I would love to hear from you.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- end of the contact container -->


                <!-- contact form -->
                <div class="container grid grid-flow-col mt-10 mx-auto">
                    <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1 text-center">
                            <form action="/contact" method="POST">

                                <div class="flex flex-col gap-4">
                                    <div class="flex-1">
                                        <label for="name" class="text-sm font-semibold text-slate-700">Name</label>
                                        <input type="text" name="text" id="name" class="input-border border-slate-200 p-2 rounded-lg" placeholder="Your name" required>
                                    </div>

                                    <div class="flex-1">
                                        <label for="email" class="text-sm font-semibold text-slate-700">Email</label>
                                        <input type="email" name="email" id="email" class="input-border border-slate-200 p-2 rounded-lg" placeholder="Your email" required>
                                    </div>

                                    <div class="flex-1">
                                        <label for="message" class="text-sm font-semibold text-slate-700">Message</label>
                                        <textarea name="message" id="message" class="input-border border-slate-200 p-2 rounded-lg" placeholder="Your message" required></textarea>
                                    </div>

                                    <div class="flex-1">
                                        <button type="submit" class="button-56 p-4 rounded-lg  mx-auto shadow-lg border border-slate-200">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end of the contact form -->


                <!-- footer -->
                <footer class="container grid grid-flow-col mt-10 mx-auto">
                    <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1 text-center">
                            <h1 class="text-xl font-extrabold mt-10 text-blue-900">
                                <!-- quote from my favourite computer scientist -->
                                <span class="text-slate-600">" You can't trust code that you did not totally create yourself." </span><br/>
                                <span class="text-slate-600">- <i>Ken Thompson </i> </span>
                            </h1>
                                <ul class='flex justify-center mt-4 '>
                                    <li class='m-3'>
                                        <a href='' class='text-black-500'>
                                            <i class="fab fa-github fa-3x"></i>
                                        </a>
                                    </li>
                              
                                    <li class="m-3">
                                        <a href='' class='text-black-500'>
                                            <!-- linkedin -->
                                            <i class="fab fa-linkedin fa-3x"></i>
                                        </a>
                                    </li>

                                    <li class="m-3">
                                        <a href='' class='text-black-500'>
                                            <!-- twitter -->
                                            <i class="fab fa-twitter fa-3x"></i>
                                        </a>
                                    </li>

                                    <li class="m-3">
                                        <!-- code pen -->
                                        <a href='' class='text-black-500'>
                                            <i class="fab fa-codepen fa-3x"></i>
                                        </a>
                                    </li>

                                </ul>
                            </h1>
                        </div>
                    </div>
                </footer>   


                <!-- end of the footer -->
</body>

</html>