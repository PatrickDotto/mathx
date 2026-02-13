<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[TITLE]</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- logo -->
    <div class="text-center my-3">
        <img src="assets/images/logo.jpg" alt="logo" class="img-fluid" width="250px">
    </div>

     <!-- operations -->
    <div class="container">

        <hr>

        <div class="row">

            @foreach ($exercises as $exercise)
                <div class="div col-3 display-6 mb-3">
                   <span class="badge bg-dark">{{ str_pad($exercise['exercise_number'], 2, '0', STR_PAD_LEFT) }}</span>
                   <span>{{ $exercise['exercise'] }}</span>
                </div>


            @endforeach

            <!-- each operation -->
            <div class="col-3 display-6 mb-3">
                <span class="badge bg-dark">1</span>
                <span>{{ $exercises[0]['exercise'] }}</span>
                <span>+</span>
                <span>{{ $exercises[0]['solution'] }}</span>
            </div>

            <div class="col-3 display-6 mb-3">
                <span class="badge bg-dark">2</span>
                <span>{{ $exercises[1]['exercise'] }}</span>
                <span>+</span>
                <span>{{ $exercises[1]['solution'] }}</span>
            </div>

            <div class="col-3 display-6 mb-3">
                <span class="badge bg-dark">3</span>
                <span>{{ $exercises[2]['exercise'] }}</span>
                <span>+</span>
                <span>{{ $exercises[2]['solution'] }}</span>
            </div>

            <div class="col-3 display-6 mb-3">
                <span class="badge bg-dark">4</span>
                <span>{{ $exercises[3]['exercise'] }}</span>
                <span>+</span>
                <span>{{ $exercises[3]['solution'] }}</span>
            </div>

            <div class="col-3 display-6 mb-3">
                <span class="badge bg-dark">5</span>
                <span>{{ $exercises[4]['exercise'] }}</span>
                <span>+</span>
                <span>{{ $exercises[4]['solution'] }}</span>
            </div>

        </div>

        <hr>

    </div>

    <!-- print version -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="{{ route('home') }}" class="btn btn-primary px-5">VOLTAR</a>
            </div>
            <div class="col text-end">
                <a href="{{ route('exportExercises')}}" class="btn btn-secondary px-5">DESCARREGAR EXERCÍCIOS</a>
                <a href="{{ route('printExercises')}}" class="btn btn-secondary px-5">IMPRIMIR EXERCÍCIOS</a>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer class="text-center mt-5">
        <p class="text-secondary">MathX &copy; <span class="text-info">[ANO]</span></p>
    </footer>

    <!-- bootstrap -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>