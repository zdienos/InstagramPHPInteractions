<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startpost = 'Following, ';
$endpost = ' Posts';

$patternpost = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startpost, '/'), preg_quote($endpost, '/')
);

if (preg_match($patternpost, $str, $matches)) {
    list(, $match) = $matches;
    $postnumb = $match;
}
?>
