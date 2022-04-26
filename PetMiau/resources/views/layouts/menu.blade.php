<header>
    <nav class="navbar navbar-expand-md menuAdm ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
            <div class="navbar-nav">
            
              <a class="nav-link menuAdm" href="{{route('user.index')}}" >Usuarios</a>
           
              <a class="nav-link menuAdm" href="{{route('pet.index')}}">Pets</a>
            
              <a class="nav-link menuAdm" href="{{route('tipo.index')}}">Tipos</a>
            
              <a class="nav-link menuAdm" href="{{route('vacina.index')}}">Vacinas</a>
    
              <a class="nav-link menuAdm" href="{{route('noticia.index')}}">Noticias</a>
    
    
          
              <div class="nav-link d-flex  menuAdm">{{ Auth::user()->name }}</div>
          
              <div class="text-white" >
    
              <form  method="POST" action="{{ route('logout') }}">
                @csrf
    
              
                <x-responsive-nav-link :href="route('logout')" class="text-white navbar-nav d-flex " style="text-decoration: underline;" onclick="event.preventDefault();
                                            this.closest('form').submit();" >
                  {{ __('Log out') }}
                </x-responsive-nav-link>
              </form>
          
              </div>
    
    
            </div>
          </div>
        </div>
      </nav>
    </header>

