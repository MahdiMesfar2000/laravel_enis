<!DOCTYPE html>
<html>

<head>
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tableau des Notes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $index => $note)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Moyenne:</strong> {{ number_format($average, 2) }}</p>
        <p><strong>Mention:</strong> {{ $mention }}</p>
    </div>
</body>

</html>