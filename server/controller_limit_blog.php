<?php
    include('connection.php');
    
    $query_limit_blog = "SELECT * FROM blogs order by blog_date LIMIT 3";

    $stmt_limit_blog = $conn->prepare($query_fav_product);

    $stmt_limit_blog->execute();

    $limit_blogs = $stmt_limit_blog->get_result();
?>