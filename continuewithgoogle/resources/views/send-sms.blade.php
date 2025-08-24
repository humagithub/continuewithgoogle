<!DOCTYPE html>
<html>
<head>
    <title>Send SMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .success {
            color: green;
            padding: 10px;
            border: 1px solid green;
            background-color: #e0ffe0;
            margin-bottom: 20px;
        }
        .error {
            color: red;
            padding: 10px;
            border: 1px solid red;
            background-color: #ffe0e0;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }
        button {
            padding: 10px 20px;
            background-color: #3490dc;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h2>Send SMS with Twilio</h2>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="/send-sms" method="GET">
        <label>Phone Number:</label>
        <input type="text" name="to" value="{{ old('to', '+923176486659') }}">

        <label>Message:</label>
        <textarea name="message">{{ old('message', 'Hello from Laravel + Twilio!') }}</textarea>

        <button type="submit">Send SMS</button>
    </form>
</body>
</html>
