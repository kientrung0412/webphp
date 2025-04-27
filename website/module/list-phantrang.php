<nav aria-label="Page navigation example ">
	<ul class="pagination pt-3">
    	<?php for ($i=1; $i <= $page; $i++) { ?>
    		<li class="page-item ">
    			<a href=" ?trang=<?php echo "$i" ?>&item=<?php echo "$item" ?>&action=item&typesp=<?php echo"$a" ?> " class="page-link text-white bg-danger">
                	<?php echo "$i"; ?>
            	</a>
        	</li>
    	<?php } ?>
	</ul>
</nav>        