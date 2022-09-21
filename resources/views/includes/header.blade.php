
  

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Home Comics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if (Route::is('comics.index')) active @endif" href="{{ route('comics.index') }}">Comics index</a>
  </li>
</ul>

<div class="jumbo">

</div>