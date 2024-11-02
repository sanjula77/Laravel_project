<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Customers Page</title>
    <!-- Bootstrap CSS -->
</head>
<body>
    <div class="container mt-5">
        <h1>Customers Page</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Age</th>
                    <th>Modification</th>
                    <th>Delete Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->designation }}</td>
                    <td>{{ $customer->age }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Update</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
