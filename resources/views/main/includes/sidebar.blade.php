<aside class="col-12 col-md-12 col-lg-2">
  <div class="sidebar box sticky-column">
    <ul class="nav">
      <li class="nav__item"><a class="{{ (Request::is('/') || Request::is('about')) ? "active" : "" }}"
          href="{{ route('about') }}"><i class="icon-user"></i>About</a></li>
      <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'resume') ? "active" : "" }}"
          href="{{ route('resume') }}"><i class="icon-file-text"></i>Resume</a></li>
      <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'portfolio') ? "active" : "" }}"
          href="{{ route('portfolio') }}"><i class="icon-codesandbox"></i>Portfolio</a></li>
      {{-- <li class="nav__item"><a href="{{ route('blog') }}"><i class="icon-book-open"></i>Blog</a></li> --}}
      <li class="nav__item"><a href="https://dev.to/adityacprtm"><i class="icon-book-open"></i>Blog</a></li>
      <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'contact') ? "active" : "" }}"
          href="{{ route('contact') }}"><i class="icon-book"></i>Contact</a></li>
    </ul>
  </div>
</aside>