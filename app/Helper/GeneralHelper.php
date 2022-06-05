<?php 

use Illuminate\Support\Facades\Cache;

function getParentShowOf($param) {
  $route = str_replace('admin.', ''. $param);
  return Cache::get('admin_side_menu')->where('as', $route)->first();
}

function getParentOf($param) {
  $route = str_replace('admin.', ''. $param);
  $permission = Cache::get('admin_side_menu')->where('as', $route)->first();
  return $permission ? $permission->parent : $route;
}