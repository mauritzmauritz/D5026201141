<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Thank You for Flying with Redgale Airways!</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            color: white;
            background-color: #292929;
        }

        #header {
            color: white;
            background-color: #292929;
        }

        tr,
        td {
            padding: 0.7em;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<!-- jSpasi = name.indexOf(" ");
lName = name.substring(jSpasi + 1); -->

<body>
    <?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $address = $_GET["address"];
    $departcity = $_GET["departcity"];
    $arrivecity = $_GET["arrivecity"];
    $jSpasi = strpos($name, " ");
    $lName = substr($name, $jSpasi);
    ?>
    <div class="container-fluid" style="height: 10%;" id="header">
        <br>
        <h2>Redgale Airways</h2>
        <p>Wherever you go, whatever you do, we will be right here serving you</p>
        <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: #373737;">
            <a class="navbar-brand" href="#">Flight Ticket Purchase</a>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Website</a>
                </li>
            </ul>
        </nav>


        <div class="form align-content-center" style="text-align: center;">
            <br>
            <h4>Here's your printable ticket!</h4>
            <table border="1px" style="background-color: aliceblue;">
                <tr>
                    <td>
                        <p id="ticketname" style="color: black;">Name :</p>
                    </td>
                    <td>
                        <p id="printname" style="color: black;">
                            <?php
                            echo $lName . ", " . substr($name, 0, 1) . ".";
                            ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p id="ticketemail" style="color: black;">Email :</p>
                    </td>
                    <td>
                        <p id="printemail" style="color: black;">
                            <?php
                            echo $email;
                            ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p id="ticketaddress" style="color: black;">Address :</p>
                    </td>
                    <td>
                        <p id="printaddress" style="color: black;">
                            <?php echo $address; ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p id="ticketdepart" style="color: black;">Departing city :</p>
                    </td>
                    <td>
                        <p id="printdepart" style="color: black;">
                            <?php echo $departcity; ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p id="ticketarr" style="color: black;">Arriving city :</p>
                    </td>
                    <td>
                        <p id="printarr" style="color: black;">
                            <?php echo $arrivecity; ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p id="ty" style="color: black;">Thank you for flying with Redgale Airways!</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>