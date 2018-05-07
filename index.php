<?
include 'config.php';
include 'FollowersCount.php';
include 'FollowingCount.php';
include 'FetchProfilePic.php';

echo '<img src="'.$piclink.'" />';
echo "<br>";
echo 'Followers: '.$followers;
echo "<br>";
echo 'Following: '.$following;
?>
