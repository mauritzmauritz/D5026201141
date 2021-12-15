<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jangan PHP-in Aku</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Flight Ticket Purchasing</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        </style>
        <script>
            var name, jSpasi, lName, email, address, arrival, depart;
            $(document).ready(function () {
                $(".form2").hide();
                $(".form3").hide();
                $("#savebutton1").click(function () {
                    name = $("#name").val();
                    jSpasi = name.indexOf(" ");
                    lName = name.substring(jSpasi + 1);
                    email = $("#email").val();
                    address = $("#address").val();
                    $(".form1").slideUp();
                    $(".form2").slideDown();
                })
            })
        </script>
    </head>

    <body>
        <div class="container-fluid" style="height: 10%;" id="header">
            <br>
            <h2>Redgale Airways</h2>
            <p>Wherever you go, whatever you do, we will be right here serving you</p>
        </div>

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

        <div class="container"><br>
            <div class="row">
                <div class="col">
                    <h2 id="t1">Flight Ticket Purchase Form</h2>
                    <p id="t2">Please enter the correct information on the form below:</p>
                    <br>

                    <form action="kode" method="get">
                        <div class="form1">
                            <h2>Personal Identity</h2>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>: &nbsp;<input name="name" type="text" id="name" placeholder="John Doe"></td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>: &nbsp;<input name="email" type="text" id="email"
                                            placeholder="jdoe123@mail.com"></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>: &nbsp;<input name="address" type="text" id="address"
                                            placeholder="14 Ebbenston Ave."></td>
                                </tr>
                            </table>
                            <button type="button" class="btn btn-outline-primary" id="savebutton1">Save All...</button>
                        </div>

                        <div class="form2">
                            <h2>Flight Information</h2>
                            <table>
                                <tr>
                                    <td>
                                        Departing Terminal:
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <select name="departcity">
                                                <option value="sby" id="departsub">Surabaya</option>
                                                <option value="byw" id="departbw">Banyuwangi</option>
                                                <option value="smg" id="departsmg">Semarang</option>
                                                <option value="slo" id="departso">Solo</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Arriving Terminal:
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <select name="arrivecity">
                                                <option value="sby" id="departsub">Surabaya</option>
                                                <option value="byw" id="departbw">Banyuwangi</option>
                                                <option value="smg" id="departsmg">Semarang</option>
                                                <option value="slo" id="departso">Solo</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <button type="button submit" class="btn btn-outline-primary" id="savebutton2">Save and
                                Print</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</body>
</html>