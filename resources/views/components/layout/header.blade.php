<header class="lg:hidden bg-header flex flex-col justify-center items-center  py-2 space-y-1">
    <img class="h-3/5" src="{{ asset("images/logos/logo_nett.png") }}" alt="logo nett">
    <button class="h-1/5 w-full btn bg-main "> Acceder</button>
    <button class="h-1/5 w-full btn  bg-main">Registrar</button>
</header>
<header class="hidden lg:flex h-15v bg-header flex flex-row justify-center items-center">
    <img class="w-1/5 max-h-full w-auto  p-5 " src="{{asset("images/logos/logo_nett.png")}}" alt="logo nett">
    <div class="w-3/5 flex justify-center items-center">
        <h1 class="text-3xl text-white h-auto max-w-full truncate ">APLICACIÓN EJEMPLO LARAVEL</h1>
    </div>
    @guest
        <div class=" w-1/5 h-auto max-w-full flex items-center space-x-4 ">
            <a href="login" class="btn glass  text-white"> Acceder</a>
            <a href="register"  class="btn  glass text-white">Registrar</a>
        </div>
    @endguest
    @auth

        <h1 class="text-white text-2xl"> {{auth()->user()->name}} </h1>
        <form action="{{route("logout")}}" method="POST">
            @csrf
            <input class="btn glass" type="submit" value="Logout">
        </form>

    @endauth
</header>
