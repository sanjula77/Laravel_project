<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <form method="put" action="{{route('customer.update',['customer'=>$customers])}}">
        @csrf
        @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$customers->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{$customers->address}}">
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <select class="form-select" id="designation" name="designation" value="{{$customers->designation}}">
                    <option selected>Choose...</option>
                    <option value="Co-Worker">Co-Worker</option>
                    <option value="Manager">Manager</option>
                    <option value="Intern">Intern</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" value="{{$customers->age}}">
            </div>
            <button type="submit" class="btn btn-warning w-100">Update Customer</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>