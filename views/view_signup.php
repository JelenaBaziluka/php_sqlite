<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="/signup" method="POST" onsubmit="return validate()">
<input name="signup_user_name" type="text" placeholder="name"
    data-validate="name"
  ></br>
  <input name="signup_user_lastname" type="text" placeholder="lastname"
    data-validate="lastname"
  ></br>
  <input name="login_user_email" type="text" placeholder="email"
    data-validate="email"
  ></br>
  <input name="signup_user_phone" type="text" placeholder="phone"
    data-validate="phone"
  ></br>
  <input name="login_user_password" type="password" placeholder="password" maxlength="50"
    data-validate="str" data-min="2" data-max="50"
  ></br>
  <button>
    Sign In
  </button>
</form>
</body>
</html>