<!DOCTYPE html>
<html>
  <head>
    <title>Página de inicio de aprendizaje</title>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    @yield('style')
  </head>
  <body>
    <header class="arriba">
      <x-application-logo></x-application-logo>
      <h1 >Bienvenido a la red momentum</h1>
      <div class="sesion">
            @if (Route::has('login'))
                <div >
                    @auth
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }}</button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="{{route('profile.edit')}}">Perfil</a>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
                    @else
                        <a href="{{ route('login') }}" class="link">Inicio de sesion</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="link">Registrate</a>
                        @endif
                    @endauth
                </div>
            @endif
            
    </header>
    <main>
        @yield('content')
    </main>    
    <footer>
      <p>Derechos de autor © 2023 Momentum. Todos los derechos reservados.</p>
      <a href="https://www.instagram.com/p/CuVVUHJOQ4G/?igshid=MTc4MmM1YmI2Ng=="><img src="{{ asset('img/instagram.svg') }}" alt=""></a>
      <a href="#"><img src="{{ asset('img/sobre.svg') }}" alt=""></a>
      <a href="#"><img src="{{ asset('img/whatsapp.svg') }}" alt=""></a>   
    </footer>
    <script src="{{ asset('js/drop.js') }}"></script>
  </body>
</html>