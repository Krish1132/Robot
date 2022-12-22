<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="robot.php" method="post">
        <div class="box">
            <div class="form">
                <div class="inputBox">
                    <input type="text" name="fname" id="fname" required>
                    <span><label for="fname">Name</label></span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="id" id="id" required>
                    <span><label for="id">ID</label></span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="sec" id="sec" required>
                    <span><label for="sec">Section</label></span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="insti" id="insti" required>
                    <span><label for="insti">Institution</label></span>
                    <i></i>
                </div>
                <div class="links">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
            </div>
        </div>
    </form>
</body>
</html>