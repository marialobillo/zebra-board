<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZebraBoard</title>
</head>
<body>
    <h1>ZebraBoard</h1>

<ul>
    @foreach($notes as $note)
        <li>{{ $note->title }}</li>

        @endforeach
</ul>
</body>
</html>
