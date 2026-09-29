<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('events.supprimer', $event->id) }}" method="POST">
    @csrf 
    @method('DELETE')

    <button type="submit">Delete</button>

    </form>
    
</body>
</html>