<div class="mx-6 my-12">
    @if (session('status'))
        <div class="alert alert-success  bg-blue-700">
            {{ session('status') }}
        </div>
    @endif
    <form>
        <div class="w-full border-2  rounded-md mb-2">
            <div class="flex justify-between bg-slate-200 p-4 rounded-md">
                <div>
                    <p class="font-bold">Product Category</p>
                </div>
                <div class="text-blue-600">+ Add Category</div>
            </div>
            <div class="flex p-6 gap-4  justify-betweenfp-3">


                <label for="dropzone-file" class="w-1/4 rounded-md bg-slate-300 h-[150px] py-2 pl-4">

                    <div class="">
                        <div><img src="{{ asset('asset/images/tv.png') }}" class="w-12 h-12" alt=""></div>
                        <div class="mt-6 font-bold">Television</div>

                        <small>6000 items</small>
                    </div>
                    <input id="dropzone-file" wire:model="cate" type="checkbox" class="hidden" />

                </label>



                <div class="w-1/4 rounded-md border-blue-500 border-2 bg-slate-300 h-[150px] py-2 pl-4">
                    <div><img src="{{ asset('asset/images/watch.png') }}" class="w-12 h-12" alt=""></div>
                    <div class="mt-6 font-bold">Wrist Watch</div>
                    <small>200 items</small>
                </div>
                <div class="w-1/4 rounded-md bg-slate-300 h-[150px] py-2 pl-4">
                    <div><img src="{{ asset('asset/images/phone.png') }}" class="w-12 h-12" alt=""></div>
                    <div class="mt-6 font-bold">Mobile Phone</div>
                    <small>250 items</small>
                </div>
                <div class="w-1/4 rounded-md bg-slate-300 h-[150px] py-2 pl-4">
                    <div><img src="{{ asset('asset/images/headphone.png') }}" class="w-12 h-12" alt="">
                    </div>
                    <div class="mt-6 font-bold">HeadPhone</div>
                    <small>400 items</small>
                </div>
            </div>
        </div>

        <div class="w-full border-2  rounded-md mb-2">
            <div class="flex justify-between bg-slate-200 p-4 rounded-md">
                <div>
                    <p class="font-bold">Product Detail</p>
                </div>

            </div>
            <div class="p-4">
                <div class="flex gap-2 ">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="pro_name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="pro_name"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                            Name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <select wire:model="pro_cat"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="">
                            <option>select category</option>
                            @foreach ($cat as $key => $item)
                                <option value="{{ $key }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        <label for="category"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="brand" id="brand"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="brand"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Brand</label>
                    </div>
                </div>
                <div class="flex gap-2">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="number" wire:model="price" id="price"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="price"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="color" wire:model="color" id="color"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="color"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Color</label>
                    </div>
                </div>
                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="slug" id="slug"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="slug"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="serial_number" id="serial_number"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 rounded-md border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="serial_number"
                            class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Serial
                            Number</label>
                    </div>
                </div>
            </div>
        </div>

        <button wire:click="addItem"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
            Product</button>
    </form>

</div>
