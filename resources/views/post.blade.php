<!DOCTYPE html>

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ url('/app.css') }}">

    <body>

        <article>
            <?= $post  ?>
        </article>

        <a href="{{url('/')}}">Go Back</a>
        <script src="{{ url('/app.js')}}"></script>
    </body>
</html>
