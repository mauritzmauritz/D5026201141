<!DOCTYPE html>

<head>
    <title>Praktikum 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            color: black;
        }

        #title {
            background-color: #ffffe6;
            border-style: solid;
            border-width: 1px;
            border-bottom: 0px;
            border-radius: 8px 8px 0px 0px;
            margin-top: 3em;
            margin-left: 1em;
            margin-right: 1em;
            padding-top: 1.7em;
            padding-left: 0.5em;
            padding-right: 0.5em;
            text-align: center;
        }

        #body {
            border-style: solid;
            border-top: 0;
            border-radius: 0px 0px 8px 8px;
            border-width: 1px;
            margin-left: 1em;
            margin-right: 1em;
        }
    </style>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            $('#warning').modal();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-lg-auto" id="title">
                <h5>JavaScript Form Validation</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mx-lg-auto" id="body">
                <div class="isiform ml-4">
                    <br>
                    <p style="color: red; font-size: 10px;">* All fields are mandatory *</p>

                    <form action="https://sites.google.com/view/amauritzt" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input pattern="[A-Za-z\s]+" required type="text" class="col-11 form-control"
                                style="padding-left: 5px">
                        </div>
                        <div class="form-group">
                            <label>Username(6-8 characters):</label>
                            <input pattern=".{6,8}" required type="text" class="col-11 form-control"
                                style="padding-left: 5px">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required type="email"
                                class="col-11 form-control" style="padding-left: 5px">
                        </div>
                        <div class="form-group">
                            <label>State:</label>
                            <select required class="col-11 form-control mb-3" style="padding-left: 5px">
                                <option selected value="">Please Choose</option>
                                <option>West Java</option>
                                <option>East Java</option>
                                <option>Central Java</option>
                                <option>Banten</option>
                                <option>DKI Jakarta</option>
                                <option>DIY</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input required type="text" class="col-11 form-control">
                        </div>
                        <div class="form-group">
                            <label>Zip Code:</label>
                            <input pattern="[0-9]{6}" required type="text" class="col-11 form-control"
                                style="padding-left: 5px">
                        </div>
                        <button type="button submit" class="btn btn-warning col-11 mb-3" style="color:white">Check
                            Form</button>
                        <div class="modal fade" id="warning">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Warning!</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        Some parameters are invalid!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>