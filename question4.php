<?php

function blueOcean($haystacks, $keys) {
	$count_keys = count($keys);
	$count_haystacks = count($haystacks);
	for ($i = 0; $i < $count_keys; $i++) {
		for ($j = 0; $j < $count_haystacks; $j++) {
			if ($keys[$i] == $haystacks[$j]) {
				unset($haystacks[$j]);
			}
		}
	}
	print_r($haystacks);
	return $haystacks;
}

$haystacks = [1,5,5,5,5,3];
$keys = [5];
echo blueOcean($haystacks, $keys);
