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
    
    <body>
      <center>
        
        <table height = "50%">

        <table height = "20%">

                <th>X company</th>
                
                <?php 
                    for($i = 0; $i < 150;$i++)
                    {
                        echo "<th> </th>";
                    }                 
                ?>
                
                <th> <a href = "home.php">Home |</a></th>
                <th> <a href = "login.php">Log in |</a> </th>
                <th> <a href = "registration.php">Registration</a></th>
                
            </tr>
                </table>

            <table height = "30%">
            <tr>
                <td colspan = "180 "> <b>Welcome to X company</b> </td>
            </tr>
                </table>
            
                <table height = "5%">
            <tr>
                <td colspan = "180"> <center>Copyright © 2017</center></td>
            </tr>
                </table>


        </table>
        




      </center>

    </body>