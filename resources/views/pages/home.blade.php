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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page avec Navbar et Déconnexion</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">VotreSite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fonctionnalité</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tarification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-danger" href="{{route('logout')}}">Déconnexion</a>
        </li>
      </ul>
    </div>
  </nav>
  @if (session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <div class="container mt-5">
    <h1>Bienvenue sur VotreSite</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil deserunt distinctio laborum ullam modi excepturi blanditiis optio explicabo dolores asperiores hic, fugiat atque aliquid at laboriosam illum dignissimos iusto.</p>
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 5000); // 5000 ms = 5 seconds
        }
    });
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
