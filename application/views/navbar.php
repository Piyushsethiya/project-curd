<style>
    * {
  margin: 0;
  padding: 0;
  outline: 0;
  box-sizing: border-box;
}
body {
  /* position: inherit; */
  backdrop-filter: blur(5px) saturate(180%);
  background-image: url(https://images.pexels.com/photos/934718/pexels-photo-934718.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
  -webkit-background-size:cover;
  background-size:cover;
  background-position: center center;
  height: 100vh;
  font-family: poppins;
}
/* .navbar{
  padding-top: 25px;
} */
nav {
 position: relative;
 width: calc(100% - 60px);
 margin: 0 auto;
 background: #000000;
 z-index: 1;
 text-align: right;
 padding-right: 2%;
}
.upper-area{
    top: 10%;
    font-size: 14px;
  font-size: 14px;
  letter-spacing: 1px;
  color: #fff;
  padding: 15px 25px;
  font-size: 14px;
  text-align: right;
}
a{
    color: #fff;
  /* font-weight: 900; */
  letter-spacing: 1px;
  text-transform: uppercase;
  display: block;
  padding: 15px 5px;
  font-size: 10px;
  line-height: 8px;
  position: relative;
  z-index: 1;
    text-decoration: none; 
}
a:visited{
    background: #333 ;
}
a:hover{
    background: darkmagenta ;
  color: #fff;
}
li{
    display: inline-block;
    list-style-type: none;
}
.logo  {
  width: 25%;
  float: left;
  text-transform: uppercase;
  color: #fff;
  font-size: 25px;
  text-align: left;
  padding: 10px 25px;
}
.menu-area li  {
  display: inline-block;
    list-style-type: none;
}
.menu-area a  {
  color: #fff;
  font-weight: 900;
  letter-spacing: 1px;
  text-transform: uppercase;
  display: block;
  padding: 15px 25px;
  font-size: 14px;
  line-height: 30px;
  position: relative;
  z-index: 1;
    text-decoration: none;    
}
.menu-area a:hover {
  background: deeppink;
  color: #fff;
}
nav:before {
  position: absolute;
  content: '';
  border-top: 10px solid #333;
  border-right: 10px solid #333;
  border-left: 10px solid transparent;
  border-bottom: 10px solid transparent;
  top: 100%;
  left: 0;
}
nav:after {
  position: absolute;
  content: '';
  border-top: 10px solid #333;
  border-left: 10px solid #333;
  border-right: 10px solid transparent;
  border-bottom: 10px solid transparent;
  top: 100%;
  right: 0;
}
h1{
  text-align: center;
  width: 400px;
  border: 5px solid darkred;
  border-radius: 20px;
  background-color: darkgoldenrod;
  margin-left: 500px;

}
.heading{
  width: 800px;
  margin-left: 300px;
  text-align: center;
  border: 20px  groove yellow;
  background-color: lightsalmon;
  margin-top: 100px;
  padding-top: 19px;
  padding-bottom: 19px;
  text-shadow: 2px 2px 5px red;
}
h3{
  text-align: center;

}
/* @media screen and (max-width: 600px) {
    body{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    body{
      width: 20rem;
    }
  } */
</style>

<div class="navbar">
    <div class="upper-area">
        <ul class="login-seen">
        <li style="border: 8px solid black;"><a href="<?php echo base_url()?>">log out <span class="glyphicon glyphicon-log-out"></span></a></li>
        <li style="border: 8px solid black;"><a href="<?php echo base_url('loginC/form')?>">sign up </a></li>
        </ul>
    </div>
  <nav>
    <div class="logo">
Project Logo</div>
<ul class="menu-area">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Contact</a></li>
</ul>
</nav>    
</div>
<br><br><br>
<h1>Welcome to My Website Page</h1>
<h3 class="heading">This is Operation used in my Internship Project.
<p>  => Create</p>
<p>  => Insert</p>
<p>  => Delete</p>
<p>  => View</p>
<p>  => Update</p> 
</h3>