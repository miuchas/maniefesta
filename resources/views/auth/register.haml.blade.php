@extends('layouts.login')
<!-- /password/reset -->
@section('content')
.container
  .row
    .col-md-8.col-md-offset-2
      .panel.panel-default
        .panel-heading Register
        .panel-body
          %form.form-horizontal{:action => "/register", :method => "POST"}
            {{ csrf_field() }}
            .form-group{ :class => $errors->has('name') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "name"} Name
              .col-md-6
                %input#name.form-control{:autofocus => "", :name => "name", :required => "", :type => "text", :value => @old('name') }
                @if ($errors->has('name'))
                %span.help-block
                  %strong {{ $errors->first('name') }}
                @endif
            .form-group{ :class => $errors->has('email') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "email"} E-Mail Address
              .col-md-6
                %input#email.form-control{:name => "email", :required => "", :type => "email", :value => @old('email')}
                @if ($errors->has('email'))
                %span.help-block
                  %strong {{ $errors->first('email') }}
                @endif
            .form-group{ :class=> $errors->has('password') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "password"} Password
              .col-md-6
                %input#password.form-control{:name => "password", :required => "", :type => "password"}
                @if ($errors->has('password'))
                %span.help-block
                  %strong {{ $errors->first('password') }}
                @endif
            .form-group
              %label.col-md-4.control-label{:for => "password-confirm"} Confirm Password
              .col-md-6
                %input#password-confirm.form-control{:name => "password_confirmation", :required => "", :type => "password"}
            .form-group
              .col-md-6.col-md-offset-4
                %button.btn.btn-primary{:type => "submit"}
                  Register
@endsection
