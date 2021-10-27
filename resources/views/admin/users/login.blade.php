
<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.head')
</head>
<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="/admin/users/login/store" method="post">
                    <h1>Login Form</h1>
                    @include('admin.alert')
                    <div>
                        <input type="text" class="form-control" name="email" placeholder="Email"  />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="row">
                        <div>
                            <div>
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-primary">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>
                    </div>
                    @csrf
                </form>
            </section>
        </div>
    </div>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a2be78753af480a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a2be786eb9a480a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
</body>
</html>
