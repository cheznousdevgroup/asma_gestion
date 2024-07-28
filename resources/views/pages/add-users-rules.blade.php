@extends('../layout.app')
@section('body')
    <div class="flex items-center mt-8 justify-center ">
        <div>

            <h2 class="text-lg font-medium mr-auto text-sky-800 ms-4 ">AJouter un nouvel utilisateur</h2>
        </div>
    </div>
    <div class="g mt-5  flex justify-center items-center p-4 ">
        <div class="intro-y  lg:col-span-6  w-[35rem] rounded-xl shadow-xl">
            <form action="{{ route('users-rules.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="intro-x">
                        <!-- Photo de Profil -->
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative mb-3">
                            <img id="profile-image-preview" alt="Image de profil" class="rounded-full"
                                src="{{ asset('dist/images/default-profile.png') }}">
                            <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2 cursor-pointer"
                                id="photo-upload-trigger">
                                <i class="w-4 h-4 text-white" data-feather="camera"></i>
                            </div>
                            <input type="file" name="photo" id="photo-upload" class="form-control mt-3"
                                accept="image/*" style="display: none;">
                        </div>

                        <input type="text" name="name" class="intro-x login__input form-control py-3 px-4 block mt-4 border border-sky-800 w-full rounded-md outline-none"
                            placeholder="Nom complet" required maxlength="45">

                        <!-- Sélection du genre -->
                        <div class="mt-4">
                            <label class="form-label ">Genre</label>
                            <select name="gender" class="form-control w-full p-4"  required>
                                <option value="">Sélectionnez le genre</option>
                                <option value="male">Masculin</option>
                                <option value="female">Féminin</option>
                            </select>
                        </div>
                        <!-- Sélection du genre -->

                        <input type="email" name="email" class="intro-x login__input form-control py-3 px-4 block mt-4 border w-full rounded-md outline-none border-sky-800"
                            placeholder="Email" required maxlength="45">
                        <input type="password" name="password"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 border w-full rounded-md outline-none border-sky-800" placeholder="Mot de passe"
                            required maxlength="45">
                        <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                        </div>
                        <input type="password" name="password_confirmation"
                            class="intro-x login__input form-control py-3 px-4 block mt-4 border w-full rounded-md outline-none border-sky-800"
                            placeholder="Confirmation du mot de passe" required maxlength="45">

                        <!-- Sélection des rôles -->
                        <div class="mt-4">
                            <label class="form-label ">Rôles</label>
                            <div class="flex flex-wrap gap-4">
                                @foreach ($roles as $role)
                                    <div class="form-check my-2">
                                        <input id="role_{{ $role->id }}" class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->name }}">
                                        <label class="form-check-label" for="role_{{ $role->id }}">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="bg-sky-800 p-3 w-44 rounded-md text-white">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('photo-upload-trigger').addEventListener('click', function() {
            document.getElementById('photo-upload').click();
        });

        document.getElementById('photo-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onloadend = function() {
                const imgElement = document.getElementById('profile-image-preview');
                imgElement.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.getElementById('profile-image-preview').src =
                    '{{ asset('dist/images/default-profile.png') }}';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.querySelector('input[name="password"]');
            const confirmPasswordInput = document.querySelector('input[name="password_confirmation"]');
            const strengthBars = document.querySelectorAll('.intro-x .grid-cols-12 .col-span-3');
            const submitButton = document.querySelector('button[type="submit"]');

            function updatePasswordStrength(password) {
                const strength = calculatePasswordStrength(password);
                strengthBars.forEach((bar, index) => {
                    if (index < strength) {
                        bar.classList.remove('bg-slate-100', 'dark:bg-darkmode-800');
                        bar.classList.add('bg-success');
                    } else {
                        bar.classList.remove('bg-success');
                        bar.classList.add('bg-slate-100', 'dark:bg-darkmode-800');
                    }
                });
            }

            function calculatePasswordStrength(password) {
                let strength = 0;
                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/\d/)) strength++;
                if (password.match(/[^a-zA-Z\d]/)) strength++;
                return strength;
            }

            function validatePasswords() {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                const isValid = password === confirmPassword && calculatePasswordStrength(password) >= 3;
                submitButton.disabled = !isValid;
                return isValid;
            }

            passwordInput.addEventListener('input', function() {
                updatePasswordStrength(this.value);
                validatePasswords();
            });

            confirmPasswordInput.addEventListener('input', validatePasswords);

            document.querySelector('form').addEventListener('submit', function(e) {
                if (!validatePasswords()) {
                    e.preventDefault();
                    // alert('Veuillez vous assurer que les mots de passe correspondent et sont suffisamment forts.');
                }
            });
        });
    </script>
@endsection
