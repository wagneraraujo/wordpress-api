<?php

//remover o default api
remove_action('rest_api_init', 'create_initial_rest_routes', 99);

//path theme
$dirbase = get_template_directory();
require_once $dirbase.'/endpoints/user_post.php';

function expire_token(){
  return time() + (60*60*24);

}
add_action('jwt_auth_expire', 'expire_token');

?>
