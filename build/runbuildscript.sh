#!/usr/local/bin/bash
# Custom build script to ensure the Scss files are converted to CSS files first.
scss --update ../scss/style.scss:../css/style.css
ant build
rm -rf ../../Sense/*
cp -r ../publish/* ../../Sense/
