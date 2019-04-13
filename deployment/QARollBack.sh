#!/bin/bash

#checks what the most current version is in order to roll back to previous
while read c;
do
	echo "$c"
	let num=$c-1
done < currentVersion.txt

#sends latest version from QA cluster to Development
let c=$num+1
echo "Version $c will roll back to Version $num"
scp ~/deployment/version$num/* kris123@10.0.0.5:/var/www/html
