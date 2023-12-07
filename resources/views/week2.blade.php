<html>

<head>
    <title>Responsive Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm() {
            //return true;

            var nama = document.getElementById("bil1");
            var setuju = document.getElementById("switch1");
            var n = document.getElementById("nrp");

            //alert(setuju.checked);
            //return false;
            if (nama.value == "") {
                nama.focus();
                Swal.fire("Nama harus terisi terlebih dahulu")
                //alert("Nama harus diisi terlebih dahulu");
                return false
            }

            if (setuju.checked == false) {
                Swal.fire("Anda Harus Menyetujui");
                return false;
            }

            if (n.value == "" ) {
                nrp.focus();
                Swal.fire("NRP harus diisi");
                return false;
            }

            if (isNaN(n.value) ) {
                nrp.focus();
                Swal.fire("NRP harus berupa angka");
                return false;
            }

            if (n.value.length != 10 ) {
                nrp.focus();
                Swal.fire("NRP harus 10 digit");
                return false;
            }

            if (n.value.substring(0,4) != "5026" ) {
                nrp.focus();
                Swal.fire("NRP harus diawali dengan 5026");
                return false;
            }



        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Form Pendafteran Anggota HMSI</h1>
        <form action="https://www.google.com" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="bil1">Nama Mahasiswa :</label>
                <input id="bil1" type="text" class="form-control" placeholder="harus diisi" />
            </div>
            <div class="form-group">
                <label for="nrp">NRP Mahasiswa :</label>
                <input id="nrp" type="text"class="form-control" placeholder="harus diisi" />
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="switch1">
                <label class="custom-control-label" for="switch1">Toggle me</label>
            </div>
            <input type="submit" class="btn btn-dark" value="KIRIM">
        </form>
    </div>
</body>

</html>
