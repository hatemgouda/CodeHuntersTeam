<?php


 $promotiondown=$db->promotiondown();

    if($promotiondown == TRUE)
    {
     $_SESSION['success'] = 'Moderator Promoted Down Successfully';
        header('location:index.php');
     }