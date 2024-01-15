
<strong><a href="https://adminlte.io"></a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <a class="btn btn-dark" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
   
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>
