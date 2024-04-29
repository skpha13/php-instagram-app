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
        <h1 class="text-neutral-100 font-bold text-4xl text-center">Update post</h1>
        <a href="{{ route('posts.index') }}" class="text-neutral-100 font-bold text-center
                                border border-neutral-400 rounded-lg p-2
                                hover:bg-neutral-600 hover:cursor-pointer
                ">Go back</a>
    </div>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title"
               class="text-neutral-100 font-bold ">Title</label>
        <br>
        <input type="text"
               name="title"
               id="title"
               placeholder="{{ $post->title }}"
               class="rounded-lg p-2 my-2" >
        <br>

        <label for="description"
               class="text-neutral-100 font-bold ">Description</label>
        <br>
        <textarea name="description"
                  id="description"
                  cols="40" rows="10"
                  placeholder="{{ $post->description }}"
                  class="rounded-lg p-2 my-2" ></textarea>
        <br>

        <button type="submit" class="text-neutral-100 font-bold text-center
                                border border-neutral-400 rounded-lg p-2 mb-2
                                hover:bg-neutral-600 hover:cursor-pointer"
        >Update</button>
    </form>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="text-red-500 font-bold text-center
                                border border-red-500 rounded-lg p-2
                                hover:bg-red-500 hover:cursor-pointer hover:text-neutral-100"
        >Delete</button>
    </form>
</body>

</html>
