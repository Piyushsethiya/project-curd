<!DOCTYPE html>
<html>
<head>
	<title>SHOW THE DETAIL</title>
    
</head>
<style>

body{
	font-family:sans-serif; 
	height:100vh;
	background-color: #4158D0;
	/* background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); */
	background: -webkit-linear-gradient(to right, #155799, #159957);  
  background: linear-gradient(to right, #155799, #159957); 
	
}
table { 
	width: 60%; 
	border-collapse: collapse; 
	margin:50px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 12px;
	/* position: fixed; */
	
	}
th { 
    width: 10;
	background: #152147; 
	color: white; 
	font-weight: bold; 
	border-bottom:2px solid#4158D0 ;
	}

	td, th { 
		padding: 30px 10px; 
		text-align: left; 
		font-size: 22.5px;
		text-align: center;
		}
td{
		background-color: #12192c;
		color:#fff;
	}
/* .notfound{
	width: 100%;
} */
/* @media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	
	}

	td:before { 
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		content: attr(data-column);
		color: #000;
		font-weight: bold;
	}


} */

</style>
<body>
    <div class="container">
        <div class = row>
            <div class=col md-4>
        <table border="5px" cellpadding = '20px' cellspacing= '10px' border-radius: 12px>
        
            <tr>
                <th>S. No.</th>
                <th>Username</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email id.</th>
                <th>Password</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th colspan= '2' >Change</th>
            </tr>
        <tbody>
        <?php if(count($record)):?>

            <?php $i=1; foreach($record as $record) {?>
             <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $record->username;?></td>
        <td><?php echo $record->name;?></td>
        <td><?php echo $record->phone;?></td>
        <td><?php echo $record->address;?></td>
        <td><?php echo $record->email;?></td>
        <td><?php echo $record->password;?></td>
        <td><?php echo $record->birthdate;?></td>
        <td><?php echo $record->gender;?></td>
        <td> <span style="background-color: green;"> <i class="fa-refresh"> <a href="<?php echo base_url("loginC/get_formdata/").$record->id ?>">update</a></span> 
		<span style="background-color: red;"> <a href="<?php echo base_url("loginC/delete_formdata/").$record->id ?>">Delete</a> </span></td>

             </tr>
<?php }?>
<?php else:?>
    <tr> 
        <td class="notfound">no record found</td>
    </tr>
	</tbody>
    <?php endif;?>
   </table>
   </div>
        </div>
        </div>
</body>
</html>



