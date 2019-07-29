
<div class="container">
    <div class="w3layouts_logo">
        <a href="index.html"><h1>One<span>Movies</span></h1></a>
    </div>
    <div class="w3_search">
        <form action="#" method="post">
            <input type="text" name="Search" placeholder="Search" required="">
            <input type="submit" value="Go">
        </form>
    </div>
    <div class="w3l_sign_in_register">
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        </ul>
    </div>
</div>

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Register</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
                                <form action="{{ route('login') }}" method="post">
                                @csrf

                                <input type="email" id="email" name="email" placeholder="Email Address" @error('email') is-invalid @enderror value="{{ old('email') }}" required="" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="password" id="password" name="password" placeholder="Password"  @error('password') is-invalid @enderror required="" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

								<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

								</form>
							  </div>
							  <div class="form">
								@include('auth.register')
							  </div>
							  <div class="cta">
                                  <a href="{{ route('password.request') }}">Forgot your password?</a> |
                                  <a href="{{ route('auth.activate.resend') }}">Resend Activation Email?</a>
                              </div>

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
    </div>
    </div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->



