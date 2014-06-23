#!/bin/sh
sudo apt-get install php5-dev php5-mysql gcc libpcre3-dev
git clone --depth=1 git://github.com/phalcon/cphalcon.git
cd cphalcon/build
sudo ./install
