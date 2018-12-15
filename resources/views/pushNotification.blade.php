<!DOCTYPE html>
<html lang="en">

<div class="flex-center position-ref full-height">

    <div class="top-right links">

        <a href="{{ url('/home') }}">Go Back To Home </a>
        <a href="{{ url('/question') }}">Go Back To Questions </a>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Alexandra's FAQ Project</title>
        </head>
        <body>
        <div class="flex-center position-ref full-height">
            <form action="{{ route('sendmail') }}" method="post">
                <input type="email" name="mail" >
                <input type="text" name="body" >
                <button type="submit">E-mail</button>
                {{ csrf_field() }}
            </form>
        </div>
        </body>
        </div>
        </div>
        </html>