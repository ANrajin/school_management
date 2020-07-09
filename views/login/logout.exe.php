<?php
  require '././helper/helper.php';

  session_start();
  session_destroy();
  Redirect("index.php?logi=login");
