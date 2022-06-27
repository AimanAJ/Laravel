<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/registratio.css" rel="stylesheet">
    <title>Register Form</title>


</head>
<body >
    @if ($message = Session::get('success'))
    <div>
        <div class="success" >{{ $message }}</div>
    </div> 
    @endif
    <form action="update" method="POST" id="form">
        @csrf
        <h2>Register</h2>
        <div>
            <input type="text" name="username"  id="" class="input" placeholder="Username">
        </div> 

        <div>
        @error('username')
            <div class="danger" >{{ $message }}</div>
        @enderror
        </div> 
        
        <div>
            <input type="email" id="" name="email"  class="input" placeholder="Email Address">
        </div>

        <div>
            @error('email')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 
        <div>
             <input type="password" id="" name="password" class="input" placeholder="Password">
        </div>

        <div>
            @error('password')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <input type="password"  id="" name="confirm_password"  class="input" placeholder="Confirm Password">
        </div>

        <div>
            @error('confirm_password')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 

        @if ($message = Session::get('fail'))
        <div>
            <div class="danger" >{{ $message }}</div>
        </div> 
        @endif
        
        <div>
            <button type="submit" id="register">REGISTER</button>
        </div>

         <div>
            <button id="sing">Sign in</button>
        </div>

        <div>
            <button id="google">SIGN UP WITH GOOGLE</button>
        </div>

        <div>
             <button id="facebook">SIGN UP WITH FACEBOOK</button>
        </div>

    </form>
</body>
</html>