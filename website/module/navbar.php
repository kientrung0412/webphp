<nav class="navbar navbar-expand-md navbar-light bg-faded mybar bg-light ">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-md-flex d-block w-100">
        <div class="collapse navbar-collapse mx-auto w-auto justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
        foreach($con->query('select * from loaihang') as $row)
        {
            $ID=$row['IdLoaiHang'];
            $type=$row['TenLoaiHang'];
            $name=$row['Title'];
            $img=$row['Img'];  
        ?>
                <li class="nav-item text-center fl">
                    <a class="nav-link text-center flex-last" href="index.php?action=item&item=<?php echo"$ID"; ?>&typesp=<?php echo"$name" ?> ">
                        <img width="25" height="25" src="<?php echo " $img"; ?>">
                        <dt class="pt-1">
                            <?php echo "$name"; ?></dt>
                    </a>
                </li>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
<script type="text/javascript">
       $(document).ready(function(){
        var a = $('.mybar').offset().top;
        $(window).scroll(function(){
            var b = $(window).scrollTop();
            if ( b > a) {
                $('.mybar').addClass('fixed-top');

            }
            else if (b<a) {
                $('.mybar').removeClass('fixed-top');
            }
        })
       })
    </script>