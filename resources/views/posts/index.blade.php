<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-neutral-800 m-8">
    <h1 class="text-neutral-100 font-bold text-4xl text-center mt-6 mb-12">All posts</h1>

    @forelse($posts as $post)
        <a href="#" class="block max-w-sm p-6 bg-white border border-neutral-200 rounded-lg shadow hover:bg-neutral-100 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->description }}</p>
        </a>
    @empty
        <h1 class="text-neutral-100 font-bold text-xl text-center m-6">There are no posts yet !</h1>
    @endforelse

</body>

</html>
