<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Instagram</title>
</head>

<body class="bg-neutral-800 m-8">
<div class="flex flex-row justify-between mt-6 mb-12">
    <h1 class="text-neutral-100 font-bold text-4xl text-center">Create users</h1>
    <a href="{{ route('users.index') }}" class="text-neutral-100 font-bold text-center
                            border border-neutral-400 rounded-lg p-2
                            hover:bg-neutral-600 hover:cursor-pointer
            ">Go back</a>
</div>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    @method('POST')

    <label for="name" class="text-neutral-100 font-bold ">Name</label>
    <br>
    <input type="text"
           name="name"
           id="name"
           class="rounded-lg p-2 my-2" >
    <br>

    <label for="email"
           class="text-neutral-100 font-bold ">Email</label>
    <br>
    <input type="text"
           name="email"
           id="email"
           class="rounded-lg p-2 my-2" >
    <br>

    <label for="password"
           class="text-neutral-100 font-bold ">Password</label>
    <br>
    <input name="password"
           type="password"
           id="password"
           class="rounded-lg p-2 my-2" >
    <br>

    <button type="submit" class="text-neutral-100 font-bold text-center
                            border border-neutral-400 rounded-lg p-2
                            hover:bg-neutral-600 hover:cursor-pointer"
    >Add</button>
</form>
</body>

</html>
