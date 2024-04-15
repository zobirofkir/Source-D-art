<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submitted</title>
</head>
<body>
    <h2>Contact Form Submitted</h2>
    <p>Name: {{ $data->name }}</p>
    <p>Phone: {{ $data->phone }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Company: {{ $data->company }}</p>
    <p>Message: {{ $data->message }}</p>
</body>
</html>
