<!DOCTYPE html>

<head>
    <title>ETS PWEB D - 5026201141</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: black;
        }

        #body {
            border-style: solid;
            border-width: 1px;
            padding-left: 1vw;
            padding-right: 0;
            margin-left: 0.7em;
            margin-right: 0.7em;
        }

        .form-group {
            display: inline;
        }

        #isi {
            font-size: 14pt;
        }

        #button1 {
            padding-left: 5em;
            padding-right: 5em;
            margin-right: 4em;
            background-color: #3c43e1;
            color: white;
        }

        #button2 {
            padding-left: 5em;
            padding-right: 5em;
            margin-right: 2em;
            background-color: #2aff17;
            color: black;
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
    <br>
    <div class="container">

        <div class="row">
            <div class="col-sm-7 mx-auto" id="body">
                <div class="isiform ml-4">
                    <br>
                    <p>Abraham Mauritz Talakua<br>Mauritz<br>5026201141</p>
                    <p style="text-align: center; font-size: 16pt;">Form Input Data Barang</p>
                    <br>

                    <div class="row" id="isi">
                        <div class="col-sm-5">
                            <p>Nama Barang</p>
                            <p>Harga</p>
                            <p>Jenis Barang</p>
                            <p>Kode Barcode</p>
                        </div>
                        <div class="col-sm-1 mx-0">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>

                        <div class="col-sm-6">
                            <form action="https://open.spotify.com/track/4cGqn0E8JCSY9gQllQj4Mf?si=b37b893c78194a27"
                                class="needs-validation" novalidate>
                                <input type="text" required minlength="10" class="col-sm-10 mb-1 form-control"
                                    style="padding-left: 5px;" placeholder="Botol Minum">
                                <input type="number" min="5000" required class="col-sm-10 mb-1 form-control"
                                    style="padding-left: 5px;" placeholder="60000">
                                <select required class="col-sm-10 mb-1 form-control" style="padding-left: 5px;">
                                    <option selected disabled value="">Pilih Salah Satu...</option>
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                    <option>Non Mamin</option>
                                </select>
                                <input type="text" required pattern="[0-9]+" minlength="10"
                                    class="col-sm-10 mb-1 form-control" style="padding-left: 5px;" placeholder="1011203413"><br><br>
                        </div>
                        <div class="row mx-auto">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn" id="button1">Kirim</button>
                            </div>
                            <div class="col-sm-5">
                                <button type="reset" class="btn" id="button2">Reset</button>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="warning">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Peringatan!</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Satu atau lebih parameter invalid!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>