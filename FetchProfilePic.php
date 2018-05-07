<?
$str = file_get_contents("https://www.instagram.com/$ourusername/");

$startpic = 'meta property="og:image" content="';
$endpic = '" />';

$patternpic = sprintf(
    '/%s(.+?)%s/ims',
    preg_quote($startpic, '/'), preg_quote($endpic, '/')
);

if (preg_match($patternpic, $str, $matches)) {
    list(, $match) = $matches;
    $piclink = $match;
}

?>
