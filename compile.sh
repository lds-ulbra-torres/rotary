#!/bin/bash

if [[ ! -d build ]]; then
	mkdir build
fi
if [[ ! -e node_modules && -e package.json ]]; then
	echo "Resolving dependecies"
	echo
	npm install
fi
if [[ -e node_modules ]]; then
	echo ""
	echo "Compiling..."
	echo ""
	browserify -t vueify -e js/main.js -o build/build.js
fi

 
