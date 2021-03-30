<!-- drawer -->
<div class="mdk-drawer js-mdk-drawer {{ $drawerClass ?? '' }}" data-align="{{ $drawerAlign ?? 'start' }}" id="default-drawer">
  <div class="mdk-drawer__content">
    <div class="sidebar sidebar-left sidebar-p-t {{ config("flowdash.sidebarClass.{$layout}") }}" data-perfect-scrollbar>


        <div class="sidebar-heading sidebar-m-t">Current Book</div>

        <div id="book">
            <Selector></Selector>
        </div>

      <div class="sidebar-heading sidebar-m-t">Menu</div>

      <ul class="sidebar-menu">
          <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
              <a class="sidebar-menu-button" href="{{ route('dashboard') }}">
                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                  <span class="sidebar-menu-text">Dashboard</span>
              </a>
          </li>
          <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
              <a class="sidebar-menu-button" href="{{ route('book') }}">
                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i>
                  <span class="sidebar-menu-text">Books</span>
              </a>
          </li>
          <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
              <a class="sidebar-menu-button" href="{{ route('chapters') }}">
                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">bookmarks</i>
                  <span class="sidebar-menu-text">Chapters</span>
              </a>
          </li>
      </ul>


      <div class="sidebar-heading sidebar-m-t">Components</div>

        <ul class="sidebar-menu">
            <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
                <a class="sidebar-menu-button" href="{{ route('characters') }}">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>
                    <span class="sidebar-menu-text">Characters</span>
                </a>
            </li>
            <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
                <a class="sidebar-menu-button" href="{{ route('scenes') }}">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">map</i>
                    <span class="sidebar-menu-text">Scenes</span>
                </a>
            </li>
            <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
                <a class="sidebar-menu-button" href="{{ route('wiki') }}">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                    <span class="sidebar-menu-text">Wiki</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-heading sidebar-m-t">Collaboration</div>

        <ul class="sidebar-menu">
            <li class="sidebar-menu-item {{ activeClass('ui-buttons') }}">
                <a class="sidebar-menu-button" href="{{ route('collaborators') }}">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                    <span class="sidebar-menu-text">Collaborators</span>
                </a>
            </li>
        </ul>

      <div class="sidebar-block p-0 mb-0">
        <div class="sidebar-p-a sidebar-b-y">
          <div class="d-flex align-items-top mb-2">
            <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Goal Progress</div>
            <div class="font-weight-bold text-success">60%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>

        <div class="sidebar-p-a">
            <a href="" class="btn btn-primary btn-block">Activate Now for All Features! </a>
        </div>

    </div>
  </div>
</div>
<!-- // END drawer -->
