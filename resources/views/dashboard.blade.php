<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #bbbbbb;
            overflow: hidden;
        }

        .table thead {
            background-color: #f2f2f2;
        }

        .table th {
            text-align: center;
            font-weight: bold;
            vertical-align: middle !important;
        }

        .table td {
            text-align: center;
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>COURSE INTRESTED</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                                <td>{{$post->name}}</td>
                                <td>{{$post->email}}</td>
                                <td>{{$post->course}}</td>
                                <td>claim it</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
