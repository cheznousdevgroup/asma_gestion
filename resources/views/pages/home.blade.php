@extends('../layout.app')
@section('body')

    <body class="bg-sky-900 text-white 2xl:overflow-y-hidden">
        <main class="md:max-w-auto md:min-h-screen min-w-0 max-w-full p-2 md:p-6">
            <span class="block md:isHidden flex justify-end mb-8 p-3">
                <i class="fi fi-rs-bars-staggered text-2xl rotate-180" id="burger"></i>
            </span>
            <div class="md:flex">
                <!-- side bar  -->

                <div class="isHidden md:isNotAbsolute md:flex md:mt-12 md:h-screen md:w-[80px] overflow-x-hidden md:pb-16 md:pr-5 md:block xl:w-[230px]"
                    id="sideBar">
                    <span class="md:hidden flex justify-end p-3 mt-8">
                        <i class="fi fi-rs-circle-xmark text-2xl" id="closeSideBar"></i>
                    </span>

                    @include('layout.components.top-bar')
                </div>

                <!-- main content -->
                <div class="bg-slate-100 w-full p-6 text-sky-900 rounded-[25px] shadow-lg">
                    <!-- header  -->
                    <div class="h-6 flex items-center justify-between   mb-[3rem] col-span-12">
                        <div class=" ">
                            <div class=" ">
                                <img src="https://asmaboutik.com/wp-content/uploads/2024/03/Blue-Minimalist-Initial-A-Letter-Logo.svg"
                                    alt="" class="size-24 md:size-28" />
                            </div>
                        </div>
                        @include('partials.user-bottom')
                    </div>

                    <!--content  -->
                    <div class="main-content  h-full col-span-12">
                        @include('layout.top-bar')

                        <!-- employe content  -->

                        @include('partials.employee-management')

                        @include('partials.garantie')

                        @include('partials.reparation')

                        @include('partials.vente')

                        @include('partials.categorie')

                        @include('partials.produit')

                        @include('partials.stock')

                    </div>
                </div>
            </div>
        </main>
        @extends('../layout.main')
    @endsection
