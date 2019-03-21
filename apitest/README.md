Using a simple node js wrapper to send requests to smash.gg GraphQL API 
note: may need to run commands with root privileges 

1. install nodejs
2. install npm
3. npm init
4. npm install graphql-request (as seen in https://github.com/prisma/graphql-request)
5. node sgg.js


Using browserify to display api response on browser while allowing "require()" statements

1. npm install -g browserify
2. npm install uniq
3. browserify main.js -o bundle.js
