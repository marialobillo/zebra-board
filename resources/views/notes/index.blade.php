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
    @forelse($notes as $note)
        <li>
            <a href="{{ $note->path() }}">{{ $note->title }}</a>
        </li>
    @empty
        <li>No notes yet.</li>
    @endforelse
</ul>
</body>
</html>
