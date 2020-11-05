<?php
if ($handle = opendir('.')) {
	echo '<ul>';
    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<li><a href='$entry' target='_blank'>$entry</a></li>";
        }
    }
	echo '</ul>';
    closedir($handle);
}