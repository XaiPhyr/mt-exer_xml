<?php

switch ($_GET['page']) {
    default:
        include("controllers/index.php");
        $index->index();
        break;

    case 'rss':
        include("controllers/index.php");
        $index->rss();
        break;
}
