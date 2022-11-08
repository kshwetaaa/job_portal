<!DOCTYPE html>
<html>
<head>
    <title>CV download</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>CV Details</h1>
    <p>{{ $date }}</p>
    <p> <b>CV of: </b> {{$application->name}}</p>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>contact</th>
            <th>address</th>
        </tr>
       
            <tr>
                <td>{{ $application->id }}</td>
                <td>{{ $application->name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->contact }}</td>
                <td>{{ $application->address }}</td>
            </tr>
      
    </table>
</body>
</html>