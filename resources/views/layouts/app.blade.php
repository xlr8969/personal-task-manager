<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Task Manager</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; }
        .navbar { background: #2d3e50; color: #fff; padding: 15px 30px; }
        .navbar a { color: #fff; text-decoration: none; font-weight: bold; }
        .container { max-width: 900px; margin: 30px auto; padding: 0 15px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,0.1); margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border-bottom: 1px solid #eee; text-align: left; }
        .btn { padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 14px; border: none; cursor: pointer; }
        .btn-primary { background: #3498db; color: #fff; }
        .btn-success { background: #2ecc71; color: #fff; }
        .btn-warning { background: #f39c12; color: #fff; }
        .btn-danger { background: #e74c3c; color: #fff; }
        .status-pending { color: #e67e22; font-weight: bold; }
        .status-completed { color: #27ae60; font-weight: bold; }
        .alert { background: #d4edda; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        input, textarea, select { width: 100%; padding: 8px; margin-bottom: 12px; box-sizing: border-box; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('tasks.index') }}">📋 Personal Task Manager</a>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>