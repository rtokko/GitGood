#!/bin/bash

#use secure copy to get file from development
scp rtokko@10.0.0.9:/var/www/html/home.php ~/

#declare variable for version number
num=1

#infinite loop to check if version number directory exists
while :
do
	#checks if version does not exists=	
	if [ ! -d "version$num" ]; 
	then
		
		mkdir version$num

		#writes most current version in a text file
		echo "Current Version is: Version $num" 
		echo $num > currentVersion.txt

		#places latest version of our file to newly made directory		
		cp ~/home.php ~/deployment/version$num
		
		#sends all contents of new version directory to QA 
		scp ~/deployment/version$num/* kris123@10.0.0.5:/var/www/html

		break

	else
		#if version already exists, keep looping
		echo "Version $num exists..."
		echo "Checking if next version exists..."

		let "num++"
 	fi

done

