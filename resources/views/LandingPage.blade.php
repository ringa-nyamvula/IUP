<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <style>
        body {
            text-align: center;
            background-image: url('WhatsApp Image 2023-10-14 at 09.28.00.jpeg'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: rgba(255, 255, 255, 0.66); /* 66% transparency white background */
        }
        .title {
            color: blue;
            font-size: 24px;
            margin-top: 100px;
        }
        .register-button {
            background-color: yellow;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1 class="title">Welcome to Our Website</h1>
    <a class="register-button" href="{{ route('registration.show') }}">Register as a New Member</a>
</body>
</html>
