<!DOCTYPE html>
<html>

<head>
    <title>Kerala Knots Password Reset Link</title>
</head>

<body>
    Dear {{ $user->name }},
    <p>Your password reset link shown below.</p><br />
    <a href="{{ route('reset.password', encrypt($user->id)) }}" target="_blank">Click here to reset your password</a>
    <br />
    <br />
    Regards,<br />
    PPF Kuwait.
</body>

</html>