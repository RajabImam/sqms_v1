<?php
  // DB Params
  /** Development
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '######');
  define('DB_NAME', 'sqms'); */
  /**Production */
  define('DB_HOST', 'eu-cdbr-west-02.cleardb.net');
  define('DB_USER', 'b24261ecdd80d8');
  define('DB_PASS', '65f315b9');
  define('DB_NAME', 'heroku_bfbb328a96000d1');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  //define('URLROOT', 'http://localhost/sqms');
  define('URLROOT', 'https://sqms.herokuapp.com');
  //Reporting/Analytics API base URL
  define('BASEURL', 'http://localhost:3000');
  // Site Name
  define('SITENAME', 'Dream Guardian - Sleep Quality Monitoring System');
  // App Version
  define('APPVERSION', '1.0.0');
