<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
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

      .register-container {
        background-color: #111;
        border: 1px solid #daa520;
        border-radius: 8px;
        width: 100%;
        max-width: 600px; 
        box-shadow: 0 0 15px rgba(218, 165, 32, 0.6);
        text-align: center;
        padding: 2.5rem; 
        box-sizing: border-box; 
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #daa520;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            box-sizing: border-box;
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

        .login-link {
            margin-top: 1rem;
            color: #daa520;
            font-weight: bold;
        }

        .login-link a {
            color: #fff;
            text-decoration: underline;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #fff9c4;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Créer un compte</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Nom </label>
            <input type="text" id="name" name="name" placeholder="Nom" value="{{ old('name') }}" required>

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>

            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>

            <button type="submit">S’inscrire</button>
        </form>

        <p class="login-link">
            Déjà inscrit ? <a href="{{ route('login') }}">Connecte-toi</a>
        </p>
    </div>
</body>
</html>
