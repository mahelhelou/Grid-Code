$categories = get_categories($args);
$categories_length = count($categories);

for ( $i = 0; $i < $categories_length; $i++ ) {  

    $cat_name = $categories[i]->name;

        if( $i%2 ) {

        echo 'Is odd';
        } else {

        echo 'Is even';
        }
}