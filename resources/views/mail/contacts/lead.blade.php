<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact</title>
</head>
<body>
    <h1>You have a new lead</h1>

    <dl>
        <dd>Name: {{$data['name']}}</dd>
        <dd>Mail: {{$data['email']}}</dd>
    </dl>
    <div class="content">
        <p>
            {{$data['message']}}
        </p>
    </div>
</body>
</html>