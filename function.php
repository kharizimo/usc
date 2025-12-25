<?php 
function blog_item($arg){
    $ret=<<<EOT
    <div class="card bg-secondary d-flex h-100">
      <img src="img/$arg->img" class="card-img-top" alt="$arg->titre">
      <div class="card-body">
        <h5 class="card-title text-bold">$arg->titre</h5>
        <p class="card-text d-flex justify-content-between">
            <span>$arg->auteur</span>
            <small class="d-block">$arg->create_at</small>
        </p>
        <a href="blog-single?id=$arg->id" class="text-warning">Lire plus <span class="fa fa-arrow-right"></span></a>
      </div>
    </div>
EOT;
return $ret;
}
function formation_item($arg){
    $ret=<<<EOT
    <div class="card bg-dark text-start position-relative d-flex h-100">
        <div class="position-absolute w-100 text-center">
            <p class="text-warning fw-bold p-3" style="background-color: rgba(0,0,0,.7);"> 
                <span class="fa fa-circle text-warning"></span> $arg->etat</p>
        </div>
      <img src="img/$arg->img" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-bold">$arg->lib</h5>
        <p class="card-text d-flex justify-content-between">
          <span>$arg->categorie_lib</span>
        </p>
        <h3 class="align-right">$arg->prix $</h3>
        <a href="session-single?id=$arg->id" class="text-warning text-end">Lire plus <span class="fa fa-arrow-right"></span></a>
      </div>
    </div>
EOT;
return $ret;
}