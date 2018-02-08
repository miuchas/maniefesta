#work.page
  .container
    / Title Page
    .row
      .span12
        .title-page
          %h2.title Our Work
          %h3.title-description
            Check Out Our Projects on
            -# = succeed "." do
            -#   %a{:href => "#"} Dribbble
    / End Title Page
    / Portfolio Projects
    .row
      .span3
        / Filter
        @include("site_partials/_galeria_categorias")
        / End Filter

      .span9
        .row
          @include("site_partials/_galeria_itens")
    / End Portfolio Projects
