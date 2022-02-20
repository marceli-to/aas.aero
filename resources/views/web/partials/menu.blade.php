<nav class="site-menu js-menu">
  <ul>
    <li>
      <a href="{{ route('page.stations')}}" class="{{ request()->routeIs('page.stations') ? 'is-active' : '' }}">Stations</a>
    </li>
    <li>
      <a href="{{ route('page.contacts')}}" class="{{ request()->routeIs('page.contacts') ? 'is-active' : '' }}">Contacts</a>
    </li>
    <li>
      <a href="{{ route('page.career')}}" class="{{ request()->routeIs('page.career') ? 'is-active' : '' }}">Career</a>
    </li>
  </ul>
</nav>