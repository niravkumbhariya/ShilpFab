<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">
    <div style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px;">
        <h2 style="color: #333;">New Contact Inquiry</h2>

        <p style="color: #555;">
            You have received a new contact inquiry through your website. Please review the details below and follow up if needed.
        </p>

        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Message:</strong></p>
        <p style="white-space: pre-line;">{{ $messageText }}</p>
        <hr>
        <p>This message was sent via your website contact form.</p>
    </div>
</body>
</html>
