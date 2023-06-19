<?php

include_once('../controller/UserC.php');

$error = "";

// create client
$user = null;

// create an instance of the controller
$UserC = new UserC();
if (
    isset($_POST["idUser"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["email"]) &&
    !empty($_POST["password"]) &&
    isset($_POST["dob"])
) {
    if (
        !empty($_POST["idUser"]) &&
        !empty($_POST['lastName']) &&
        !empty($_POST["firstName"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["dob"])
    ) {
        $user = new User(
            $_POST['idUser'],
            $_POST['lastName'],
            $_POST['firstName'],
            $_POST['email'],
            $_POST['password'],
            new DateTime($_POST['dob'])
        );
        $id=$_POST["idUser"];
        $UserC->updateUser($user,$id);
        header('Location:displayUser.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="displayUser.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idUser'])) {
        $user = $UserC->showUser($_POST['idUser']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idUser">Id Client:
                        </label>
                    </td>
                    <td><input type="text" name="idUser" id="idUser" value="<?php echo $user['ID']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstName">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $user['FIRSTNAME']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $user['LASTNAME']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Address:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $user['EMAIL']; ?>" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $user['PASSWORDD']; ?>" id="password">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="dob" id="dob" value="<?php echo $user['DOB']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>