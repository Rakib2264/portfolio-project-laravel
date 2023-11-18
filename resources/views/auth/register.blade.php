<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .registration-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .registration-container h2 {
            color: #333;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group .login-link {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 400px) {
            .registration-container {
                width: 80%;
            }
        }

        @media (min-width: 401px) and (max-width: 768px) {
            .registration-container {
                width: 60%;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Register</h2>
        <form class="registration-form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div class="form-group">
                <p class="login-link"><a href="{{ route('login') }}">Already have an account? Login here</a></p>
            </div>
        </form>
    </div>
</body>
</html>
