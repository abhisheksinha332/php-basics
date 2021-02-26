<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <title>Chat Application</title>
    
</head>
<body>
    <div class="wrapper">
        <div class=" signup">
            <h1 class="title">Chat Application</h1>
            <form action="#">
                <div class="error-msg">Here comes the error</div>
                <div class="name">
                    <div class="field name-details">
                        <label>First Name</label>
                        <input type="text" class="input" name="fname" required />  
                    </div>
                    <div class="field name-details">
                        <label>Last Name</label>
                        <input type="text" class="input" name="lname" required  />  
                    </div>
                </div>
                
                <div class="field">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required />  
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required />  
                </div>
                <div class="field file-input">
                    <label>Profile Pic</label>
                    <input type="file" class="file" name="profile" required />  
                </div>
             
              
             
                  <button type="submit" class="button">
                      <span>Submit</span>
                  </button>
             
             
            </form>
            <div class="link">Already signed up? <a href="#">Login</a></div>
        </div>
    </div>
    <script src="script/signup.js"></script>
</body>
</html>