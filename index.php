<?php
session_start();
include 'database.php';


$db = mysqli_connect("localhost", "root", "", "motors");

// INSERT Forward botton
if (isset($_POST['Forward'])) {
    // insert
    $sql = "INSERT INTO control (directions) VALUES ('Forward')";
    if (mysqli_query($db, $sql)) {
        header("location: 23.html");
    } else {
        echo  "<script>alert('Something wrong! plases try again');</script>";
    }
}

// INSERT Left botton
if (isset($_POST['Left'])) {
    // insert
    $sql = "INSERT INTO control (directions) VALUES ('Left')";
    if (mysqli_query($db, $sql)) {
        header("location: 231.html");
    } else {
        echo  "<script>alert('Something wrong! plases try again');</script>";
    }
}

// INSERT Stop botton
if (isset($_POST['Stop'])) {
    // insert
    $sql = "INSERT INTO control (directions) VALUES ('Stop')";
    if (mysqli_query($db, $sql)) {
        header("location: 232.html");
    } else {
        echo  "<script>alert('Something wrong! plases try again');</script>";
    }
}

// INSERT Right botton
if (isset($_POST['Right'])) {
    // insert
    $sql = "INSERT INTO control (directions) VALUES ('Right')";
    if (mysqli_query($db, $sql)) {
        header("location: 233.html");
    } else {
        echo  "<script>alert('Something wrong! plases try again');</script>";
    }
}

// INSERT Backward botton
if (isset($_POST['Backward'])) {
    // insert
    $sql = "INSERT INTO control (directions) VALUES ('Backward')";
    if (mysqli_query($db, $sql)) {
        header("location: 234.html");
    } else {
        echo  "<script>alert('Something wrong! plases try again');</script>";
    }
}


// selecte last direction 
$direction = "";
$sql = "SELECT directions FROM control ORDER BY id DESC LIMIT 1";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    $direction = $row['directions'];
} else {
    echo  "<script>alert('Something wrong! plases try again');</script>";
}


?>


<html>

<head>

    <title>Control </title>



    <link rel="stylesheet" type="text/css" href="23n.css">

</head>


<body>

    <form action="" method="post">


        <button type="submit" name="Forward" class="big-button">Forward</button>

        <button type="submit" name="Left" class="big-button" onclick="document.location = '231.html' ">
            Left</button>

        <button type="submit" name="Stop" class="big-button" onclick="document.location = '232.html' ">
            Stop</button>

        <button type="submit" name="Right" class="big-button" onclick="document.location = '233.html' ">Right</button>


        <button type="submit" name="Backward" class="big-button" onclick="document.location = '234.html' ">Backward</button>

    </form>


    <h3 style="padding: 20px;position: absolute;top: 100px;color: #51777c;">{<?php echo 'last direction was ' . $direction; ?>}</h3>


</body>

</html>