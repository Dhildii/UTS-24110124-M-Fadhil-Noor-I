<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Toko Online</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #e0f2fe;
            color: #333;
        }

        nav {
            background-color: #ffffff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }

        nav a, nav form button {
            margin-left: 15px;
            text-decoration: none;
            color: #0369a1;
            background: none;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .container {
            max-width: 500px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        h2 {
            text-align: center;
            color: #0369a1;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        button {
            background-color: #0369a1;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        button:hover {
            background-color: #0284c7;
        }

        .text-center {
            text-align: center;
        }

        .mt-2 {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <nav>
        <div><strong>Toko Online</strong></div>
        <div>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('barangs.index') }}">Barang</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    @yield('content')

</body>
</html>
