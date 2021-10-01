<!DOCTYPE html>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ url('/app.css') }}">

    <body>
        <article>
            <h1><a href="{{url('posts/my-first-post')}}">My First Post</a></h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi similique error minima saepe aspernatur doloribus eligendi fugiat tempore repellat blanditiis! Magni, voluptatum! Velit dolores laboriosam illo labore est, assumenda quaerat!
            </p>
        </article>
        <article >
            <h1><a href="{{url('posts/my-second-post')}}">My Second Post</a></h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi similique error minima saepe aspernatur doloribus eligendi fugiat tempore repellat blanditiis! Magni, voluptatum! Velit dolores laboriosam illo labore est, assumenda quaerat!
            </p>
        </article>
        <article>
            <h1><a href="{{url('posts/my-third-post')}}">My Third Post</a></h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi similique error minima saepe aspernatur doloribus eligendi fugiat tempore repellat blanditiis! Magni, voluptatum! Velit dolores laboriosam illo labore est, assumenda quaerat!
            </p>
        </article>

        <script src="{{ url('/app.js')}}"></script>
    </body>
</html>
