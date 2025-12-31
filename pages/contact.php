<?php 
$title="Contact";

if($_a=='action'){
    $headers = "From: $email" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8";
    $msg=<<<EOT
    Nom : $nom \r\n
    Email : $email\r\n
    Sujet : $sujet\r\n
    \r\n_______________________________\r\n\n
    $message

EOT;
    mail($app->email,$sujet,$message,$headers);
    header('location:contact-success');
}
?>
<!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Contact</h5>
                            <h1>Prêt à échanger ?</h1>
                        </div>
                    </div>
                    <h4 class="lh-base mb-4">Pour nous contacter, veuillez utiliser les informations ci-dessous :</h4>
                    <table class="table table-dark mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        <tr>
                            <td>TELEPHONE</td>
                            <td>+0123456789</td>
                        </tr>
                        <tr>
                            <td>E-MAIL</td>
                            <td>info@example.com</td>
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td>123 Avenue des Champs, Kinshasa, RDC</td>
                        </tr>
                        <tr class="border-dark">
                            <td>SUIVEZ-NOUS</td>
                            <td>
                                <a class="me-1" href="#!"><i class="fab fa-x-twitter"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-youtube"></i></a>
                                <a class="me-1" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="" method="post" class="<?= isset($success)?'d-none':'' ?>"> 
                        <input type="hidden" name="_a" value="action">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-secondary border-0" name="nom"
                                        placeholder="Votre nom">
                                    <label for="name">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-secondary border-0" name="email"
                                        placeholder="Adresse mail">
                                    <label for="email">Acresse mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-secondary border-0" name="sujet"
                                        placeholder="Sujet">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-secondary border-0"
                                        placeholder="Laissez un message" name="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Envoyer le Message</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center <?= !isset($success)?'d-none':'' ?>">
                        <h1>Message envoyé</h1>
                        <p class="lead">
                            Votre message est envoyé avec succès. <br/>
                            Nous vous reviendrons dans le plus bref délai.
                        </p>
                        <button class="btn btn-outline-primary px-5 mt-5">Page d'accueil</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->