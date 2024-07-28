<!-- dashboard content  -->
<div class="grid grid-cols-12 gap-6 isContentVisible" data-li-content="dashboard">
    <!-- left part  -->
    <div class="col-span-12 2xl:col-span-8 h-full border-r-2 border-slate-200 position-relative">
        <!-- general report  -->
        <div class="">
            <!-- header  -->
            <div class="flex items-center justify-between w-full">
                <h5 class="font-medium text-sky-900">Rapport général</h5>
                <div class="flex items-center">
                    <a href="">
                        <div class="flex items-center text-slate-500">
                            <i class="fi fi-sr-bolt pt-2 mx-4"></i>

                            <span class="text-sm me-4 isHidden md:block">Faire une
                                simulation</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex items-center text-slate-500">
                            <i class="fi fi-sr-refresh pt-2 mx-4"></i>

                            <span class="text-sm me-4 isHidden md:block">Recharger les
                                données</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- general report content  -->
            <div class="pt-8 grid grid-cols-12 gap-6">
                <!-- card  -->
                <div
                    class="flex rounded-[15px] p-3 flex flex-col col-span-12 sm:col-span-6 xl:col-span-4 items-center shadow-lg mx-4 bg-gray-50">
                    <div>
                        <i class="fi fi-sr-shopping-cart text-4xl"></i>
                    </div>
                    <span class="font-medium text-4xl my-2">4.710</span>
                    <p class="font-medium text-slate-500">
                        Ventes d'articles
                    </p>
                </div>
                <div
                    class="flex rounded-[15px] p-3 flex flex-col col-span-12 sm:col-span-6 xl:col-span-4 items-center shadow-lg mx-4 cursor-pointer bg-gray-50">
                    <div>
                        <!-- <i class="fi fi-br-box-open text-4xl my-5"></i> -->
                        <i class="fi fi-br-screen text-4xl my-5"></i>
                    </div>
                    <span class="font-medium text-4xl my-2">4.710</span>
                    <p class="font-medium text-slate-500">
                        Total des produits
                    </p>
                </div>
                <div
                    class="flex rounded-[15px] p-3 flex flex-col col-span-12 sm:col-span-6 xl:col-span-4 items-center shadow-lg mx-4 cursor-pointer bg-gray-50">
                    <div>
                        <i class="fi fi-sr-box text-4xl my-5"></i>
                    </div>
                    <span class="font-medium text-4xl my-2">500</span>
                    <p class="font-medium text-slate-500">Stocks</p>
                </div>
            </div>
            <h5 class="font-medium text-sky-900 my-8">
                Rapport de ventes
            </h5>
            <!-- chart container  -->
            <div
                class="flex grid grid-cols-12 gap-6 justify-between border-sky-900 rounded-[25px] shadow-lg">
                <div
                    class="col-span-12 sm:col-span-12 md:col-span-6 bg-gray-50 p-4 rounded-[25px] shadow-lg mt-4">
                    <div class="p-2 flex mb-6">
                        <div class="me-6">
                            <h5 class="font-medium text-sky-700">5000 FCFA</h5>
                            <p class="font-medium text-slate-500 text-sm">
                                Ce mois
                            </p>
                        </div>
                        <div>
                            <h5 class="font-medium text-sky-700">5000 FCFA</h5>
                            <p class="font-medium text-slate-500 text-sm">
                                Mois dernier
                            </p>
                        </div>
                    </div>
                    <canvas id="myChart" style="height: 100%"></canvas>
                </div>
                <div
                    class="col-span-12 sm:col-span-12 md:col-span-6 bg-gray-50 p-4 rounded-[25px] shadow-lg xl:mx-4 mt-4 flex justify-center">

                    <div></div>
                    <canvas id="myChart2" sttyle="height: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- right part  -->
    <div class="col-span-12 2xl:col-span-4 h-full w-full p-6 border">
        <div class="">
            <h5 class="font-medium text-sky-900 xlmx-4">
                Transactions
            </h5>
            <!-- Transactions content  -->
            <div class="mt-5">
                <div class="flex border p-2 rounded-lg shadow-md bg-gray-50">
                    <div class="border h-[50px] w-[50px] rounded-full border-sky-950">
                        <img src="" alt="" />
                    </div>
                    <div class="mx-4">
                        <h4 class="text-lg text-sky-700">Eric</h4>
                        <h5 class="text-sm text-slate-500">20 March 2022</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
