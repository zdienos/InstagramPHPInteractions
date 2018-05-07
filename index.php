<?
include 'config.php';
include 'FollowersCount.php';
include 'FollowingCount.php';
include 'FetchProfilePic.php';
include 'PostNumb.php';

echo '<img src="'.$piclink.'" />';
echo "<br>";
echo 'Followers: '.$followers;
echo "<br>";
echo 'Following: '.$following;
echo "<br>";
echo 'Number of posts: '.$postnumb;
?>
