<?php
/*
Template Name: Search Page
*/
?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class=custom-form>
        <input type="search"
               placeholder="Поиск по сайту"
               name="s"
               class="search-field"
               value="<?php the_search_query(); ?>" />
        <button type="submit" class="search-icon"></button>
    </div>
</form>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>