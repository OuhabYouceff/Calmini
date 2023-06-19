<?php

include('../controller/UserC.php');
$UserC = new UserC();
$list = $UserC->listUser();

?>

<html>

<head></head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $user) : ?>
                <tr>
                    <td><?php echo $user['ID']; ?></td>
                    <td><?php echo $user['LASTNAME']; ?></td>
                    <td><?php echo $user['FIRSTNAME']; ?></td>
                    <td><?php echo  $user['EMAIL']; ?></td>
                    <td><?php echo $user['DOB']; ?></td>
                    <td align="center">
                        <form method="POST" action="updateUser.php">
                            <input type="submit" name="update" value="Update">
                            <input type="hidden" value=<?PHP echo $user['ID']; ?> name="idUser">
                        </form>
                    </td>
                    <td>
                        <a href="deleteUser.php?idUser=<?php echo $user['ID']; ?>">Delete</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>