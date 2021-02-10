<?php 

/**
*  print_r coké
*  @param mixed $var La variable à déboger
*/

function debug($var)
{
    echo '<pre style="height:200px;overflow-y: scroll;font-size:.8em;padding: 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    print_r($var);
    echo '</pre>';
}

// Fonction FORMULAIRE 

function ValidationText($errors,$data,$key,$min,$max)
{
  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Minimum '.$min.' caractères';
    } elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Maximum '.$max.' caractères';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}

function cleanXss($value)
{
  return trim(strip_tags($value));
}

function emailValidation($err,$mail,$key)
{
    if(!empty($mail)) {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'E-mail invalide.';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}

function validPass($errors,$password1,$key1,$password2,$min,$max){
    if(!empty($password1 && $password2)) {
      if($password1 == $password2){
        if(mb_strlen($password1) < $min) {
          $errors[$key1] = 'Minimum' .$min . 'caractères';
        }
        elseif(mb_strlen($password1) > $max) {
          $errors[$key1] =  'Maximum ' .$max . 'caractères';
        }
      }
      else {
        $errors[$key1] = 'Veuilez renseigner le même mot de passe';
      }
    }
    else {
      $errors[$key1] = 'Veuillez remplir les champs';
    }
  
    return $errors;
}


//////////// FIN DE FONCTION FORMULAIRE ///////////////////

//////////// PAGINATION

function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

/////////////// FIN DE PAGINATION //////////////////

// R E D I R E C T I O N ///////////////////////////////////////////////////////
function redirect($page) {
  header("Location: $page");
}
// R E D I R E C T I O N   T E M P O ///////////////////////////////////////////
function redirectTempo($value, $page) {
  header("refresh:$value;url=$page");
}

// V A L I D A T I O N   T E X T /////////////////////////////////////////////////////
function validText($errors, $data, $key, $min, $max) {
  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Le champ doit être plus grand que ' . $min . ' caractères.';
    } elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Le champ doit être plus petit que ' . $max . ' caractères.';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
  return $errors;
}
// V A L I D A T I O N   E M A I L ///////////////////////////////////////////////////
function validEmail($errors, $data, $key) {
  if(!empty($data)) {
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
      $errors[$key] = 'Format de l\'email invalide.';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
  return $errors;
}
// V A L I D A T I O N   P A S S W O R D /////////////////////////////////////////////
function validPassword($errors, $data, $data2, $key, $key2, $min, $max) {
  $majuscule        = preg_match('@[A-Z]@', $data);
  $minuscule        = preg_match('@[a-z]@', $data);
  $chiffre          = preg_match('@[0-9]@', $data);
  // $caractereSpecial = preg_match('@[^\w]@', $data);

  if(!empty($data)) {
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&.)(}{_-]{8,12}$/', $data)) {
      $errors[$key] = 'Le mot de passe doit contenirs ....';
    }
    // if(mb_strlen($data) < $min) {
    //   $errors[$key] = 'Le mot de passe doit être plus grand que ' . $min . ' caractères.';
    // } elseif(mb_strlen($data) > $max) {
    //   $errors[$key] = 'Le mot de passe doit être plus petit que ' . $max . ' caractères.';
    // } elseif(!$majuscule || !$minuscule || !$chiffre) {
    //   $errors[$key] = 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractére spécial.';
    // }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
  if (!empty($data2)) {
    if ($data != $data2) {
      $errors[$key] = 'Les mots de passe ne correspondent pas.';
    }
  } else {
    $errors[$key2] = 'Veuillez renseigner ce champ.';
  }
  return $errors;
}
// G E N E R A T E   R A N D O M   S T R I N G ///////////////////////////////////////
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// F O R M A T A G E   D A T E ///////////////////////////////////////////////////////
function formatDate($dateValue) {
  return date('d/m/Y H:i', strtotime($dateValue));
}
// F O R M A T A G E   D A T E   W H I T H O U T   M I N U T E ///////////////////////
function formatDateWithoutMinute($dateValue) {
  return date('d/m/Y', strtotime($dateValue));
}
// I S   L O G G E D /////////////////////////////////////////////////////////////////
function isLogged(){
  if(!empty($_SESSION['user'])) {
    if(!empty($_SESSION['user']['id']) && is_numeric($_SESSION['user']['id'])) {
      if(!empty($_SESSION['user']['pseudo'])) {
        if(!empty($_SESSION['user']['role'])) {
          if($_SESSION['user']['role'] == 'abonne' || $_SESSION['user']['role'] == 'admin') {
            if(!empty($_SESSION['user']['ip']) && $_SESSION['user']['ip'] == $_SERVER['REMOTE_ADDR']) {
              return true;
            }
          }
        }
      }
    }
  }
  return false;
}
// S H O W   J S O N /////////////////////////////////////////////////////////////////
function showJson($data) {
  header("Content-type: application/json");
  $json = json_encode($data, JSON_PRETTY_PRINT);
  if($json) {
    die($json);
  } else {
    die('Error in json encoding');
  }
}
function timeToMY($englishTime)
{
  return date('YYY-mm-dd H:i:s', strtotime($englishTime));
}
function find_parent($array, $needle, $parent = null) {
  foreach ($array as $key => $value) {
      if (is_array($value)) {
          $pass = $parent;
          if (is_string($key)) {
              $pass = $key;
          }
          $found = find_parent($value, $needle, $pass);
          if ($found !== false) {
              return $found;
          }
      } else if ($key === 'id' && $value === $needle) {
          return $parent;
      }
  }
  return false;
}
function is_logged(): bool
{
  $isLogged = true;
  if (empty($_SESSION['user'])) {
    return $isLogged = false;
  } else {
    foreach ($_SESSION['user'] as $key => $value) {
      if (!isset($key) && !isset($value)) {
        return $isLogged = false;
      }
    }
  }
  return $isLogged;
}

function isAdmin()
{
  if (!is_logged()) {
    header('Location: ../admin/403.php');
  } elseif ($_SESSION['user']['role'] != 'admin') {
    header('Location: ../admin/403.php');
  }
}

function ipfromHex($hex)
{
    $ip = hexdec($hex[0].$hex[1]) .'.'. hexdec($hex[2].$hex[3]) .'.'. hexdec($hex[4].$hex[5]) .'.'. hexdec($hex[6].$hex[7]);
    return $ip;
}
