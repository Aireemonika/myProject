<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  
    <div class="wrapper1">
        <div class="title1">
          <h1>contact us form</h1>
        </div>
        <div class="contact-form">
            <form method = "post" action = "contactus.php">
          <div class="input-fields"> 
            <input type="text" class="input" placeholder="Name" name="name">
            <input type="email" class="input" placeholder="Email Address" name="email" pattern=".+@gmail\.com">
            <input type="phone" class="input" placeholder="Phone" name="phone">
            <input type="text" class="input" placeholder="Subject" name="subject">
          </div>
          <div class="msg">
            <textarea placeholder="Message" name="message"></textarea>
            <form class="form-inline my-2 my-lg-0">
                  
                    <button class="btn btn-outline-primary-fixed my-1 btn-lg" style="width: 200px;" type="submit">Explore More</button>
                  </form>
            </form>
          </div>
        </div>
        </div> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>