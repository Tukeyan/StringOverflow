<script src="secure/popupFunctions.js"></script>
<div id="popupGreyout">
<div id="popupLogin">
<title>Login Page</title>
<form action="secure/authenticate.php" id="login" method="post" name="login">
<img id="close" src='link to close image' onclick ="login_hide()">
<h1>Login Page</h1>
<hr id="popupLogin">
<label for="username">Username:</label><input type="text" name="username" id="username"><br>
<label for="password">Password:</label><input type="password" name="password" id="password"><br>
<a href="javascript:%20check_empty()" id="submit" type="submit" name="submit" value="Login">Login</a>
</form></div></div>