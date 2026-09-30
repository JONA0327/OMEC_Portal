<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tramec</title>
</head>

<body>
    <h3>Hi Admin,</h3>
    <h4>Your New User Information</h4>
    <table border="1">
        <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
   
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $user['first_name'] ?? ''}} {{ $user['last_name'] ?? ''}}</td>
              <td>{{ $user['email'] ?? ''}}</td>
          
            </tr>
          </tbody>
    </table>
</body>

</html>