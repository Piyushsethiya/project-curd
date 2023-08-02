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
.submit{
    background-color: green;
    color: white;

}
</style>
<body>
    <h2 style="text-align:center; color:orange; font-size: 45px 20px ;">Edit Detail & Click Update Button</h2>
    <form action="<?php echo base_url('loginC/update_formdata'); ?>" method="post" >
    <?php foreach ($data as $student){ ?>
    <div class="input-group">
        <label for="username">Username: </label>
        <input type="text" name ="username" value="<?php echo $student->username;?>"><br>  <br>
    </div>
    
    <div class="input-group">
        <label for="name">Name: </label>
        <input type="text", name ="name" value="<?php echo $student->name; ?>"><br>  <br>
    </div>
    <div>
        <label for="phone">Phone: </label>
        <input type="number" name ="phone" value="<?php echo $student->phone; ?>">  <br><br>
    </div>
    <div>
        <label for="address">Address: </label>
        <input type="address" name = "address" value="<?php echo $student->address; ?>"><br>  <br>
    </div>
    <div>
        <label for="email">Email id.: </label>
        <input type="email" name="email" value="<?php echo $student->email; ?>"><br>  <br>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name = "password" value="<?php echo $student->password; ?>">   <br><br>
    </div>
    <div>
        <label for="date of birth">Date Of Birth: </label>
        <input type="date", name = "birthdate" value="<?php echo $student->birthdate; ?>"> <br><br>
    </div>
    <!-- <div>
        <p >Select Gender: </p>
        <select name="gender" value="<?php echo $student->gender; ?>">
            <option value="none" selected>Select</option>
            <option value="0" >Male</option>
            <option value="1">Female</option>
        </select> -->
        <!-- <div name ="gender" >

        <input type="radio"  name="gender" value="<?php echo $student->gender['m']; ?>">  
        <label for="gender">Male</label>

        <input type="radio"  name="gender" value="<?php echo $student->gender['f']; ?>">  
        <label for="gender">Female</label>

        <input type="radio" name="gender" value="<?php echo $student->gender['o']; ?>">  
        <label for="gender">Other</label>
    </div> -->
    <!-- </div><br><br> -->
    <?php }; ?>
    <div>
    
    <input class="submit"  type="submit" value="Update">
    <button class="register"><a href="<?php echo base_url('loginC/display_formdata');?>">View</a></button>
    </div>
    
    
</form>
</body>
</html>