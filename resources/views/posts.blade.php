<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 01</title>
</head>
<body>


<table style="width:100%">
    <tr>
        <th>Post Name</th>
        <th>Post Date</th>
        <th>Post Type</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{ $d['postName'] }}</td>
        <td>{{ $d['postDate'] }}</td>
        <td>{{ $d['postType'] }}</td>
    </tr>
    @endforeach
</table>


</body>
</body>
</html>
