<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Ai Book Publisher</title>
    <style>
        /* Header styles */
        .header {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .header img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Content styles */
        body {
            background-color: #ffffff;
            color: #333333;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #007bff;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        /* Footer styles */
        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <img src="{{ asset('images/aibook.png') }}" alt="Logo">
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Welcome to Ai Book Publisher</h1>
        <p>Dear {{ $user->name }},</p>
        <p>Thank you for registering with Ai Book Publisher. We are excited to have you onboard!</p>
        <p>You can log in to your account <a href="http://app.aibookpublisher.com/login">here</a>.</p>
        <p>If you have any questions or need any assistance, please don't hesitate to contact us.</p>
        <p>Best regards,</p>
        <p>Ai Book Publisher</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ date('Y') }} Ai Book Publisher. All rights reserved.
    </div>
</body>
</html>