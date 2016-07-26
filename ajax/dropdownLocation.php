<?php

include_once ("../../../inc/includes.php");

Session::checkCentralAccess();

if (isset ($_POST['users_id']) && $_POST['users_id'] > 0) {
  $user = new User();
  $user->getFromDB($_POST['users_id']);
  $value = $user->fields['locations_id'];
} else {
  $value = Dropdown::EMPTY_VALUE;
}

Location::Dropdown(array(
   'name'   => "locations_id",
   'value'  => $value,
   'entity' => $_POST['entities_id'],
   'rand'   => $_POST['rand'],
));