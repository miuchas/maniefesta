@extends('layouts.login')

@section('content')
.container
  .row
    .col-md-8.col-md-offset-2
      .panel.panel-default
        .panel-heading Reset Password
        .panel-body
          %form.form-horizontal{:action => "{{ route('password.request') }}", :method => "POST"}
            {{ csrf_field() }}
            %input{:name => "token", :type => "hidden", :value => "{{ $token }}"}
            .form-group{ :class => $errors->has('email') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "email"} E-Mail Address
              .col-md-6
                %input#email.form-control{:autofocus => "", :name => "email", :required => "", :type => "email", :value => $email || @old('email') }
                @if ($errors->has('email'))
                %span.help-block
                  %strong {{ $errors->first('email') }}
                @endif
            .form-group{ :class => $errors->has('password') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "password"} Password
              .col-md-6
                %input#password.form-control{:name => "password", :required => "", :type => "password"}
                @if ($errors->has('password'))
                %span.help-block
                  %strong {{ $errors->first('password') }}
                @endif
            .form-group{ :class => $errors->has('password_confirmation') ? ' has-error' : ''}
              %label.col-md-4.control-label{:for => "password-confirm"} Confirm Password
              .col-md-6
                %input#password-confirm.form-control{:name => "password_confirmation", :required => "", :type => "password"}
                @if ($errors->has('password_confirmation'))
                %span.help-block
                  %strong {{ $errors->first('password_confirmation') }}
                @endif
            .form-group
              .col-md-6.col-md-offset-4
                %button.btn.btn-primary{:type => "submit"}
                  Reset Password
@endsection
