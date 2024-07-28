@extends('../layout.base')
@section('body')
<body class="flex justify-center items-center overflow-hidden">
    <main class="h-[550px] md:h-[550px] w-full mx-4 md:w-[500px] sm:w-[400px]">
        <form action="" class="p-5 border h-full rounded-2xl bg-white shadow-lg">
          <div class="flex justify-center items-center">
            <img
              src="https://asmaboutik.com/wp-content/uploads/2024/03/Blue-Minimalist-Initial-A-Letter-Logo.svg"
              alt=""
              class="w-[150px]"
            />
          </div>
    
          <h1 class="font-medium text-[28px] mb-8 text-center">
            Espace de connexion
          </h1>
          <div class="">
            <!-- div email -->
            <div>
              <label for="identifiant" class="block text-[15px] font-medium"
                >Identifiant</label
              >
              <input
                type="text"
                id="identifiant"
                name="identifiant"
                placeholder="Veuillez entrer votre identifiant"
                class="mt-1 bg-gray-100 border-none p-3 w-full rounded-md shadow-sm focus:border-sky-800 focus:ring-sky-800 text-[14px]"
              />
            </div>
    
            <!-- div mot de passe  -->
            <div class="mt-6">
              <label for="password" class="block text-[15px] font-medium"
                >Mot de passe</label
              >
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Veuillez entrer votre mot de passe"
                class="mt-1 border-none bg-gray-100 w-full p-3 rounded-md focus:border-sky-800 focus:ring-sky-800 text-[13px]"
              />
            </div>
    
            <!-- div button and remmeber me  -->
            <div class="mt-4 flex justify-between items-center">
              <div>
                <input
                  type="checkbox"
                  id="rememberMe"
                  name="rememberMe"
                  class="h-4 w-4 rounded border-gray-300 text-sky-800 focus:ring-gray-50"
                />
                <label for="rememberMe" class="ml-2 text-[12px] font-medium">
                  Se souvenir de moi
                </label>
              </div>
              <a href="index.html" class="text-[12px] font-medium text-sky-800"
                >Mot de passe oublié ?</a
              >
            </div>
            <div class="mt-5 text-center flex justify-center items-center">
              <button
                type="submit"
                class="border w-[190px] p-3 rounded-xl bg-sky-800 text-white text-[14px] font-medium"
              >
                Connexion
              </button>
            </div>
          </div>
        </form>
      </main> 
</body>
@endsection