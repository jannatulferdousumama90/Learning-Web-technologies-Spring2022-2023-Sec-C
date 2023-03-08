<html>
    <head>
        <title>Home Page</title>
        <style>
            table
            {
                width:100%;
                
            }

            
            table,td
            {
                border: 1px solid black;
                border-collapse: collapse;
            }
            
        </style>

    </head>

    <?php




?>

    
    <body>
      <center>
        
        <table height = "50%">
                <th>X company</th>
                
                <?php 
                    for($i = 0; $i < 150;$i++)
                    {
                        echo "<th> </th>";
                    }                 
                ?>
                
                <th> Logged in as</th>
                <th> <a href = "logout.php">logout</a></th>
                
            </tr>

            <tr>
                <td colspan = "40 ">
                    Account: 
                    <ul>
                        <li><a href= "dashboard.php" >Dashboard</a></li>
                        <li><a href = "viewprofile.php "> View Profile </a></li>
                        <li><a href = "editprofile.php " >Edit profile</a></li>
                        <li><a href = "changeprofilepic.php " >Change Profile Picture</a></li>
                        <li><a href = "changepassword.php">Change Password</a></li>
                        <li><a href = " logout.php">logout</a></li>
                    </ul>
                     
                </td>
                <td colspan = "120">
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                       Current Password: <input type="password"  name = "password"><br><br>
                       New Password: <input type="password"  name = "password"><br><br>
                       Retype New Password: <input type="password"  name = "password"><br><br>
                                <input type="submit">
                    </fieldset>

                </td>
            </tr>

            <tr>
                <td colspan = "180"> <center>Copyright © 2017</center></td>
                
            </tr>


        </table>
        




      </center>

    </body>