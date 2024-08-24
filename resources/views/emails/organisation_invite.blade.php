<!DOCTYPE html>
<html>
<head>
    <title>Invitation to Join {{ $organisationName }}</title>
</head>
<body>
    <h1>You're Invited!</h1>
    <p>You have been invited to join the organization <strong>{{ $organisationName }}</strong>.</p>
    <p>Click the link below to accept the invitation and join the organization:</p>
    <p><a href="{{ $inviteLink }}">{{ $inviteLink }}</a></p>
    <p>If you did not expect this invitation, you can ignore this email.</p>
    <p>Thank you!</p>
</body>
</html>
