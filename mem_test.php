#!/usr/bin/php
<?php

$big_array = array();

$param = (int)$argv[1];
$mb = $param * 13120;
//for ($i = 0; $i < 1000000; $i++)
for ($i = 0; $i < $mb; $i++)
{
   $big_array[] = $i."a";
}

echo "After building the array.\n";
print_mem();

unset($big_array);

echo "After unsetting the array.\n";
print_mem();


function print_mem()
{
   /* Currently used memory */
   $mem_usage = memory_get_usage();
   
   /* Peak memory usage */
   $mem_peak = memory_get_peak_usage();

   echo 'The script is now using: <strong>' . round(($mem_usage / 1024) / 1014) . "MB</strong> of memory.\n";
   echo 'Peak usage: <strong>' . round(($mem_peak / 1024) / 1024) . "MB</strong> of memory.\n\n";
}

