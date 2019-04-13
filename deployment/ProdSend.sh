#!/bin/bash

#checks what the most current version is 
while read c;
do
	echo "$c"
	let num=$c
done < currentVersion.txt

#sends latest version from QA cluster to Development
echo "Version $num is the latest version"
scp ~/deployment/version$num/* cvarkey@10.0.0.6:/var/www/html
