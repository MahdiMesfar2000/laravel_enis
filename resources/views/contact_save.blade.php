<!DOCTYPE html>
<html>

<head>
    <title>Contact Enregistré</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
            <div class="alert alert-success">
                {{ $success }}
            </div>

        <h1 class="mb-4">Informations de Contact</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nom:</strong> {{ $nom }}</p>
                <p class="card-text"><strong>Prénom:</strong> {{ $prenom }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $email }}</p>
                <p class="card-text"><strong>Message:</strong> {{ $message }}</p>
            </div>
        </div>
    </div>
</body>

</html>