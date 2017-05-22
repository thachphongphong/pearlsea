#run msql
 docker run --name pearlsea-mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=pearsea123 -d mysql:5.6

#build
- docker build -t laravel-pearl .

#defaut
- docker run -p 80:80 --link pearlsea-mysql:pearlsea-mysql  --name=pearlsea -v /Users/linhdo/WORKSPACES/FTP/PEARLSEA/public_html/:/var/www/laravel/ -d laravel-pearl


http://localhost/vi/home

administrator/pearlsea123