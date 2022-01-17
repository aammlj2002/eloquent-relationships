<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    @foreach ($users as $user)
    <div>
        <p>name - {{$user->name}}</p>
        @foreach ($user->roles as $role)

        <p>role - {{$role->name}}</p>
        @endforeach
    </div>
    <hr>
    @endforeach
</body>

</html>