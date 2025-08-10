<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #C2C2C2; 
            color: #fff; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #111;
            border: 1px solid #daa520; 
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 15px rgba(218, 165, 32, 0.6);
            text-align: center;
        }

        h2 {
            margin-bottom: 1.5rem;
            color: #daa520;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #fff;
            text-align: left;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #daa520;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #daa520;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #fff;
            color: #000;
        }

        .error {
            color: #f88;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            text-align: left;
        }

        .register-link {
            margin-top: 1rem;
            color: #daa520;
            font-weight: bold;
        }

        .register-link a {
            color: #fff;
            text-decoration: underline;
            transition: color 0.3s;
        }

        .register-link a:hover {
            color: #fff9c4; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required autofocus>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>

        <p class="register-link">
            Pas encore inscrit ? <a href="{{ route('register') }}">Inscris-toi</a>
        </p>
    </div>
</body>
</html>
