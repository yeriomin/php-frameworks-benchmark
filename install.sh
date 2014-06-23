#!/bin/bash
CURDIR=$(pwd)

if [[ ! -f "$CURDIR/phalcon/cphalcon/build/64bits/modules/phalcon.so" ]]
then
    if [[ `uname -a` == *Ubuntu* ]]
    then
        # These packages are required to build phalcon
        sudo apt-get install php5-dev php5-mysql gcc libpcre3-dev
    fi
    cd phalcon
    git clone --depth=1 git://github.com/phalcon/cphalcon.git
    cd cphalcon/build
    sudo ./install
    cd $CURDIR
fi

# Now installing composer and using it to install all other frameworks
if [[ ! -f "$CURDIR/composer.phar" ]]
then
    curl -sS https://getcomposer.org/installer | php
fi

for DIR in *
do
    if [[ -f "$CURDIR/$DIR/composer.json" ]]
    then
        cd "$CURDIR/$DIR"
        ../composer.phar install
    fi
done;