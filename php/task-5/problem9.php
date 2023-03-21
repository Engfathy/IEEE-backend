<?php
mkdir("Programming", 0711);
mkdir("Programming/PHP", 0711);


if (is_dir("Programming/PHP")) {
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed\n";
}
if (is_dir("Programming")) {
    rmdir("Programming");
    echo "Directory Programming Removed\n";
}