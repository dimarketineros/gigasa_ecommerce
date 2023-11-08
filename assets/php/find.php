<?php 
session_start();
header('Content-Type: application/json');
if (isset($_POST['mode']) && !empty($_POST['mode'])) {

    $mode = $_POST['mode'];

    switch ($mode) {
        case 'add_cart':
            echo json_encode('SUCCESS');
            if (!isset($_SESSION['values'])) {
              $_SESSION['values'] = array();
            }

            $values = $_SESSION['values'];
            if (!empty($values)) {
              $lastValue = end($values);
            } else {
              $lastValue = 0;
            }

            $newValue = $lastValue + 1;
            array_push($_SESSION['values'], $newValue);
            
            echo json_encode($newValue);
            
            
        break;

        case 'del_cart':
            echo json_encode('SUCCESS');
        break;

        default:
            # code...
            break;
    }
}else{
    echo json_encode('error');
    exit();
}

?>