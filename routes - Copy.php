<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##############################
get('/', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_index.php');
});

// ##############################
get('/admin', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_admin.php');
});

// ##############################
get('/login', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_login.php');
});

// ##############################
get('/users', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_users.php');
});



// ##############################
// ##############################
// ##############################¨

post('/deactive-account', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/deactivate_account.php');
});

post('/login', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/bridge/bridge_login.php');
});

post('/users/create', function(){
  echo 'user created';
});

// ##############################
post('/users/update/:id', function($id){
  echo "Updating user with id: $id";
});

// ##############################
post('/users/delete/:user_id', function($user_id){
  require_once($_SERVER['DOCUMENT_ROOT'].'/apis/api_delete_user.php');
});


// ##############################
post('/db-create-users', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/db/db_create_users.php');
});

// ##############################
post('/db-seed-users', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/db/db_seed_users.php');
});


// For GET or POST
any('/404', function(){
  echo 'Not found';
});