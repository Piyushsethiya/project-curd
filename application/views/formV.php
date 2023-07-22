<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
</head>
<style>
body 
{
  font-family:sans-serif; 
  background: -webkit-linear-gradient(to right, #155799, #159957);  
  background: linear-gradient(to right, #155799, #159957); 
  color:whitesmoke;
}

label, p{
    background-color: black;
    font-size: solid 12px;
    margin: auto;
    
}

label[for="gender"]{

}

form{
    width:50rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
}

input{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }
input[type="submit"]{
    width: 100%;
    margin: 10px 0;
    border-radius: 50px;
    padding: 15px 18px;
    box-sizing: border-box;
}

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(74, 146, 235);
  }
  
  .register a:link{
    text-decoration: none;
  }

  button {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
}
</style>
<body>
    <h2 style="text-align:center; color:orange ">Personal Details</h2>


<div class="container">
    <form action="<?php echo base_url('loginC/insert_formdata'); ?>" method="post" >
    <div class="input-group">
        <label for="username">Username: </label>
        <input type="text" name ="username" placeholder = "Enter your full username" required><br>  <br>
    </div>
        <div class="input-group">
        <label for="name">Name: </label>
        <input type="text", name ="name", placeholder = "Enter your full name", required><br>  <br>
    </div>
    <div>
        <label for="phone">Phone: </label>
        <input type="number", placeholder = "Enter your Phone name" , name ="phone", required>  <br><br>
    </div>
    <div>
        <label for="address">Address: </label>
        <input type="address", placeholder = "Enter your Address" , name = "address" ,required><br>  <br>
    </div>
    <div>
        <label for="email">Email id.: </label>
        <input type="email", placeholder = "Enter your Email id.", name="email" , required><br>  <br>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password", placeholder = "Enter The Password", name = "password", required>   <br><br>
    </div>
    <div>
        <label for="date of birth">Date Of Birth: </label>
        <input type="date", name = "birthdate", placeholder = "Enter your Birth Date" , required>  <br><br>
    </div>
    <div>
        <p >Select Gender: </p>
        <!-- <select name="gender">
            <option value="none" selected>Gender</option>
            <option value="Male" ></option>
            <option value="Female"></option>
        </select> -->
        <div name ="gender">

        <input type="radio" id ="Male" name="gender" value="male" required>  
        <label for="gender">Male</label>

        <input type="radio" id ="Female" name="gender" value="female" required>  
        <label for="gender">Female</label>

        <input type="radio" id ="other" name="gender" value="other" required>  
        <label for="gender">Other</label>
    </div>
    </div><br><br>
    <div>
        <input class="submit"  type="submit" value="Sign up">
        <button class="register"><a href="<?php echo base_url('loginC/display_formdata');?>">View</a></button>
    </div>
</div>
</form>
<!-- </center> -->
</body>
</html>