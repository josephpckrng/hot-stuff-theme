<?php
/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage Cusotm Theme
 * @since 1.0
 * @version 1.0
 */

?>
<form action="" class="form-search d-flex inactive align-items-center">
    <div class="search-form align-items-center">
        <input type="text" placeholder="Start searching..." class="input-search search-field">
        <div class="search-icon inactive">
            <i class="far fa-search"></i>
        </div>
    </div>
    <div class="results-wrapper">
        <div id="search-results">
            <ul class="results-items">

            </ul>
            <div class="results-footer">
                <a href="" class="btn-all-results"><span>View all results</span> (<span id="results-total"></span>)</a>
            </div>
        </div>
    </div>

</form>


<?php
/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage Cusotm Theme
 * @since 1.0
 * @version 1.0
 */

?>

<!--<form role="search" method="get" class="search-form" action="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--    <input type="search"  id="search-form" class="search-field" placeholder="--><?php //echo esc_attr_x( 'Search', 'placeholder', 'unica-wp' ); ?><!--" value="--><?php //echo get_search_query(); ?><!--" name="s" />-->
<!--    <button type="submit" class="search-submit"> <i class="fas fa-search"></i></button>-->
<!--</form>-->
