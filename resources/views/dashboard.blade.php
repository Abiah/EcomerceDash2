<x-app-layout>
    <div class="w-full h-screen ">

        <!-- Page -->
        <div class="h-screen">
            <!-- body -->
            <div class="mx-2">
                <div class="mb-4 ml-2">
                    <p class="text-2xl font-bold mt-4">Welcome Back Admin</p>
                    <small class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem,
                        facilis.</small>
                </div>
                <!-- cards -->
                <div class="flex justify-center  items-center bg-slate-200 h-[200px]">
                    <div class="w-1/3 text-center border-2 border-r-slate-900 ">
                        <p class="text-2xl md:text-4xl text-center font-bold"> $200K</p>
                        <label class="text-sm" for="">Previous Year</label>
                        <div class="bottom-0 left-12">
                            <img src="./dist/src/images/bar.gif" class="w-8" alt="">
                        </div>
                    </div>
                    <div class="w-1/3 text-center border-2 border-r-slate-900">
                        <p class="text-2xl md:text-4xl  text-center font-bold"> $20K</p>
                        <label class="text-sm" for="">Previous Month</label>
                        <div class="bottom-0 left-12">
                            <img src="./dist/src/images/bar.gif" class="w-8" alt="">
                        </div>
                    </div>
                    <div class="w-1/3 text-center">
                        <p class="text-2xl md:text-4xl text-center font-bold"> $10K</p>
                        <label class="text-sm" for="">Previous Week</label>
                        <div class="bottom-0 left-12">
                            <img src="./dist/src/images/bar.gif" class="w-8" alt="">
                        </div>
                    </div>
                </div>

                <div class="">
                    <!-- charts -->
                    <div>
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div>
                        <canvas id="barChart"></canvas>
                    </div>

                    <!-- list -->
                    <div>
                        <p class="text-lg font-medium ml-12">Best Customers</p>
                        <div>


                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Customer name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Product
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Total Exp.
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Date
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Kofi Jack
                                            </th>
                                            <td class="px-6 py-4">
                                                Iphone 8 Plus
                                            </td>
                                            <td class="px-6 py-4">
                                                $299
                                            </td>
                                            <td class="px-6 py-4">
                                                12<sup>th</sup> Septemeber, 2024
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Akwasi Owusu
                                            </th>
                                            <td class="px-6 py-4">
                                                Dell Xeon
                                            </td>
                                            <td class="px-6 py-4">
                                                $199
                                            </td>
                                            <td class="px-6 py-4">
                                                9<sup>th</sup> October, 2024
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Ama Quanioo
                                            </th>
                                            <td class="px-6 py-4">
                                                LG Tele 12''
                                            </td>
                                            <td class="px-6 py-4">
                                                $29
                                            </td>
                                            <td class="px-6 py-4">
                                                23<sup>rd</sup> Septemeber, 2024
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        const line = document.getElementById('lineChart');

        const bar = document.getElementById('barChart');

        new Chart(line, {
            type: 'line',
            data: {
                labels: ['Hp Xeon', 'LG Tele', 'Ipone 8', 'Canon 6d', 'Dell Monitor', 'UPS'],
                datasets: [{
                    label: '# Products Purchased',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(bar, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# Item Colors Customers Want',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</x-app-layout>
