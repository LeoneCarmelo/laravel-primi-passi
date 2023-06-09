<!doctype html>
<html lang="en">

<head>
    <title>Laravel: first steps</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/contact.css">
</head>

<body>
    <header>
        <h1 class="text-center py-3">Contact</h1>
        <nav class="nav justify-content-center">

            <a href="/" class="mx-3">Home</a>
            <a href="/about" class="mx-3">About</a>


        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row text-center my-4 text-white">
                <ul>
                    @foreach ($contacts as $contact)
                    <li class="mb-2">{{$contact}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>