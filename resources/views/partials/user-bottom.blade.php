<div
                            class="size-12 border  flex items-center justify-center rounded-full border-sky-950 cursor-pointer ">
                            <img src="./assets/images/fond.jpg" alt="avatar" class="w-12 h-12 rounded-full"
                                id="user-avatar" />
                            <div class="absolute isHidden top-[10rem] right-[12px] md:top-[6rem]   md:right-[3rem] z-40 w-[300px] h-72 p-2 w-12 rounded-md bg-sky-900 text-white flex flex-col justify-between"
                                id="user-menu">
                                <div>
                                    <h5 class="font-bold text-lg">Nom du l'utilisateur</h5>
                                    <h6 class="font-medium text-gray-300">Role</h6>
                                </div>
                                <div>
                                    <ul>
                                        <li class="my-3">
                                            <a href="#" class="flex items-center hover:text-sky-300">
                                                <i class="fi fi-rr-user text-gray-300"></i>
                                                <h6 class="font-medium ms-3">Profil</h6>
                                            </a>
                                        </li>

                                        <li class="my-3">
                                            <a href="#" class="flex items-center hover:text-sky-300">
                                                <i class="fi fi-rr-lock text-gray-300"></i>
                                                <h6 class="font-medium ms-3">Reinitialiser mon mot de passe</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center hover:text-sky-300">
                                                <i class="fi fi-rs-interrogation text-gray-300"></i>
                                                <h6 class="font-medium ms-3">Aide</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <a href="{{ route('logout') }}" class="flex items-center hover:text-sky-300">
                                                <i class="fi fi-rr-toggle-on flex items-center text-gray-300"></i>
                                                <h6 class="font-medium ms-3">Déconnexion</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
