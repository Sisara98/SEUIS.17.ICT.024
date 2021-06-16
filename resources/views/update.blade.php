<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name='id' value="{{$data['id']}}">
       Name: 
       <input type="text" name="name" id="name" value="{{$data['name']}}"><br><br>
       
       Username: 
       <input type="text" name="uname" id="uname" value="{{$data['username']}}"><br><br>

       Date of Birth:
       <input type="text" name="dob" id="dob" value="{{$data['dob']}}"><br><br>    
       
       Email:  
       <input type="email" name="email" id="email" value="{{$data['email']}}"><br><br>

       Telephone No: 
       <input type="text" name="tel" id="tel" value="{{$data['tel']}}"><br><br>

       NIC No: 
       <input type="text" name="nic" id="nic" value="{{$data['nic']}}"><br><br>

       Gender: 
       <input type="text" name="gender" id="gender" value="{{$data['gender']}}"><br><br>

       Password: 
       <input type="password" name="pass" id="pass" value="{{$data['password']}}"><br><br>

       <input type="submit" value="update">
    </form>
</body>
</html>