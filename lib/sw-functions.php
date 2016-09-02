<?php
/*
* Functions specific to the SiteCraft Starter theme
*/

/*
* get specific data on our user
*
 * @param  int $id The ID of the user that we want to get information about
*
* @param $field The field that we want to get from the WP_User object
*/
function ss_userdata($id, $field, $post = '') {

    $userdata = get_userdata($id) ;
    return $userdata->$field ;

}
