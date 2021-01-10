<div class="navbar navbar-expand-sm navbar-main {{ config("flowdash.navbarClass.{$layout}") }} {{ $navbarClass ?? '' }} pr-0" id="navbar" data-primary>
  <div class="{{ $navbarContainerClass ?? ($containerClass ?? 'container') }} {{ $layout !== 'fixed' ? 'p-0' : '' }}">

    <!-- Navbar toggler -->
    @if(count(array_intersect([$layout ?? ''], ['fluid', 'mini'])) > 0)
      <button class="navbar-toggler navbar-toggler-custom navbar-toggler-right d-block" type="button" data-toggle="sidebar">
        <span class="material-icons">apps</span>
      </button>
    @else
      <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
        <span class="navbar-toggler-icon"></span>
      </button>
    @endif

    <!-- Navbar Brand -->
    <a href="{{ route('home') }}" class="navbar-brand {{ $navbarBrandClass ?? '' }}">
      <img class="navbar-brand-icon pl-4" src="{{ asset('storage/Logo_OmniNovel.png') }}" width="150" alt="OmniNovel Novel Writing Software">
    </a>

    @if($layout === 'mini')
    <div class="navbar-collapse collapse flex">
      @include('flowdash::partials.navbar-menu')
    </div>
    @endif

    @if($navbarSearch ?? true !== false)
    <form class="search-form d-none d-sm-flex flex" action="{{ route('home') }}">
      <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
      <input type="text" class="form-control" placeholder="Search">
    </form>
    @else
      @if($layout !== 'mini')
        <div class="flex"></div>
      @endif
    @endif

    <ul class="nav navbar-nav ml-auto d-none d-md-flex">
      <li class="nav-item dropdown">
        <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
          <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
        </a>
        <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
          <div class="dropdown-item d-flex align-items-center py-2">
            <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
            <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
          </div>
          <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
            <div class="py-2">
              @foreach([1,2,3] as $item)
              <div class="dropdown-item d-flex">
                <div class="mr-3">
                  <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                    <img src="{{ asset('/vendor/flowdash/images/256_daniel-gaffey-1060698-unsplash.jpg') }}" alt="Avatar" class="avatar-img rounded-circle">
                  </div>
                </div>
                <div class="flex">
                  <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                  <small class="text-muted">1 minute ago</small>
                </div>
              </div>
              <div class="dropdown-item d-flex">
                <div class="mr-3">
                  <a href="#">
                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                      <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                    </div>
                  </a>
                </div>
                <div class="flex">
                  New user <a href="#">Peter Parker</a> signed up.<br>
                  <small class="text-muted">1 hour ago</small>
                </div>
              </div>
              <div class="dropdown-item d-flex">
                <div class="mr-3">
                  <a href="#">
                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                      <span class="avatar-title rounded-circle">JD</span>
                    </div>
                  </a>
                </div>
                <div class="flex">
                  <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                  <div>Hey, how are you? What about our next meeting</div>
                  <small class="text-muted">2 minutes ago</small>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
        </div>
      </li>
    </ul>

    <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
        <!-- Authentication Links -->
        @guest
            <div class="nav-item {{ activeClass('pricing') }}">
                <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
            </div>
            <div class="nav-item {{ activeClass(['login', 'welcome']) }}">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            @if (Route::has('register'))
                <div class="nav-item {{ activeClass('register') }}">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif
        @else
        <div id="account">
            <Account></Account>
        </div>
        @endguest
    </ul>

  </div>
</div>
