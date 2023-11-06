
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>Contactez-moi !</title>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg10 col-lg-offset-1">
                    <form method="post" action="" id="contact-form" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="name">Nom<span class="blue"> *</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email<span class="blue"> *</span></label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone">Telephone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                                <p class="comments"></p>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-12"> 
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>