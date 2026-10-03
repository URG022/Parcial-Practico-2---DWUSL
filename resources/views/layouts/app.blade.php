<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Parcial 2')</title>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: system-ui, sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #222
        }

        /* Menú */
        .topbar {
            background: linear-gradient(90deg, #111827, #1f2937);
            box-shadow: 0 2px 6px rgba(0, 0, 0, .25);
            position: sticky;
            top: 0;
            z-index: 10
        }

        .topbar-inner {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 16px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .brand {
            color: #fff;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: .3px
        }

        .brand span {
            color: #60a5fa
        }

        .menu {
            display: flex;
            gap: 6px
        }

        .menu a {
            color: #d1d5db;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 999px;
            transition: background .15s, color .15s
        }

        .menu a:hover {
            background: rgba(255, 255, 255, .12);
            color: #fff
        }

        .menu a.active {
            background: #2563eb;
            color: #fff
        }

        main {
            max-width: 960px;
            margin: 28px auto;
            padding: 0 16px
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .12)
        }

        table {
            width: 100%;
            border-collapse: collapse
        }

        th,
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            vertical-align: middle
        }

        th {
            background: #f9fafb;
            font-size: 14px
        }

        .nowrap {
            white-space: nowrap
        }

        /* Botones */
        .btn {
            display: inline-block;
            padding: 7px 14px;
            border: 0;
            border-radius: 6px;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-family: inherit;
            line-height: 1.2
        }

        .btn:hover {
            filter: brightness(.92)
        }

        .gris {
            background: #6b7280
        }

        .rojo {
            background: #dc2626
        }

        .verde {
            background: #16a34a
        }

        .acciones {
            display: flex;
            gap: 8px;
            flex-wrap: nowrap;
            align-items: center
        }

        td.col-acciones {
            white-space: nowrap;
            width: 1%
        }

        .acciones form {
            margin: 0
        }

        label {
            display: block;
            margin: 14px 0 4px;
            font-weight: 600
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 9px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-family: inherit
        }

        .ok {
            background: #dcfce7;
            border: 1px solid #16a34a;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 14px
        }

        .err {
            color: #b91c1c;
            font-size: 13px;
            margin-top: 4px
        }
    </style>
</head>

<body>
    <header class="topbar">
        <div class="topbar-inner">
            <div class="brand">DWSL</div>
            <nav class="menu">
                <a href="{{ url('/') }}" @class(['active' => request()->is('/')])>Inicio</a>
                <a href="{{ url('/pedidos') }}" @class(['active' => request()->is('pedidos*')])>Pedidos</a>
                <a href="{{ url('/clientes') }}" @class(['active' => request()->is('clientes*')])>Clientes</a>
                <a href="{{ url('/articulos') }}" @class(['active' => request()->is('articulos*')])>Artículos</a>
            </nav>
        </div>
    </header>
    <main>
        @if (session('ok'))
        <div class="ok">{{ session('ok') }}</div>@endif
        @yield('contenido')
    </main>
</body>

</html>