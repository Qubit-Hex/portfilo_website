<!-- contact container template !-->

<template id='messageSuccess'>
    <div class='border-8 border-blue-300 p-8 shadow-lg w-3/4 lg:w-fit> 
                     mt-5 text-center flex lg:flex mx-auto 
                     justify-center align-middle gap-3
                     bg-gradient-to-r from-cyan-50 to-blue-50 
                     fade'>
     
        <div class='flex-1'>

        <p class='text-2xl leading-5 font-bold text-slate-800'>
                Message sent successfully!
            </p>

            <div class='justify-center align-middle'>
                <img src='/assets/images/svg/email.svg' alt='email' class='w-80 h-80 mb-3 mx-auto'>
            </div>


            <p class='text-2xl leading-8 font-bold text-slate-900'>
                Thank you for contacting Me. We will get back to you as soon as possible.
            </p>

        </div>

    </div>
</template>



<!-- error message template !-->
<template id='messageError'>

    <div class='border-8 border-red-300 p-8 shadow-lg w-3/4 lg:w-fit> 
                     mt-5 text-center flex lg:flex mx-auto 
                     justify-center align-middle gap-3
                     bg-gradient-to-r from-red-50 to-amber-50 
                     fade'>
     
        <div class='flex-1'>

        <p class='text-2xl leading-5 font-bold text-slate-800'>
               Message Could not be sent!
            </p>

            <div class='justify-center align-middle'>
                <img src='/assets/images/phonies/Call waiting.svg' alt='email' class='w-80 h-80 mb-3 mx-auto'>
            </div>


            <p class='text-2xl leading-8 font-bold text-slate-900'>
                Please try again later.
            </p>

        </div>

    </div>


</template>





<!-- contact me  desc container   -->
 <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1 text-center">
                            <h1 class="text-5xl font-extrabold mt-10 text-blue-900">
                                
                                <span class="text-blue-900">Contact Me</span>
                            </h1>

                            <p class="text-lg font-semibold text-slate-700 mt-4">
                                Feel free to contact me, I would love to hear from you.
                            </p>

                            <p id='emailResponse' class='text-lg font-semibold text-green-700 mt-4'>

                            </p>
                        </div>
                    </div>
                <!-- end of the contact container -->


                <!-- contact form -->
                    <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1" id='contactContainer'>

                            <form id="contactForm" method="POST" />

                                <div class="flex flex-col gap-4">
                                    <div>
                                        <label for="name" class="text-md font-semibold text-slate-700">Name</label>
                                        <input type="text" name="text" id="name" class="border border-slate-200 p-3 mt-2 rounded-lg w-full" placeholder="Your name" required>
                                    </div>

                                    <div>
                                        <label for="email" class="text-md font-semibold text-slate-700">Email</label>
                                        <input type="email" name="email" id="email" class="border border-slate-200 mt-2 p-3 rounded-lg w-full" placeholder="Your email" required>
                                    </div>

                                    <div>
                                        <label for="message" class="text-md font-semibold text-slate-700">Message</label>
                                        <textarea name="message" id="message" class="border border-slate-200 p-3 mt-2 rounded-lg w-full" placeholder="Your message" required></textarea>
                                    </div>

                                    <div>
                                        <button type="submit" id="submissions" class="button-56 p-4 rounded-lg  mx-auto shadow-lg border mt-2  border-slate-200 w-60">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
