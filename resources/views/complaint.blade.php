<x-app-layout>
    <div class="my-12 container w-3/4 mx-auto">
        <div class="shadow-md mx-6 p-4 rounded-md">
            <p class="text-red-500 font-bold mb-2">Having Problems With Order Managment ? Use Resolver to
                make Complaint.
            </p>
            <p class="mb-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                asperiores dolor
                quae nihil.
                Deserunt, aperiam tenetur animi perspiciatis nemo possimus! Explicabo, earum quae eius
                beatae incidunt vel dignissimos corrupti voluptas.</p>
            <button class="p-2 rounded-md bg-yellow-400">Raise a hand</button>
        </div>

        <div class="flex shadow-md mx-6  rounded-md mt-4">

            <div class="bg-green-700 w-[5px] rounded-l-md">

            </div>
            <div class="px-4 w-5/6">
                <div class="flex ">
                    <div>
                        <img src="{{ asset('asset/images/smile.png') }} " class="w-10 h-8" alt="">
                    </div>
                    <div class="flex flex-col">
                        <div>
                            <p>Kofi Owusu</p>
                        </div>
                        <div class="flex gap-2">
                            <div>
                                <small>15 minutes ago</small>
                            </div>
                            <div>
                                <p class="text-green-700 font-bold">Resolved</p>
                            </div>
                        </div>

                    </div>
                </div>
                <p class="font-bold m-2">Payment Method Not Responding</p>
                <p class="mb-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                    asperiores dolor
                    quae nihil.
                    Deserunt, aperiam tenetur animi perspiciatis nemo possimus! Explicabo, earum quae eius
                    beatae incidunt vel dignissimos corrupti voluptas.</p>

            </div>
        </div>

        <div class="flex justify-between gap-4 mx-6 rounded-md mt-4 ">
            <div class="shadow-lg p-4 w-2/4 rounded-md">
                <p class="font-bold">Contact Info</p>
                <p class="text-sm  text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ab, aperiam!
                </p>
                <div class="shadow-md border-2 border-gray-300 flex justify-between p-5 rounded-md mt-4">
                    <div>
                        <p class="font-bold">Open Live Chat</p>
                        <p class="text-sm text-gray-500">Click to open live chat with developers</p>
                    </div>
                    <div>
                        <img src="{{ asset('asset/images/chat.gif') }}" class="w-12 h-12" alt="">
                    </div>
                </div>

                <div class="shadow-md border-2 border-gray-300  p-5 rounded-md mt-4">
                    <div>
                        <p class="font-bold">Visit Our Social Media</p>
                        <p class="text-sm text-gray-500">You can also contact us via the following social
                            Media
                            platforms
                        </p>
                        <div>
                            <img src="{{ asset('asset/images/socials.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 shadow-lg w-2/4">
                <label for="">Email</label>
                <br>
                <input type="text" class="rounded-md border border-gray-400 w-full h-[40px]" name=""
                    id="">

                <label for="">Message</label>
                <br>
                <textarea name="" id="" cols="30" rows="5" class="rounded-md border border-gray-400 w-full"></textarea>

                <button class="w-full p-3 mt-3 rounded-full bg-purple-700 text-white">Send</button>

                <p class="text-gray-400">All messages are kept anonymous, no third party will know it you.
                    feel free and send us
                    your complaints.</p>
            </div>
        </div>
    </div>

</x-app-layout>
