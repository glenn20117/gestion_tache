<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Tableau de bord</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #c2c2c2;
            color: #daa520;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 2rem;
        }
        h1 {
            color: #fff;
            margin-bottom: 2rem;
        }
        form {
            margin-bottom: 2rem;
        }
        button {
            background-color: #daa520;
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: bold;
            color: #111;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #fff;
            color: #111;
        }
        p {
            color: #fff;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <h1>Bienvenue, {{ auth()->user()->name }} !</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>

    <p>Ton tableau de bord sera ici.</p>
</body>
</html>