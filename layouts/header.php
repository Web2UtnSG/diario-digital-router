<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= BASE_URL ?>" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Diario Digital</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="home" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="about" class="nav-link">Nosotros</a></li>
        </ul>
    </header>