!!!
%html
  %head
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    / CSRF Token
    %meta{:content => "{{ csrf_token() }}", :name => "csrf-token"}
    %title
    / Styles
    %link{:href => 'css/app.css', :rel => "stylesheet"}
  %body
    #app
      %nav.navbar.navbar-default.navbar-static-top
        .container
          .navbar-header
            / Collapsed Hamburger
            %button.navbar-toggle.collapsed{"aria-expanded" => "false", "data-target" => "#app-navbar-collapse", "data-toggle" => "collapse", :type => "button"}
              %span.sr-only Toggle Navigation
              %span.icon-bar
              %span.icon-bar
              %span.icon-bar
            / Branding Image
            %a.navbar-brand{:href => "#"}
          #app-navbar-collapse.collapse.navbar-collapse
            / Left Side Of Navbar
            %ul.nav.navbar-nav
              \ 
            / Right Side Of Navbar
            %ul.nav.navbar-nav.navbar-right
              / Authentication Links
              @guest
              %li
                %a{:href => "/login"} Login
              %li
                %a{:href => "/register"} Register
              @else
              %li.dropdown
                %a.dropdown-toggle{"aria-expanded" => "false", "aria-haspopup" => "true", "data-toggle" => "dropdown", :href => "#", :role => "button"}
                  {{ Auth::user()->name }}
                  %span.caret
                %ul.dropdown-menu
                  %li
                    %a{:href => "/logout", :onclick => "event.preventDefault();document.getElementById('logout-form').submit();"}
                      Logout
                    %form#logout-form{:action => "logout", :method => "POST", :style => "display: none;"}
                      {{ csrf_field() }}
              @endguest
      @yield('content')
    / Scripts
    %script{:src => "/js/app.js"}
