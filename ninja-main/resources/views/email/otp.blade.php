<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your One-Time Passcode (OTP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            text-align: center;
        }
        .logo {
            max-width: 150px;
            margin: 20px auto;
        }
        .header {
            background-color: #008000;
            color: #ffffff;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .otp {
            font-size: 30px;
            font-weight: bold;
            color: #008000;
            margin: 15px 0;
        }
        .message {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
        .footer {
            background: #f4f4f4;
            font-size: 12px;
            padding: 10px;
            text-align: center;
            color: #777;
        }
        .footer a {
            color: #008000;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <img src="{{config('app.url')}}/images/logo.png" alt="Ninja ERP System" class="logo">
    <div class="header">
        Your One-Time Passcode (OTP)
    </div>
    <div class="content">
        <p class="message">Hello,</p>
        <p class="message">Use the following one-time passcode to verify your request:</p>
        <p class="otp">{{$otp}}</p>
        <p class="message">This code is valid for the next 10 minutes. If you did not request this, please ignore this email.</p>
    </div>
    <div class="footer">
{{--        Need help? <a href="https://yourdomain.com/support">Contact Support</a>--}}
    </div>
</div>
</body>
</html>
