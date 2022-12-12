<!DOCTYPE html>
<html>

<head>
    <title>HAM talent</title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>

<!-- Header -->
    <div id="header">
        <div class="image">
            <img src="Image/ham_logo.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Inscrie-te</a></li>    
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>

<!-- Main -->
    <div id="main">
        <div class="heading">
            <h1>Formular inscriere HAM talent</h1>
        </div>
        <div class="form">
            <form id="signup" class="form" name="form" action="Functions/addUserData.php" method="post">  
                <div class="form-field">
                    <label for="username">Nume proprietar:</label>
                    <input required="required" type="text" name="nume_proprietar" id="nume_proprietar" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="username">Oras:</label>
                    <input required="required" type="text" name="oras" id="oras" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="telefon">Numar de telefon:</label>
                    <input required="required" type="text" name="telefon" id="telefon" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="animal">Nume animal de companie:</label>
                    <input required="required" type="text" name="animal" id="animal" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="varsta">Varsta animal de companie:</label>
                    <input required="required" type="text" name="varsta" id="varsta" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="descriere">Descriere animal de companie:</label>
                    <input required="required" type="text" name="descriere" id="descriere" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field"> 
                        <div class="form-group">
                            <label for="uploadfile">Incarca fotografie:</label>
                            <input required="required" class="form-control" type="file" name="uploadfile" value="" />
                        </div>
                        <!-- <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                        </div> -->
                        <small></small>
                </div>

                <div class="form-field">
                    <input onclick="showSuccessMessage()" type="submit" value="Finalizeaza inscrierea">
                </div>
            </form>
        </div>
    </div>

<!-- Footer -->
    <div id="footer">
        <div class="menu">
            <ul>
                <li><a href="index.php">Inscrie-te!</a></li>
                <li><a href=" ">About</a></li>
                <li><a href=" ">Contact</a></li>
                <li><a href="login.php">Login</a></li>

            </ul>
        </div>
        <div class="social">
            <ul>
                <li><a href=" ">Facebook</a></li>
                <li><a href=" ">Twitter</a></li>
                <li><a href=" ">Instagram</a></li>
            </ul>
        </div>
    </div>

<!-- JS Script -->
    <script src="Js/app.js"></script>
</body>

</html>