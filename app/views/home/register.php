<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form action="/home/postregester" method="post" class="form" style="padding:20px;" >
       Email: <input type="text" name="email" >
        Name: <input type="text" name="name" >
        Password: <input type="password" name="password" >
        Confirmed-Password: <input type="password" name="confirm_password" >
        <input type="submit" name="submit" >
    </form>
</body>
</html>