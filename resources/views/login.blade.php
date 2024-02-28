<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calon Presiden RI 2024</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .candidate-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .candidate-info img {
            margin-right: 10px;
        }
        .candidate-info h1, .candidate-info h2, .candidate-info h3 {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="candidate-info">
                        <img src="{{ asset('images/Anies.jpg') }}" alt="..." width="150">
                        <h1>Nomor Urut 1</h1>
                    </div>
                    <input type="checkbox" name="candidate[]" value="anies">
                </div>
                <div class="carousel-item">
                    <div class="candidate-info">
                        <img src="{{ asset('images/Prabowo.jpg') }}" alt="..." width="150">
                        <h2>Nomor Urut 2</h2>
                    </div>
                    <input type="checkbox" name="candidate[]" value="prabowo">
                </div>
                <div class="carousel-item">
                    <div class="candidate-info">
                        <img src="{{ asset('images/Ganjar.jpg') }}" alt="..." width="150">
                        <h3>Nomor Urut 3</h3>
                    </div>
                    <input type="checkbox" name="candidate[]" value="ganjar">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
