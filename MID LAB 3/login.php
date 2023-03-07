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
legend { 
  padding-left: 2px;
  padding-right: 2px;

}
            
        </style>

    </head>
    
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
                
                <th> <a href = "home.php">Home </a></th>
                <th> <a href = "login.php">Log in </a> </th>
                <th> <a href = "registration.php">Registration</a></th>
                
            </tr>

            <tr>
                <td colspan = "180 ">
                     <center>
                     <fieldset>
                     <legend> LOGIN </legend>
                     <form action="logincheck.php" method = "POST">
                        Username       : <input type="text" name = "username"><br><br>
                        Password       : <input type="password" name = "password"><br><br>

                        <input type="checkbox" name = "remember_me"> Remember Me<br><br>

                        <input type="submit" name = "submit" value = "submit">

                        

                        <a href="forgetpass.php">Forget Password?</a>
                    

                     </form>

                     

                    </center> 
                </td>
            </tr>

            <tr>
                <td colspan = "180"> <center>Copyright 2017c</center></td>
            </tr>


        </table>
        
      </center>

    </body>