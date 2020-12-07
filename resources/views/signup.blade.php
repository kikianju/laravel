<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
    <form id="frm1" action="signupdone" method="POST">
        @csrf

        <h1>Sign Up Form</h1>
        @if(isset($error))
            {{$error}}
        @endif

        <P>
            <label>Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" />
        </p>
        <P>
            <label>Password:</label>
            <input type="Password" id="password1" name="password1" placeholder="Enter Password" />
        </p>
        <P>
            <label>Check Password:</label>
            <input type="Password" id="password2" name="password2" placeholder="Enter Password"  onblur="passchk()" />
        </p>
        <P>
            <button type="button" onclick="location.href='signupdone' ">cancle</button>
            <button onclick="javescript:document.frm1.submit();">done</button>
        </p>

    </form>
</div>
</body>
</html>
