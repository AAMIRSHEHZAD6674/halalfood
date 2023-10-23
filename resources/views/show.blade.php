<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h2>HTML Table </h2>


@if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif


<a href="/test" class="btn btn-success" >Add Post</a>
<table>

    <tr>
        <th>Country</th>
        <th>Code</th>
        <th>Action</th>
    </tr>

    @foreach($data as $data)
        <tr>
            <td>{{ $data['name'] }}</td>
            <td>{{$data['code']}}</td>
            <td><a href="/deleteCountry?id={{$data['id']}}">
                    <button>Delete</button>
                </a></td>
        </tr>
    @endforeach

</table>

</body>
</html>

