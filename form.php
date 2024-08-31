<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <img class="bg" src="lbg.webp" alt="" />
    <div class="container">
        <h1>welcome to ladakh trip travel form</h1>
        <p>
            enter your details and submit form to confirm your participation in the
            trip
        </p>
        <form action="index.php" method="post">
            <input name="name" id="name" placeholder="Enter your name" />
            <input name="age" id="age" placeholder="Enter your age" />
            <input name="gender" id="gender" placeholder="Enter your gender" />
            <input type="email" name="email" id="email" placeholder="Enter your email" />
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number" />
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here">
        </textarea>
            <button class="btn">submit</button>
        </form>
    </div>

   
</body>

</html>