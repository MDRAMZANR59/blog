<nav id="ttr_menu" class="navbar-default navbar">
        <div id="ttr_menu_inner_in">
          <div class="menuforeground"></div>
          <div id="navigationmenu">
            <div class="navbar-header">
              <button
                id="nav-expander"
                data-target=".navbar-collapse"
                data-toggle="collapse"
                class="navbar-toggle"
                type="button"
              >
                <span class="sr-only"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
              </button>
              <a href="http://www.templatetoaster.com" target="_self">
                <img class="ttr_menu_logo" src="{{asset('frontend/menulogo.png')}}" />
              </a>
            </div>
            <div class="menu-center collapse navbar-collapse">
              <ul class="ttr_menu_items nav navbar-nav navbar-right">
                <li class="ttr_menu_items_parent dropdown active">
                  <a href="{{route('home')}}" class="ttr_menu_items_parent_link_active"
                    ><span class="menuchildicon"></span>Home</a
                  >
                  <hr class="horiz_separator" />
                </li>
                <li class="ttr_menu_items_parent dropdown">
                  <a href="{{route('allBlog')}}" class="ttr_menu_items_parent_link"
                    ><span class="menuchildicon"></span>Blog List</a
                  >
                  <hr class="horiz_separator" />
                </li>
                <li class="ttr_menu_items_parent dropdown">
                  <a href="{{route('login')}}" class="ttr_menu_items_parent_link"
                    ><span class="menuchildicon"></span>Login</a
                  >
                  <hr class="horiz_separator" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
