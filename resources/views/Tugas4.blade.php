<!DOCTYPE html>
<html>

<head>
    <title>jQuery Customization_5026201141</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        $(document).ready(function () {
            $("#button1").click(function () {
                $("p").remove(".tekssi");
                $("img").remove(".logosi");
            });
            $("#button2").click(function () {
                $("p").remove(".teksweb");
                $("img").remove(".logoweb");
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Information Systems ITS 2020 Logo</h1>
                <p class="tekssi">Before being appointed as SI ITS members,
                    I created the SI ITS logo as a temporary logo so that we could have an identity.
                    This logo was made purely using Adobe Illustrator from scratch.</p>
                <img class="logosi" src="https://i.ibb.co/C1sG3J3/image-2021-10-17-020945.png"
                    alt="image-2021-10-17-020945" border="0">
                <h1>4SL (4 Seasons Life Logo)</h1>
                <p class="teksweb">The following is my take on a web project logo named "4SL," which stands for "4
                    Seasons
                    Life."
                    It is a travel blog, hence the implications of food and passport items.
                    I used Adobe Illustrator to create the logo, and Adobe Photoshop to perfect it.</p>
                <img class="logoweb" src="https://i.ibb.co/mcMQbyr/image-2021-10-17-021357.png"
                    alt="image-2021-10-17-021357" border="0">
                <p></p>
                <button id="button1" type="button" class="btn btn-primary">Remove Logo SI and Text</button>
                <button id="button2" type="button" class="btn btn-primary">Remove Logo Web and Text</button>
            </div>
        </div>
    </div>
<br>
</body>

</html>