 
 <?php 
 $title=''
 ?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Services</h5>
                        <h1>How We Help You</h1>
                    </div>
                </div>
            </div>
            <div class="service-item service-item-left">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5">
                        <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                            <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                            <h3 class="text-uppercase">Fashion Shows</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat
                                fermentum urna, sed gravida enim eleifend vitae. Ut rhoncus non metus at convallis.
                                Maecenas pharetra placerat mauris. Phasellus quis egestas dui. Nullam ornare consectetur
                                rhoncus. Praesent elit mauris, feugiat quis convallis et, egestas a tellus.</p>
                            <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                    class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Blog</h5>
                        <h1>Restez à la page</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $sql="select * from v_blog limit 3";
                $rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
                foreach($rows as $row){
                    echo '<div class="col-md-4">'.blog_item($row).'</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="title mx-5 px-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-center">
                            <h5>Newsletters</h5>
                            <h1>Jamais rien rater</h1>
                        </div>
                    </div>
                    <p class="fs-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">Restez branché sur nos prochaines formations et activités.</p>
                    <p class="text-warning mb-5 d-none">Votre adresse mail est stocké avec succès !!</p>
                    <div class="position-relative wow fadeInUp" data-wow-delay="0.3s">
                        <input class="form-control border-0 bg-dark rounded-pill w-100 py-4 ps-4 pe-5" type="email" id="email_newsletters"
                            placeholder="Adresse mail">
                        <button type="button" class="btn btn-primary py-3 px-4 position-absolute top-0 end-0 me-2" id="btn_newsletters"
                            style="margin-top: 7px;">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Services</h5>
                        <h1>How We Help You</h1>
                    </div>
                </div>
            </div>
            <div class="service-item service-item-left">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5">
                        <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                            <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                            <h3 class="text-uppercase">Fashion Shows</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat
                                fermentum urna, sed gravida enim eleifend vitae. Ut rhoncus non metus at convallis.
                                Maecenas pharetra placerat mauris. Phasellus quis egestas dui. Nullam ornare consectetur
                                rhoncus. Praesent elit mauris, feugiat quis convallis et, egestas a tellus.</p>
                            <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                    class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Tendance</h5>
                        <h1>Nos meilleurs formations</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php 
                $sql="select * from v_formation limit 3";
                $rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
                foreach($rows as $row){
                    echo '<div class="col-md-4">';
                    echo formation_item($row);
                    echo '</div>';
                }
                 ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
     <script>
        document.querySelector('#btn_newsletters').addEventListener('click',async()=>{
            await fetch(`ajax.php?_a=newsletter&email=${document.getElementById('email_newsletters').value}`)
            .then(p=>p.text()).then(r=>alert(r))
            document.getElementById('email_newsletters').value=''
        })
     </script>