<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ auth()->user()->name }}</h2>
    <p>Email: {{ auth()->user()->email }}</p>
    <p>Google ID: {{ auth()->user()->google_id }}</p>
</body>
</html>
