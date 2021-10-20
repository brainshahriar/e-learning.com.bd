<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="email" data-ng-model="name"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="validate">
                            <label>Email</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate" name="password" required autocomplete="current-password">
                            <label>Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name1" class="validate" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label>User name</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" class="validate" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label>Email id</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="text" class="validate" name="phone" value="{{ old('phone') }}" autocomplete="phone">
                            <label>Phone</label>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate" name="password" required autocomplete="new-password">
                            <label>Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                            <label>Confirm password</label>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('frontend') }}/images/cancel.png" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
