<html>
    <head>
        <title>Library Management system</title>
        <link rel = "stylesheet" href="index.css">
    </head>
    <body>
        <h3>Library management System</h3>
        <form action="pininsert.php" method="GET">
            <button>Add</button>
        </form>
        <div>
            <table border = "1">
                <tr>
                    <th>Id</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Publish Date</th>
                    <th>Book Image</th>
                </tr>
                <?php
                
                require_once __DIR__ . '/dbconnection.php';
               
                
                $connection = new dbConnection();                                   
                $conn=$connection->connect();
                


                $query = $conn->prepare("SELECT * FROM MYBOOK");

                $query->execute();
                $row = $query->fetchAll();
                
                
                foreach($row as $rowdata)
                {?>
                    <tr>
                    <td> <?php echo $rowdata['id']; ?></td>
                    <td> <?php echo $rowdata['bookname']; ?></td>
                    <td> <?php echo $rowdata['author']; ?></td>
                    <td> <?php echo $rowdata['publishdate']; ?></td>  
                    <td> <img width=150 src="./images/<?php echo $rowdata['bookimage'];?>"> </td>
                    <td><a href="delete.php?id=<?php echo $rowdata['id']; ?>"><button>delete</button></a></td>
                    </tr>   
                <?php }?>
            </table>
        </div>
    </body>
</html>