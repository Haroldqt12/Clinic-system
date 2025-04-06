<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 5px;
            background-color: white;
            text-align: center;
        }

        .login-container label {
            display: block;
            text-align: left;
            margin-left: 20%;
            font-weight: bold;
            padding-top: 10px;
        }

        .login-container input {
            width: 60%;
            padding: 10px;
            margin: 5px auto;
            border: 1px solid #000;
            border-radius: 5px;
            display: block;
        }

        .login-container button {
            background-color: #198754;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}">Don't have an account? <strong>Sign Up</strong></a>
    </div>
</body>
</html>
