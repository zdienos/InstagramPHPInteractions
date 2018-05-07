<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startfollowers = '<meta property="og:description" content="';
$endfollowers = ' Followers';

$patternfollowers = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startfollowers, '/'), preg_quote($endfollowers, '/')
);

if (preg_match($patternfollowers, $str, $matches)) {
    list(, $match) = $matches;
    $followers = $match;
}
?>
