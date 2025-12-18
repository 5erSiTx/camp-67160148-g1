<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มสมัคร</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bs-body-bg: #f3f6fb;
            --bs-card-bg: #ffffff;
            --bs-primary: #4f46e5;
            --bs-border-radius: 14px;
        }
        body, input, button, select, textarea {
            font-family: 'Sarabun', sans-serif;
        }
        body {
            background: linear-gradient(180deg, var(--bs-body-bg), #e9f0ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem; /
        }
        .container-custom {
            width: 100%;
            max-width: 900px;
            background: var(--bs-card-bg);
            border-radius: var(--bs-border-radius);
            box-shadow: 0 10px 30px rgba(20, 25, 40, 0.08);
            padding: 28px;
        }

        .checkbox-grid .form-check-label {
            display: flex;
            gap: 8px;
            align-items: center;
            background: #f8fafc;
            border: 1px solid #eef2ff;
            padding: 8px 10px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 0;
            cursor: pointer;
        }
        .checkbox-grid .form-check-input:checked + .form-check-label {
            background: var(--bs-primary);
            color: #ffffff;
            border-color: var(--bs-primary);
        }

    </style>
</head>
<body>
    <div class="container-custom">
        <h1>file default</h1>
        @yield('content')
        @stack("scripts")
    </div>


</body>
</html>
