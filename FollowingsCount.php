<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startfollowing = 'Followers, ';
$endfollowing = ' Following,';

$patternfollowing = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startfollowing, '/'), preg_quote($endfollowing, '/')
);

if (preg_match($patternfollowing, $str, $matches)) {
    list(, $match) = $matches;
    $following = $match;
}
?>
