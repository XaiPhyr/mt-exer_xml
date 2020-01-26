<?php

switch ($_GET['page']) {
    case 'raw':
        include("controllers/index.php");
        $index->index();
        break;

    default:
        include("controllers/index.php");
        $index->rss();
        break;
}
