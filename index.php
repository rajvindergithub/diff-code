<?php
use SebastianBergmann\Diff\Differ;

$differ = new Differ;
print $differ->diff('foo', 'bar');

?>