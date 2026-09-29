<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

            <h1> Salut </h1>


            <form action="{{ url('salut') }}" method="POST">
                @csrf

                <label for="title">title</label>
                <input type="text" id="title" name="title" />

                <hr> <hr>

                <label for="description"> Description</label>
                <input type="text" id="description" name="description" />

                <hr> <hr>

                <label for="event_date"> Date</label>
                <input type="date" id="event_date" name="event_date" />

                <hr> <hr>

                <label for="location"> Location </label>
                <input type="text" id="location" name="location" />
    
                <hr> <hr>
                    <button type="submit"> Enregistrer </button>
                    
                </form>
    </body>
</html>
