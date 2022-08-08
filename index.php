
<?php include 'dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Tutorial</title>
    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script>
        // JQuery Here

        $(document).ready(function() {
            let commentCount = 2;
            $("button").click(function() {
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            });
        });
    </script>

    <!-- <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                $("#test").load("code.txt", {
                    FirstName: "Samundra",
                    LastName: "Bhandari"
                }, function() {
                    alert("Hi there!");
                });
            });
        });
    </script> -->


</head>

<body>
    
    <div class="container py-5 bg-white" id="comments">
        <?php 
            $sql = "SELECT * FROM comments LIMIT 2";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)>0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<p>";
                    echo "$row[author]";
                    echo "<br>";
                    echo "$row[message]";
                    echo "</p>";
                }
            } else {
                echo "There are no comments.";
            }
        ?>
    </div>

        <button>Show More Comments</button>



    <!-- <div id="test">
        <p>This is my first time in AJAX.</p>
    </div>
    <button id="btn">Welcome To AJAX</button> -->
</body>

</html>