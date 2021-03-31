<?php
include_once 'backend/user.php';
include_once 'backend/user_session.php';
$userSession = new UserSession();
$user = new User();
if (isset($_SESSION['user'])) {
 $user->setUser($userSession->getCurrentUser());
} else if (isset($_POST['nombreemp']) && isset($_POST['contrasena'])) {
  $userForm = $_POST['nombreemp'];
  $passForm = $_POST['contrasena'];
if($user->userExists($userForm,$passForm)){
  $userSession->setCurrentUser($userForm);
  $user->setUser($userForm);
}else{

header("Location: ../../sistema/login");
}
} else {
  header("Location: ../../sistema/login");
}
