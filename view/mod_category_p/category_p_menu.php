<?php
$count =0;
if (!defined('IN_CONTEXT')) die('access violation error!');

if (!function_exists('showCategoryMenuP')) {
    function showCategoryMenuP(&$category_tree) {
        if(empty($category_tree)) $category_tree = array();
        foreach ($category_tree as $category) {
?>
    
    <?php
            if ($count%2== 0) {
    ?>
 
   <a href="<?php echo Html::uriquery('mod_product', 'prdlist', array('cap_id' => $category->id)); ?>">
<div class="specialty-grids-top">
                    <div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <figure class="icon">
                            <img src="images/1.png" alt="" />
                        </figure>
                        <h5><?php  echo $category->name;?></h5>
                        <p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                </div> 
   </a>
    

    <ul>
	    <?php showCategoryMenuP($category->slaves['ProductCategory']); ?>
    </ul>
    <?php
            
        $count++;

    } else {
                $count++;

    ?>
    <a href="<?php echo Html::uriquery('mod_product', 'prdlist', array('cap_id' => $category->id)); ?>">
       <div class="specialty-grids-top">
                    
                    <div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <figure class="icon">
                            <img src="images/2.png" alt="" />
                        </figure>
                        <h5><?php  echo $category->name;?></h5>
                        <p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
    </a>

    
    <?php
         if ($count==4) {
            break;
            }   
    }
    ?>
    <?php
        }
    }
}
$id_seed = Toolkit::randomStr();
?>
<?php if (trim(ParamHolder::get('product_category_type',''))=="click") { ?>
	

<style type="text/css">
@media screen, print { 
	ul.mktree  li { list-style: none; } 
	ul.mktree, ul.mktree ul , ul.mktree li { margin-left:7px; padding:0px; }
	ul.mktree  li           .bullet { padding-left: 10px; }
	ul.mktree  li.liOpen    .bullet { cursor: pointer; background: url(<?php echo P_TPL_WEB; ?>/images/minus.gif)  center left no-repeat; }
	ul.mktree  li.liClosed  .bullet { cursor: pointer; background: url(<?php echo P_TPL_WEB; ?>/images/plus.gif)   center left no-repeat; }
	ul.mktree  li.liBullet  .bullet { cursor: default; background: url(bullet.gif) center left no-repeat; }
	ul.mktree  li.liOpen    ul { display: block; }
	ul.mktree  li.liClosed  ul { display: none; }

}
</style>

<?php } ?>

<div class="list_main category">
	<div class="prod_type">
	<div id="pro_type_<?php echo $id_seed; ?>">
		<ul class="<?php if (trim(ParamHolder::get('product_category_type',''))=="click") { ?>mktree<?php } ?>" id="tree1">
			<?php showCategoryMenuP($categories); ?>
			<div class="blankbar1"></div>
		</ul>		
	</div>
	</div>
	<div class="list_bot"></div>
</div>
<div class="blankbar"></div>

<script type="text/javascript" language="javascript">
/**
 * for menu-drop type
 */
var type = "<?php echo trim(ParamHolder::get('product_category_type',''));?>";
if (type == 'click') {

	} else {
 	$("#pro_type_<?php echo $id_seed; ?> > ul").droppy();
	$("#pro_type_<?php echo $id_seed; ?> ul ul li:last-child").css("border","0px");
}
</script>

