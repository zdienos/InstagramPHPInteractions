<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startfollowing = 'edge_follow":{"count":';
$endfollowing = '},';

$patternfollowing = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startfollowing, '/'), preg_quote($endfollowing, '/')
);

if (preg_match($patternfollowing, $str, $matches)) {
    list(, $match) = $matches;
    $following = $match;
}
?>
