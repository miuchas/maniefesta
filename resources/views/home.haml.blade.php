!!!
/[if lt IE 7] <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
/[if (IE 7)&!(IEMobile)] <html class="no-js lt-ie9 lt-ie8" lang="en">
/[if (IE 8)&!(IEMobile)] <html class="no-js lt-ie9" lang="en">
/[if (IE 9)] <html class="no-js ie9" lang="en">
/ [if gt IE 8]><!
%html{:lang => "pt-BR"}
  / <![endif]
  %head
    / Meta Tags
    %meta{:charset => "utf-8"}
    %meta{:content => "IE=edge", "http-equiv" => "X-UA-Compatible"}
    %meta{:content => "text/html; charset=UTF-8", "http-equiv" => "Content-Type"}
    %title Maniefesta
    %meta{:content => "Maniefesta, site destinado a comercialização interpessoal de roupas e acessorios", :name => "Maniefesta"}
    / Mobile Specifics
    %meta{:content => "width=device-width, initial-scale=1", :name => "viewport"}
    %meta{:content => "true", :name => "HandheldFriendly"}
    %meta{:content => "320", :name => "MobileOptimized"}

    / Bootstrap
    %link{:href => "/css/bootstrap.min.css", :rel => "stylesheet"}
    / Main Style
    %link{:href => "/css/main.css", :rel => "stylesheet"}
    / Supersized
    %link{:href => "/css/supersized.css", :rel => "stylesheet"}
    %link{:href => "/css/supersized.shutter.css", :rel => "stylesheet"}
    / FancyBox
    %link{:href => "/css/fancybox/jquery.fancybox.css", :rel => "stylesheet"}
    / Font Icons
    %link{:href => "/css/fonts.css", :rel => "stylesheet"}
    / Shortcodes
    %link{:href => "/css/shortcodes.css", :rel => "stylesheet"}
    / Responsive
    %link{:href => "/css/bootstrap-responsive.min.css", :rel => "stylesheet"}
    %link{:href => "/css/responsive.css", :rel => "stylesheet"}
    / Supersized
    %link{:href => "/css/supersized.css", :rel => "stylesheet"}
    %link{:href => "/css/supersized.shutter.css", :rel => "stylesheet"}
    / Google Font
    %link{:href => "http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900", :rel => "stylesheet", :type => "text/css"}
    / Fav Icon
    %link{:href => "#", :rel => "shortcut icon"}
    %link{:href => "#", :rel => "apple-touch-icon"}
    %link{:href => "#", :rel => "apple-touch-icon", :sizes => "114x114"}
    %link{:href => "#", :rel => "apple-touch-icon", :sizes => "72x72"}
    %link{:href => "#", :rel => "apple-touch-icon", :sizes => "144x144"}
    / Modernizr
    %script{:src => "/js/modernizr.js"}
    / Analytics
    :javascript
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'Insert Your Code']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    / End Analytics
  %body
    / This section is for Splash Screen
    .ole
      %section#jSplash
        #circle
    / End of Splash Screen

    / Homepage Slider
    @include("site_partials/_banner_rotativo")
    / End Homepage Slider

    / Header
    @include("site_partials/_menu")
    / End Header

    / Our Work Section
    @include("site_partials/_galeria")
    / End Our Work Section

    / About Section
    @include("site_partials/_sobre")
    / End About Section

    / Contact Section
    @include("site_partials/_contato")
    / End Contact Section

    / Depoiment Section
    @include("site_partials/_depoimentos")
    / End Depoiment Section

    / Socialize
    @include("site_partials/_redes_sociais")
    / End Socialize

    / Footer
    %footer
      %p.credits
        Desenvolvido por
        Phelipe Evangelita Simim Diniz
    / End Footer

    / Back To Top
    %a#back-to-top{:href => "#"}
      %i.font-icon-arrow-simple-up
    / End Back to Top
    / Js
    %script{:src => "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"}
    / jQuery Core
    %script{:src => "/js/bootstrap.min.js"}
    / Bootstrap
    %script{:src => "/js/supersized.3.2.7.min.js"}
    / Slider
    %script{:src => "/js/waypoints.js"}
    / WayPoints
    %script{:src => "/js/waypoints-sticky.js"}
    / Waypoints for Header
    %script{:src => "/js/jquery.isotope.js"}
    / Isotope Filter
    %script{:src => "/js/jquery.fancybox.pack.js"}
    / Fancybox
    %script{:src => "/js/jquery.fancybox-media.js"}
    / Fancybox for Media
    %script{:src => "/js/jquery.tweet.js"}
    / Tweet
    %script{:src => "/js/plugins.js"}
    / Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi
    %script{:src => "/js/main.js"}
    / Default JS
    / End Js
