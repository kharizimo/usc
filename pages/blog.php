<?php 
$title='Blog';
$sql="select * from blog";
$rows=$cn->query($sql)->fetchall(PDO::FETCH_ASSOC);
$pair=false;
?>
<!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Blog</h5>
                        <h1>Nos actualités</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-secondary">
                      <img src="img/blog/blog-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Card title</h5>
                        <p class="card-text d-flex justify-content-between">
                            <span>Author</span>
                            <small class="d-block">2025-12-11 12:11:11</small>
                        </p>
                        <a href="#" class="text-warning">Lire plus <span class="fa fa-arrow-right"></span></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary">
                      <img src="img/blog/blog-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Card title</h5>
                        <p class="card-text d-flex justify-content-between">
                            <span>Author</span>
                            <small class="d-block">2025-12-11 12:11:11</small>
                        </p>
                        <a href="#" class="text-warning">Lire plus <span class="fa fa-arrow-right"></span></a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary">
                      <img src="img/blog/blog-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-bold">Card title</h5>
                        <p class="card-text d-flex justify-content-between">
                            <span>Author</span>
                            <small class="d-block">2025-12-11 12:11:11</small>
                        </p>
                        <a href="#" class="text-warning">Lire plus <span class="fa fa-arrow-right"></span></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->