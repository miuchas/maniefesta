#contact.page
  .container
    / Title Page
    .row
      .span12
        .title-page
          %h2.title Get in Touch
          %h3.title-description We’re currently accepting new client projects. We look forward to serving you.
    / End Title Page
    / Contact Form
    .row
      .span9
        %form#contact-form.contact-form{:action => "#"}
          %p.contact-name
            %input#contact_name{:name => "name", :placeholder => "Full Name", :type => "text", :value => ""}/
          %p.contact-email
            %input#contact_email{:name => "email", :placeholder => "Email Address", :type => "text", :value => ""}/
          %p.contact-message
            %textarea#contact_message{:cols => "40", :name => "message", :placeholder => "Your Message", :rows => "15"}
          %p.contact-submit
            %a#contact-submit.submit{:href => "#"} Send Your Email
          #response
      .span3
        .contact-details
          %h3 Contact Details
          %ul
            %li
              %a{:href => "#"} hello@brushed.com
            %li (916) 375-2525
            %li
              Brushed Studio
              %br/
              5240 Vanish Island. 105
              %br/
              Unknow
    / End Contact Form
