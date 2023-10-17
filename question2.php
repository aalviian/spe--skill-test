<?php

function findOutlier($integers) {
  $oddArray = [];
  $evenArray = [];
  foreach ($integers as $integer) {
    if ($integer % 2 === 0) {
      $evenArray[] = $integer;
    } else {
      $oddArray[] = $integer;
    }
  }
  return count($oddArray) === 1 ? $oddArray[0] : $evenArray[0];
}

$integers = [160, 3, 1719, 19, 11, 13, -21];
if (count($integers) < 3) {
	return;
}
echo findOutlier($integers);