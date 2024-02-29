<div class="p-12">
    <div class="flex justify-between mb-6">
        <div>
            <p class="font-bold text-2xl">Product List</p>
            <p>Manage your Product</p>
        </div>
        <div class="flex  gap-1">
            <div>
                <button wire:click="export" class="bg-violet-600 px-3 py-2 rounded-md text-white">Download Excel</button>
            </div>
            <div>
                <a href="{{ route('product') }}" class="border-2 px-3 py-2 rounded-md">New Product</button>
            </div>
        </div>
    </div>
    <hr>

    <div class="flex justify-between">
        <div class="flex gap-1 mt-6">
            <div class="bg-gray-300 p-2 rounded-l-md">
                <p>View all</p>
            </div>
            <div>
                <p class="bg-gray-200 p-2">Your files</p>
            </div>
            <div>
                <p class="bg-gray-400 p-2 rounded-r-md">Shared files</p>
            </div>
        </div>
        <div class="mt-6">
            <input class="w-[400px] h-[40px] rounded-md border-2 border-blue-600" type="text" placeholder="Search">
        </div>
    </div>

    <div class="mt-5">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_list as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->color }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->category->name }}
                            </td>
                            <td class="px-6 py-4">
                                GHC {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-green-400 p-2 rounded-md text-black">Paid</label>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>
