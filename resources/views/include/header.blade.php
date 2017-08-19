<nav>
  <div class="nav-wrapper blue">
		<a href="/" class="brand-logo">
	  	<img src="{{ URL::asset('imgs/logo-white.png') }}" width="200px">
	  </a>
		@if(Auth::user())
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="/list-praktikum">List Praktikum</a></li>
	    <li><a href="/add-praktikum">Tambah Praktikum</a></li>
		</ul>
    <ul class="right hide-on-med-and-down">
			<!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Praktikum<i class="material-icons right">arrow_drop_down</i></a></li>
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
    <ul class="side-nav" id="mobile-demo">
			<li><a href="/list-praktikum">List Praktikum</a></li>
	    <li><a href="/add-praktikum">Tambah Praktikum</a></li>
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
	@else
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/list-praktikum">List Praktikum</a></li>
			<li><a href="/login">Login</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
      <li><a href="/list-praktikum">List Praktikum</a></li>
			<li><a href="/login">Login</a></li>
	@endif
  </div>
</nav>
@section('other')
<script type="text/javascript">
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>
@endsection
