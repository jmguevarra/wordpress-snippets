<?php
/*
 * Snippet Name: Theme Option
 * 
 */



$theme_data = wp_get_theme();
echo $theme_data->get( 'Name' );       
echo $theme_data->get( 'ThemeURI' );
echo $theme_data->get( 'Description' );
echo $theme_data->get( 'Author' );
echo $theme_data->get( 'AuthorURI' );
echo $theme_data->get( 'Version' );
echo $theme_data->get( 'Template' );
echo $theme_data->get( 'Status' );
echo $theme_data->get( 'Tags' );
echo $theme_data->get( 'TextDomain' );
echo $theme_data->get( 'DomainPath' );