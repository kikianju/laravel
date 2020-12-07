<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
        <form id="frm" action="top" method="POST">
        @csrf
            {{$user}}

            <P>
                <label>Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" />
            </p>
            <P>
                <label>Password:</label>
                <input type="Password" id="password" name="password" placeholder="Enter Password" />
            </p>
            <P>
                <button onclick="javescript:document.frm.submit();">login</button>

                <button type="button" onclick="location.href='signup' ">sign up</button>
            </p>
        </form>
    </div>
</body>
</html>
