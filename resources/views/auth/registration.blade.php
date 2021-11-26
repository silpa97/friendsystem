
<!DOCTYPE html>
<html>
   <head>
   </head>
<body>
      <form action="{{route('registerUser')}}" method="post">
        @csrf
        <table><caption>REGISTRATION</caption>
          <tr><td>User name</td><td><input type="text" name="username" placeholder="please enter username" required></td></tr> 
          <tr><td>Email</td><td><input type="text" name="email" placeholder="please enter email" required></td></tr> 
          <tr><td>Password</td><td><input type="password" name="password" placeholder="please enter password" required></td></tr>
          <tr><td><input type="submit" name="register" value="REGISTER"></td>
        </table>
      </form>
      <p>Already registered?<a href="login">Login here</a></p>
</body>
</html>
