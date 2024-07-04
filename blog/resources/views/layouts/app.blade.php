<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '#100DaysOfCode')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background for the entire body */
        }
        .header-section {
            position: relative;
            padding: 60px 0; /* Adjust padding as needed */
            text-align: center;
            background: rgb(255,255,255);
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(217,50,32,0.8912158613445378) 0%, rgba(215,120,249,1) 100%);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light  p-4">
        <span class="navbar-brand mb-0 h1 p-2">#100DaysOfCode</span>
        <button type="button" class="btn btn-primary btn-create-post" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Create a Post +
        </button>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
