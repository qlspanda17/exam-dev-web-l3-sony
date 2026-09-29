<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $event->title }}" required>
    <input type="text" name="description" value="{{ $event->description }}" required>
    <input type="date" name="event_date" value="{{ $event->event_date }}" required>
    <input type="text" name="location" value="{{ $event->location }}" required>

    <button type="submit">Update</button>
</form>
    
</body>
</html>