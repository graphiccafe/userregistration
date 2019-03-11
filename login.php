
<html>
    <head>
    <title>User Login and Registration</title>
        <link rel="stylesheet" type="text/css" href="style1.css" >
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
        <div class="row">
            <div class="col-lg-6 login-left">
            <h2>Login</h2>
            <form action="validation.php"  method="post">
                <div class="form-group">
                <label>Username</label>
                 <input type="text"  name="user" class="form-control" required>
                </div>
                  <div class="form-group">
                <label>Password</label>
                 <input type="password"  name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
            
                <div class="col-lg-6 login-right">
            <h2>Register Here</h2>
            <form action="registration.php"  method="post">
                <div class="form-group">
                <label>Username</label>
                 <input type="text"  name="user" class="form-control" >
                </div>
                  <div class="form-group">
                <label>Password</label>
                 <input type="password"  name="password" class="form-control" required>
                </div>
                
                <button type="register" onclick="popUp()"    class="btn btn-primary">Register</button>
                </form>
                
            </div>
            
            
            </div>
                </div>
        
        </div>
        
        
        <script>  
        
        function popUp(){
            
            swal("sorry!", "Enter the information!", "error");
        }
        </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    
</html>