<?php

echo "Hello World" <br>;
require_once("isdk.php");
$app = new iSDK;
// Test Connect
if ($app->cfgCon("tz108"))
  {
    echo "connected";
  } else {
    echo "Not";
  }
  /*
  1. Connect to API
  2. Locate Contact ID by REQUEST Var
  3. Make Contact ID Equal to a variable
  4. API -- Call in the NUMBER value of the http post
  5. API -- Call in and PUT the NUMBER Value of the http post
   into the Contact ID Variable
  //// API CALLS = FUNCTION ////
  */
