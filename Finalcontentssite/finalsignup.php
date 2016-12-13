<!doctype>
<head>
<title>Dennis Rumohr's Sanctuary</title>
</head>
<?php $name = $_POST['name']; $email = $_POST['email'];

if (!$name) { 
echo "<p>Please <a href=\"javascript:history.back()\">go back</a> and enter your name</a></p>";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<p>Please <a href=\"javascript:history.back()\">go back</a> and enter a correctly formatted email</a></p>";
}
else{
echo "<h2>YOUR INPUTTED INFORMATION...</h2>";


echo "Welcome $name. Thank you for joining me. Your name will be added to the joined list soon.";
}?>