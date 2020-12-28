<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <link rel="icon"type="image/png" href="\xampp\htdocs\identification\login.php"/>
</head>
<body>
    <div class="container-login">
        <div class="wrap-login">
        <div class="login-form-title" style="background-image: url(image1.jpg);">
        sign in 
    </div> 
    < class="login-form validate-form"methode="post" action="login.php">
        <div class="wrap-input validate-form "data-validate="Email is required">
            <span class="label-input">Email</span>
        </div>
        <div class="wrap-input "data-validate="password is required">
            <span class="label-input"> Password</span>
            <input class="input"type="password" name="pass"placeholder="Enter password">
        </div>
        <div class="contact-form-checkbox">
            <input class="input-checkbox" id="ckbox"type="checkbox"name="rember-me">
            <label class="label-checkbox" for="ckbox"></label>
            Remember me 
        </div>
        <div>
            <a href="#" class="txt">
                Forgot password?
            </a>
        </div>  
        </div>
        <div class="container-login-form-btn">
            <button class="login-form-btn" name="submit">
                Login
            </button>
        </div>
</form> 
    </div>
    </div>
    </div>    


</body>