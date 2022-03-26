#!/bin/bash

service mysql start
service apache2 start
cat init.sql | mysql

service mysql stop
service apache2 stop

rm /bootstrap/init.sql
rm /var/www/init.sql