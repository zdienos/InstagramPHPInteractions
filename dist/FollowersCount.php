<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startfollowers = '"edge_followed_by":{"count":';
$endfollowers = '},';

$patternfollowers = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startfollowers, '/'), preg_quote($endfollowers, '/')
);

if (preg_match($patternfollowers, $str, $matches)) {
    list(, $match) = $matches;
    $followers = $match;
}
?>
