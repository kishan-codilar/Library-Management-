<html>
    <head>
        <title>library management system</title>
    </head>
    <body>
        <form action="storedata.php" method = "post">
            <div>
                <label>ID</label>
                <input type = "number"  name = "id">
            </div>
            <div>
                <label>Book Name</label>
                <input type = "text" name = "bookname">
            </div>
            <div>
                <label>Author</label>
                <input type = "text" name = "author">
            </div>
            <div>       
                <label>Published Date</label>
                <input type = "date" name = "publishdate">
            </div>
            <div>
                <label>Insert Image</label>
                <input type="file" name = "bookimage">
            </div>
            <div>
                <button>Submit</button>
            </div>
        </form>

    </body>
</html>
    