#!/bin/bash
bower install;
cp bower_components/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php wp_bootstrap_navwalker.php;
mkdir assets;
mkdir src;
cp -r bower_components/Fedanator/assets/* assets;
cp -r bower_components/Fedanator/src/* src;
cp bower_components/Fedanator/gulpfile.js gulpfile.js;
cp bower_components/Fedanator/package.json package.json;
npm install;
rm bootup.sh;
