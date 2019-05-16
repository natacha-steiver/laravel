{{--
  ./resources/views/pages/menu.blade.php
  Variables disponibles
      - $pages ARRAY(ARRAY(id, titre, ...))
 --}}
<ul class="navbar-nav ml-auto">
  @foreach ($categorie as $categories)
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::Route('pages.show', $page->id) }}">
        {{ $categorie->nom }}
      </a>
    </li>
  @endforeach
</ul>




    </body>
</html>
