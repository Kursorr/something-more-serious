<?php

return [
  'database' => [
    'dns' => 'pgsql',
    'host' => 'localhost',
    'port' => '5432',
    'name' => 'test',
    'user' => 'Ravaniss',
    'password' => '',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]
];
