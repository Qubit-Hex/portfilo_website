 <!-- contact me  desc container   -->
 <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1 text-center">
                            <h1 class="text-5xl font-extrabold mt-10 text-blue-900">
                                
                                <span class="text-blue-900">Contact Me</span>
                            </h1>

                            <p class="text-lg font-semibold text-slate-700 mt-4">
                                Feel free to contact me, I would love to hear from you.
                            </p>
                        </div>
                    </div>

                <!-- end of the contact container -->


                <!-- contact form -->
                    <div class="flex lg:flex mx-auto rounded-lg justify-start align-baseline gap-3 p-6">
                        <div class="flex-1">
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
