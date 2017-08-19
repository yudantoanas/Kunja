<nav>
	<div class="nav-wrapper">
	  <a href="/" class="brand-logo center">
	  	<img src="{{ URL::asset('imgs/logo-white.png') }}" width="200px">
	  </a>

	  @if(Auth::user())
	  <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="/list-praktikum">List Praktikum</a></li>
	    <li><a href="/add-praktikum">Tambah Praktikum</a></li>
	  </ul>
	  <ul id="nav-mobile" class="right hide-on-med-and-down">
	    <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
	  </ul>
	  @endif
	</div>
</nav>