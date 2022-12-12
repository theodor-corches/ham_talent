<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inscrieri</title>
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
    <div class="main">
        <div class="heading">
            <h1>Toate inscrierile</h1>
        </div>
        <?php
    $connect = mysqli_connect("localhost","root","","userform") or die(mysqli_error($connect));
    $fetch_query = "SELECT * FROM inscrieri";
    $result = mysqli_query($connect,$fetch_query) or die(mysqli_error($connect));
    if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
        <thead>
        <th>ID</th>
        <th>Nume</th>
        <th>Oras</th>
        <th>Telefon</th>
        <th>Nume animal</th>
        <th>Varsta animal</th>
        <th>Descriere</th>
        <th>Fotografie</th>
        </thead>
        <tbody>
        <?php 
            while ($user = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nume_proprietar']; ?></td>
                <td><?php echo $user['oras']; ?></td>
                <td><?php echo $user['telefon']; ?></td>
                <td><?php echo $user['nume_animal']; ?></td>
                <td><?php echo $user['varsta_animal']; ?></td>
                <td><?php echo $user['descriere_animal']; ?></td>
                <td><?php echo $user['file_name']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>

<!-- Footer -->
<div id="footeru">
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

</body>

</html>