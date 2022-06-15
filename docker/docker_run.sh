#!/bin/bash

docker run -ti --rm --name=db_project_runtime \
           -v $(pwd)/../html:/app \
           -v $(pwd)/../mysql_db:/var/lib/mysql \
           -p "80:80" \
           -p "3306:3306" \
           -v ~/.vim:/root/.vim \
           -v ~/.vimrc:/root/.vimrc \
           mattrayner/lamp:latest-2004-php7
