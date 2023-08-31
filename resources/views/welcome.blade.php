{{-- https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_basic&stacked=h --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-2">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                    {{-- <label for="title">Title:</label> --}}
                    <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <th>Serial</th>
                        <th>Title</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $todo->title }}</td>
                                <td>Edit and Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
