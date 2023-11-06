<html>
    <head>
        <title>Form</title>
    </head>
    <style>
        .table .table-light th {
    color: #525f7f;
    background-color: #f5f9fc;
}
 .table thead th {
    text-transform: uppercase;
    letter-spacing: .025em;
    white-space: nowrap;
    vertical-align: middle;
    border-bottom-width: 1px;
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: .675rem;
    font-weight: 500;
}
.table>:not(caption)>*>* {
    border-bottom-width: 1px;
    padding: 1rem 1.5rem;
}
.table td {
    white-space: nowrap;
    font-size: .8125rem;
}
thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
}

div{

    border-color: inherit;
    border-style: solid;
    border-width: 0;
}
    </style>
    <body>
        <div style="margin: 20px;" >
            <form method="post" action="connection.php">
                <center>
                    <h1>Registration form</h1>
                    <div border=2px  >
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="enter"></input>
                    <br><br>

                    <label>E-mail:</label>
                    <input type="text" name="email" placeholder="enter"></input><br><br>

                    <label>Gender:</label>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female" >Female
                    <input type="radio" name="gender" value="other" >Other<br><br>
    
    
                    <label>City:</label>  
                    <select name="city">
                        <option name="city" value="nagpur">Nagpur</option>
                        <option name="city" value="pune">Pune</option>
                        <option name="city" value="mumbai">Mumbai</option>
                    </select>  <br><br>
                    
                    <input type="submit"></input>
                </div>
                </center>
                
            </form>

        </div>
        <hr>
        <hr>
        <div>
        <center>
            <h1>Registration table</h1>
        <table border=2px>
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>
            </thead>
            
                <?php
                    
                    require_once'functions.php';
                    $sql="SELECT * FROM `information`";
                    $result=mysqli_query($pdo,$sql);
                    $i=0;
                    while (($row=mysqli_fetch_assoc($result))) {
                        $i=$i+1;
                        echo"
                        <tbody>
                            <tr>
                                <td>".$i."</td>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["gender"]."</td>
                                <td>".$row["city"]."</td>
                            </tr>
                        </tbody>
                        ";
                    
                    }

                ?>    
            
        </table>
        <center>
        </div>
    </body>
</html>