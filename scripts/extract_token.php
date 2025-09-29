<?php
$html = @file_get_contents(__DIR__ . '/../login.html');
if (! $html) {
    exit(0);
}
if (preg_match('/name="_token"\s+value="([^"]+)"/s', $html, $m)) {
    echo $m[1];
    exit(0);
}
// fallback: try to find meta tag
if (preg_match('/<meta name="csrf-token" content="([^"]+)"/s', $html, $m2)) {
    echo $m2[1];
    exit(0);
}
exit(0);

