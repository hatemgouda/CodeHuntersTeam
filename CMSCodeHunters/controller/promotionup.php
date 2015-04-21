<?php


$promotionup=$db->promotionup();

    if($promotionup == TRUE)
    {
     $_SESSION['success'] = 'User Promoted Up Successfully';
        header('location:index.php');
    }