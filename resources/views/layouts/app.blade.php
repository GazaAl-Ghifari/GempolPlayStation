<!DOCTYPE html>

<html lang="id">

<head>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
    @yield('title', 'Gempol PlayStation')
</title>

<style>

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f1f5f9;
        color: #1e293b;
        max-width: 100%;
    overflow-x: hidden;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 250px;
        height: 100vh;
        background: #172554;
        color: white;
        padding: 25px 18px;
        z-index: 1000;
    }

    .brand {
        font-size: 21px;
        font-weight: bold;
        margin-bottom: 35px;
        padding: 0 10px;
    }

    .brand small {
        display: block;
        margin-top: 6px;
        font-size: 12px;
        color: #bfdbfe;
        font-weight: normal;
    }

    .menu a {
        display: block;
        padding: 12px 14px;
        margin-bottom: 6px;
        color: #dbeafe;
        text-decoration: none;
        border-radius: 8px;
        transition: .2s;
    }

    .menu a:hover,
    .menu a.active {
        background: #1e3a8a;
        color: white;
    }

    .logout {
        position: absolute;
        left: 18px;
        right: 18px;
        bottom: 20px;
    }

    .logout button {
        width: 100%;
        padding: 11px;
        border: none;
        border-radius: 8px;
        background: #dc2626;
        color: white;
        cursor: pointer;
    }

    .content {
        margin-left: 250px;
        min-height: calc(100vh - 70px);
        padding: 30px;
    }

    .topbar {
        background: white;
        min-height: 65px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        margin-left: 250px;
        border-bottom: 1px solid #e2e8f0;
    }

    .topbar h1 {
        margin: 0;
        color: #172554;
        font-size: 22px;
    }

    .user {
        background: #eff6ff;
        padding: 9px 15px;
        border-radius: 9px;
        color: #172554;
    }

    .footer {
        margin-left: 250px;
        padding: 20px 30px;
        background: white;
        border-top: 1px solid #e2e8f0;
        color: #64748b;
        text-align: center;
        font-size: 13px;
    }

    .success {
        padding: 13px 15px;
        background: #dcfce7;
        color: #166534;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .error {
        padding: 13px 15px;
        background: #fee2e2;
        color: #991b1b;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    @media(max-width: 768px) {

        .sidebar {
            width: 210px;
        }

        .content,
        .topbar,
        .footer {
            margin-left: 210px;
        }

    }

</style>

@stack('styles')
```

</head>

<body>

```
@include('partials.sidebar')

@include('partials.topbar')

<main class="content">

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

</main>

@include('partials.footer')

@stack('scripts')
```

</body>

</html>
