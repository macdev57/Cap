<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code</title>
</head>
<body>
    <h4>Your credentials:</h4>
    <p>{{ $data['subject'] }}</p>
    <p>Registered name: {{ $data['first'] }} {{ $data['middle'] }} </p>
    <p>Contact:         {{ $data['contact'] }} </p>
    <p>Email:           {{ $data['email'] }}</p>
    <p>Login Code:      {{ $data['title'] }}</p>
    
    
</body>
</html>