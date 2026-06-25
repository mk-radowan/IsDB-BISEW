<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f7fb;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 700px;
        }

        .btn {
            display: inline-block;
            margin-top: 16px;
            padding: 10px 14px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style> --}}
</head>

<body>
    <div class="card">
        <h1>Welcome to Admin Dashboard</h1>
        <p>You are logged in as admin.</p>


        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    </div>
</body>

</html>
