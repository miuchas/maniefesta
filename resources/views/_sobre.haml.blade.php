#about.page-alternate
  .container
    / Title Page
    .row
      .span12
        .title-page
          %h2.title About Us
          %h3.title-description Learn About our Team & Culture.
    / End Title Page
    / People
    .row
      / Start Profile
      @include("_sobre_fotos")
      @include("_sobre_fotos")
      @include("_sobre_fotos")
      / End Profile
    / End People
