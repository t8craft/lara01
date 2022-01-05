<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="2" />


        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://cdn.tailwindcss.com"></script>


    </head>
    <body class="border-t-8 border-blue-500 p-32">

      <div class="max-w-4l mx-auto prose xl:prose-xl">
        <h1 class="text-6xl">Welcome to a good app</h1>
        <p class="mb-20 p-2 text-2xl">Lots of content for your imagination to feast on</p>

        @foreach ($posts as $post)
          <h2 class="text-xl"><b>{{$post->title}}</b></h2>
        @endforeach

      </div>

    </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
