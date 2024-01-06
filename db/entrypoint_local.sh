#!/bin/bash
sed -i 's/wordpress_show_source.lc/127.0.0.1:4200/g' /docker-entrypoint-initdb.d/your_database.sql
