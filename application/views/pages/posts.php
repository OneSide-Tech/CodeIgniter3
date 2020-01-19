<!-- hooking navbar -->
<?php include_once(APPPATH.'/views/layouts/navbar.php')?>
<!-- view post page -->

<section class="post-content-section" style="margin-top: 98px;">
    <div class="container">
        <div class="column">
        <?php 
            if($blog){
                foreach($blog as $blog){       
            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
            $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        ?>
            <div class="card" style="width: 100%; margin-bottom:24px; background: <?php echo $color; ?>;"  >
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $blog->bptitle; ?></h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $blog->bpauthor; ?></h6>
                    <p class="card-text"><?php echo $blog->bpcategory; ?></p>
                    <p class="card-text"><?php echo $blog->message; ?></p>
                    <p class="card-text"><?php echo $blog->bpdate; ?></p>
                </div>
            </div>
        <?php 
            }
        }
        ?>
      </div>
    </div> <!-- /container -->
</section>