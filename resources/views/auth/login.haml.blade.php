@extends('layouts.login')

@section('content')
.container
  .row
    .col-md-8.col-md-offset-2
      .panel.panel-default
        .panel-heading Login
        .panel-body
          %form.form-horizontal{:action => "/login", :method => "POST"}
            {{ csrf_field() }}
            .form-group{  :class => $errors->has('email') ? 'has-error' : '' }
              %label.col-md-4.control-label{:for => "email"} E-Mail Address
              .col-md-6
                %input#email.form-control{:name => "email", :type => "email", :value => @old('email')}
                @if ($errors->has('email'))
                %span.help-block
                  %strong {{ $errors->first('email') }}
                @endif
            .form-group{ :class => $errors->has('password') ? 'has-error' : ''}
              %label.col-md-4.control-label{:for => "password"} Password
              .col-md-6
                %input#password.form-control{:name => "password", :type => "password"}
                  @if ($errors->has('password'))
                  %span.help-block
                    %strong {{ $errors->first('password') }}
                  @endif
              .form-group
                .col-md-6.col-md-offset-4
                  .checkbox
                    %label
                      %input{:name => "remember", :type => "checkbox", :checked => "@old('remember')" ? 'checked' : 'false'}
                      Remember Me
              .form-group
                .col-md-8.col-md-offset-4
                  %button.btn.btn-primary{:type => "submit"}
                    Login
                  %a.btn.btn-link{:href => "#"}
                    Forgot Your Password?
@endsection
