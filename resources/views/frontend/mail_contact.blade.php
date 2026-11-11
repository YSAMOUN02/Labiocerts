<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Contact</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.5;">
    <h3 style="margin: 0 0 12px;">New message from the Labiocert website contact form</h3>
    <table cellpadding="6" style="border-collapse: collapse;">
        <tr><td><strong>Name</strong></td><td>{{ $data['name'] }}</td></tr>
        <tr><td><strong>Email</strong></td><td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td></tr>
        <tr><td><strong>Subject</strong></td><td>{{ $data['subject'] }}</td></tr>
    </table>
    <p style="margin: 16px 0 4px;"><strong>Message</strong></p>
    <div style="white-space: pre-wrap; border: 1px solid #ddd; padding: 10px; border-radius: 4px;">{{ $data['message'] }}</div>
    <p style="color: #888; font-size: 12px; margin-top: 16px;">Click "Reply" to answer the sender directly.</p>
</body>
</html>
