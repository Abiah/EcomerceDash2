<x-app-layout>
    <div class="p-12">
        <div class="flex justify-between mb-6">
            <div>
                <p class="font-bold text-2xl">Order History</p>
                <p>Manage your recent orders</p>
            </div>
            <div class="flex  gap-1">
                <div>
                    <button class="bg-violet-600 px-3 py-2 rounded-md text-white">Download Excel</button>
                </div>
                <div>
                    <button class="border-2 px-3 py-2 rounded-md">New Order</button>
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
                <input class="w-[400px] h-[40px] rounded-md border-2 border-blue-600" type="text"
                    placeholder="Search">
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
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-green-400 p-2 rounded-md text-black">Paid</label>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-green-400 p-2 rounded-md text-black">Paid</label>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-red-600 text-white p-2 rounded-md">Pending</label>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Google Pixel Phone
                            </th>
                            <td class="px-6 py-4">
                                Gray
                            </td>
                            <td class="px-6 py-4">
                                Phone
                            </td>
                            <td class="px-6 py-4">
                                $799
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-green-400 p-2 rounded-md text-black">Paid</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple Watch 5
                            </th>
                            <td class="px-6 py-4">
                                Red
                            </td>
                            <td class="px-6 py-4">
                                Wearables
                            </td>
                            <td class="px-6 py-4">
                                $999
                            </td>
                            <td class="px-6 py-4">
                                <label for="" class="bg-green-400 p-2 rounded-md text-black">Paid</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</x-app-layout>
