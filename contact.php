<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="main__section main__formulaire">
            <h2>Contactez-moi!</h2>
            <p>Une remarque? Une suggestion? Ou encore mieux: un poste à m'offrir? N'hésitez pas à m'écrire!</p>
            <form metho="post" action="contact.php">
                <p>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Ex: Jean Dupont" size="30" maxlength="100"
                        required />
                </p>

                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Ex: nom.prenom@email.com" size="30"
                        maxlength="100" required />
                </p>

                <p>
                    <label for="objet">Sujet</label>
                    <input type="text" name="objet" id="objet" placeholder="Ex: Demande d'informations" size="30"
                        maxlength="200" required />
                </p>

                <p>
                    <label for="message">Message</label>
                    <textarea type="text" name="message" id="message"
                        placeholder="Ex: Vous pouvez écrire votre message ici." maxlength="500" row="10" cols="28"
                        required></textarea>
                </p>

                <p>
                    <input class="submit" type="submit" value="Envoyer">
                </p>
            </form>
            <?php
            if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if ($position_arobase === false)
                echo '<p>Votre email doit comporter un arobase.</p>';
                else {
                    $retour = mail('devweb.molla@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                    if ($retour)
                    echo '<p>Votre message a été envoyé.<p>';
                    else
                    echo '<p>Erreur.</p>';
                }
            }
            ?>
        </section>
</body>
</html>