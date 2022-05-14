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
                NewFoundLand Law 
            </h1>
        </section>


        <!-- section !-->
        <section class='mt-5 p-5'>
            <h3 class='text-4xl font-bold text-gray-800'> Purpose </h3>

            <p class='text-gray-800 md:text-lg mt-5 '>
               The purpose of this application was to solve a issue, which is lots of people from low income families are facing. <br/>
               The issue is not many low income families have access to legal contracts.
               I created this application to help them create a last will and testament and/or power of attorney,
               at no cost to them.  <br/>
               So that people can have a D.I.Y approach to creating legal contracts. <br/>
               No matter your financial situation, you can still have access to legal contracts.
            </p>
        </section>

        <!-- section for describing the application -->
        <section class='mt-10 p-5 w-full'>
            <h3 class='text-4xl font-bold text-gray-800'> Features  </h3>

            <ul class='list-disc list-inside mt-5 text-lg'>
                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Authentication
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Stripe API integration for payment ( storage of documents )
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Manage documents
                    </span>
                </li>

                <li class='text-gray-800'>
                    <span class='font-bold'>
                        Storage of documents and download anytime.
                    </span>
                </li>
            </ul>
        </section>


        <!-- screen shot of the application -->
        <section class='w-full mt-10 bg-slate-50 shadow-lg p-5' id='nfldlawContainer'>
            <h3 class='text-xl lg:text-4xl font-bold text-gray-800'> Screenshots </h3>
            <div class='border-b border-slate-200 mt-4'></div>

            <ul  class='flex flex-col lg:flex-row justify-center align-middle mt-5'>

                <li class='m-2'>
                    <button class='button-17 p-4' id='screen1'> Home Page</button>
                    <img src='/assets/images/screenshots/nfldlaw/nfldlaw_home.png' alt='screenshot1' class='mt-6  shadow-dark'>
                </li>

                <li class='m-2'>
                    <button class='button-17' id='screen2'> Login Page </button>
                    <img src='/assets/images/screenshots/nfldlaw/login_nfldlaw.png' alt='screenshot2' class='mt-6 shadow-dark'>
                </li>
            </ul>
        </section>


        <section class='mt-10 bg-slate-50 shadow-lg p-20 text-center lg:text-left'>
            <h4 class='text-4xl font-bold text-gray-800'> Tech Stack </h4>

            <ul class="flex flex-col lg:flex-row font-bold mt-2">             
                    <li class="m-3">
                        <i class="fa-brands fa-php fa-4x  text-purple-400"></i>
                        <span> PHP </span>
                    </li>

                    <li class="m-3">
                        <i class="fa-brands fa-js fa-4x text-yellow-400"></i>
                        <span> JavaScript </span>
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
                        </div>

                        
                        <div class='text-xl w-auto lg:w-1/2 mt-10 mx-auto text-slate-800'>
                            <a class='button-56 button-blue-600' href='https://nfldlegal.com/home/login'> Take me to Demo  </a>
                        </div>

                </div>
        </section>
        
    </div>
</div>
