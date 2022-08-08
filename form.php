<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

        <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();

                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });
            });
        });
    </script>

</head>
<body>
    <form action="mail.php" method="POST">
        <div class="container mt-5">            
            <input type="text" id="mail-name" name="name" placeholder="Full Name">
            <br>
            <input type="text" id="mail-email" name="email" placeholder="Email">
            <br>
            <select id="mail-gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br>
            <textarea id="mail-message" name="message" placeholder="Message"></textarea>
            <br>
            <button type="submit" id="mail-submit" name="submit">Send Email</button>
            
            <p class="form-message"></p>
        </div>
    </form>
</body>
</html>