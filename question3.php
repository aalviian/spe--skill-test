<?php

function findNeedle($haystacks, $needle) {
	$count_haystacks = count($haystacks);
	for ($i = 0; $i < $count_haystacks; $i++) {
		if ($haystacks[$i] == $needle) {
			return $i;
		}
	}
	return;
}

$haystacks = ["red", "blue", "yellow", "black", "grey"];
$needle = "blue";
echo findNeedle($haystacks, $needle);
