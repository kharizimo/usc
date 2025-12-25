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
                <?php 
                $sql="select * from v_blog";
                $rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
                foreach($rows as $row){
                    echo '<div class="col-md-4">'.blog_item($row).'</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->