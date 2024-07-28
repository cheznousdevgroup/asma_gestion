
<div class="isContentHidden" data-li-content="employe">
    <h5 class="text-xl font-medium mb-6">Gestion des employés</h5>
    <!-- header -->
    <div class="md:flex items-center justify-between">
        <a class="bg-sky-900 p-3 md:p-4 rounded-lg md:rounded-[15px] text-slate-100 text-sm my-4" href="{{ route('add-users-rules') }}">
            <span class="">Ajouter un employé</span>
        </a>
        <div class="border bg-white p-2 flex items-center rounded-[15px] mt-4 w-72">
            <input type="text" class="outline-none p-1" placeholder="Rechercher un employé"/>
            <i class="fi fi-bs-search flex items-center justify-center"></i>
        </div>
    </div>
    <!-- content  -->
    <div class="grid grid-cols-12 gap-4 my-9">
        <!-- Affichage des employés  -->
        <figure class="flex rounded-[15px] col-span-12 md:col-span-6 xl:col-span-3 bg-gray-50 p-5 col-span-1 m-2 shadow-md justify-between">
            <div>
                <img src="" alt="" class="size-32 mx-auto rounded-[10px] border" />
            </div>
            <div class="flex items-center justify-between">
                <figcaption class="font-medium">
                    <div class="text-sky-950 dark:text-sky-400">
                        Kimou N'cho
                    </div>
                    <div class="flex items-center my-5">
                        <a href="" class="text-sky-500 dark:text-sky-400 hover:underline">
                            <button class="bg-sky-900 p-2 w-24 rounded-[15px] text-slate-100 text-sm">
                                profil
                            </button>
                        </a>
                    </div>
                </figcaption>
            </div>
        </figure>
    </div>
</div>
