<!-- container for the header  section of the website description -->

<!-- modal  !-->

<div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog h-fit fade">
            <div class="modal-header">
                <span class="modal-title" id="modalTitle">Screen Shots </span>
                <button type="button" class="close" data-dismiss="modal" id='modal-close' aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class='mx-auto justify-center align-middle overflow-auto '>
                    <img src='/assets/images/recipes_screenshot.png' id='screenshot' alt='screenshot1' class='h-full'>
                </div>
        </div>
    </div>
</div>



<div class='flex flex-col lg:flex-row mt-10'>
    <div class='flex-1 m-5'>
        <section>
            <h1 class='text-4xl font-bold'>
                CloudChef 
            </h1>
        </section>


        <!-- section !-->
        <section class='mt-5 p-5'>
            <h3 class='text-4xl font-bold text-gray-800'> Purpose </h3>

            <p class='text-gray-800 md:text-lg mt-5 '>
               The purpose of this application was i wanted to created a solution to problem that may occur in the workplace.
               The problem was schedules and recipe were being poorly managed in the restaurant industry at the small business level,
               For example constant shift changes though out the week and inconsistent communication to the staff.
               So created a solution to manage the schedules and recipes where employees have information for each recipe, and have access 
               to their schedules via online dashboard.
            </p>
        </section>

        <!-- section for describing the application -->
        <section class='mt-10 p-5 w-full'>
            <h3 class='text-4xl font-bold text-gray-800'> Features  </h3>

            <ul class='list-disc list-inside mt-5 text-lg'>
                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Manage Schedules
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Track Labour Cost
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Manage Recipes
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Manage Employees
                    </span>
                </li>

                <li class='text-gray-800 '>
                    <span class='font-bold'>
                        Authentication 
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        REST API
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        SPA <span class='text-md text-slate-900'> (Single Page Application) </span>
                    </span>
                </li>
            </ul>
        </section>


        <!-- screen shot of the application -->
        <section class='w-full mt-10 bg-slate-50 shadow-lg p-5' id='cloudchefLanding'>
            <h3 class='text-xl lg:text-4xl font-bold text-gray-800'> Screenshots </h3>
            <div class='border-b border-slate-200 mt-4'></div>

            <ul  class='flex flex-col lg:flex-row justify-center align-middle mt-5'>

                <li class='m-2'>
                    <button class='button-17 p-4' id='screen1'> Recipe Section </button>
                    <img src='/assets/images/recipes_screenshot.png' alt='screenshot1' class='mt-6  shadow-dark'>
                </li>

                <li class='m-2'>
                    <button class='button-17' id='screen2'> Main Dashboard </button>
                    <img src='/assets/images/dashboard_screenshot.png' alt='screenshot2' class='mt-6 shadow-dark'>
                </li>

                <li class='m-2'>
                    <button class='button-17' id='screen3'>  Employee Section </button>
                    <img src='/assets/images/employee_screenshot.png' alt='screenshot3' class='mt-6 shadow-dark'>
                </li>
            </ul>
        </section>


        <section class='mt-10 bg-slate-50 shadow-lg p-20'>
            <h4 class='text-4xl font-bold text-gray-800'> Tech Stack </h4>

            <ul class="flex flex-col lg:flex-row justify-center align-middle font-bold mt-2">
                  
                    <li class="m-3">
                        <i class="fa-brands fa-react fa-4x text-blue-400"></i>
                        <span>React</span>
                    </li>

                    <li class="m-3">
                        <i class="fa-brands fa-php fa-4x  text-purple-400"></i>
                        <span> PHP </span>
                    </li>

                    <li class="m-3">
                        <i class="fa-brands fa-js fa-4x text-yellow-400"></i>
                        <span> JavaScript </span>
                    </li>

                    <li class="m-3">
                        <i class="fa-brands fa-laravel fa-4x  text-red-500"></i>
                        <span> Laravel </span>
                    </li>

                    <li class="m-3">
                        <i class="fa-brands fa-bootstrap fa-4x text-purple-500"></i>
                        Bootstrap
                    </li>
                </ul>
        </section>


        <section class='mt-10 bg-slate-50 shadow-xl rounded-md p-5' >
            <div class='text-center'>
                <h1 class='text-4xl font-bold text-blue-900'> Demo </h1>

                <h2 class='text-xl text-gray-800'> Take a tour of the application to see first hand. </h2>

                <div class='flex flex-col lg:flex-row flex-wrap'>
                    <div class='mx-auto'>
                        <img src='/assets/images/svg/authentication.svg' alt='screenshot1' class='w-72 h-72 border-slate-300' />
                    </div>  
                </div>

               
                    <div>
                        <h1 class='text-4xl text-blue-900 font-bold'> Login </h1>
                    </div>

                    <div class='text-lg text-slate-900 mt-5'>
                        <b> Username:  <span class='font-normal'> demo@example.com </span> </b> <br/>
                        <b> Password:  <span class='font-normal'> demoaccount </span></b>  <br/>
                        <b> Store ID:  <span class='font-normal'> 3 </span> </b>   <br/>
                    </div>


                    <div class='text-xl w-auto lg:w-1/2 mt-10 mx-auto text-slate-800'>
                        <a class='button-56 button-blue-600' href='https://cloud-chef.ca/login'> Take me to Demo  </a>
                    </div>

            </div>
        </section>

        
    </div>

</div>
