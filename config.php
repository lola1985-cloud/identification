<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>config.php</title>
</head>
<body>
    <div align="center">
        <h2>inscription</h2>
</br>
<form method="post" action="">
    <table>
        <tr>
        <td>
            <label for="pseudo">Pseudo :</label>
        </td>
    
    <td>
    <input type="text"
    placeholder="votre pseudo" id="pseudo" name="pseudo" />
    </td>
        </tr>
        <tr>
            <td>
                <label for="mail"> Mail:</label>
            </td>
            <td> <input type="text"
        placeholder="votre mail" id="mail" name="mail" /></td>
        </tr>
        <tr>
            <td>
                <label for="mail2">confirmation du mail:</label>
            </td>
            <td>
                <input type="text" placeholder="confirmez votre mail" id="mail2" name="mail2" />
            </td>
        </tr>
        <tr>
            <td>
                <label for ="mdp">votre mot de passe :</label>

            </td>
            <td>
                <input type="password"placeholder="votre mot de passe" id="mdp" name="mot de passe" />
            </td>
        </tr>
        <tr>
            <td>
                <label for ="mdp2"> confirmation du mot de passe : </label>

            </td>
            <td>
            <input type="password" placeholder="confirmation du mot de passe" id="mdp2" name="confirmez votre mdp" />
          </td>
        </tr>
        <tr>
            <td>
                <form action="age.php"methode="getage.php">  </form>
                <b>Anée de naissance:</b>
                <select name="année">
                    <?php
                    for($i=2004;$i<2020;$i++)
                    {
                        echo '<optionvalue="'.
                        $i.'"selected/> '.$i.'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
    </table>
    <br />
    <input type="submit" value="je m'inscris" />
</form>
    </div>
    
</body>
</html>