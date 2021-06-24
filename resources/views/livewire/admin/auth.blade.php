<div>
  <form method="POST" action="#" class="needs-validation" novalidate="">
    @component('components.input.input')
        @slot('formclass', 'form-group')
        @slot('label', 'email')
        @slot('name', 'email')
        @slot('typeinput', 'text')
        @slot('typemodel', 'defer')
    @endcomponent

    <div class="form-group">
      <div class="d-block">
        <label for="password" class="control-label">Password</label>
        <div class="float-right">
          <a href="auth-forgot-password.html" class="text-small">
            Forgot Password?
          </a>
        </div>
      </div>
      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
      <div class="invalid-feedback">
        please fill in your password
      </div>
    </div>

    <div class="form-group">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
        Login
      </button>
    </div>
  </form>
