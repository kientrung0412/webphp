<div class="product-item col-3 flex-last pt-3">
    <?php if ($sale != 0) { ?>
        <div class="discount-rate">
            <?php echo "$sale"; ?> %
        </div>
    <?php } ?>
    <a href="" title="">
        <div class="product-img  border text-center pt-2 pb-2 " id="div-item" >
            <a href="" title="">
                <img id="img-item" src=" <?php echo"$img"; ?> " alt="" width="190px" height="150px;" />
            </a>
        </div>
        <div class="product-name border ">
            <p class="text-center">
                <?php echo "$name"; ?>
                </p>
            <div class="price-item row">
                <div class="float-left pl-4 text-center col-6 ">
                    <?php 
                    if ($sale == 0) 
                    {   ?>
                        <b><?php echo "$price"; ?>đ</b>
                        <?php 
                    }
                        else {
                            $pricesale = $price/100 * (100-$sale) ;
                        ?>
                        <b><?php echo "$pricesale";?>đ</b>
                        <dd><?php echo "$price"; ?> đ</dd>        
                        <?php
                        }
                    ?>
                </div>
                <div class="float-right text-center col-6">
                   <form  method="get" accept-charset="utf-8">
                    <?php if (isset($_SESSION['IDtv'])) { ?>
                         <button type="button" id="<?php echo $ID; ?>" ID class="btn btn-warning mt-1 addcart" >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </button>
                    <?php } else { ?>
                         <button type="button" ID class="btn btn-warning mt-1 addcartno" >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    <?php } ?>
                   </form>
                </div>
            </div>
        </div>
    </a>
</div>

