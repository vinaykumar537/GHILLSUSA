<?php
/**
 * Template for displaying search forms in Purchasing Idaho
 *
 * @package WordPress
 * @subpackage Curatepartners
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<div class="col-sm-7 text-right marg_top5 text-primary">
    Save your time with curate
</div>
<form role="search" method="get" class="form-search" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="col-sm-5 text-right hidden-xs">                                              
        <div class="input-group">

            <input type="search" id="<?php echo $unique_id; ?>" class="form-control search" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search" data-provide="typeahead" autocomplete="off" />
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span> </button>
            </span>

        </div>                                        
    </div>
</form>
<div class="clearfix"></div>