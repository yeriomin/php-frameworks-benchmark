#!/bin/bash
REQUESTS=10000
CONCURRENCY=100

CURRENT_DIR=$(pwd)
declare -A FRAMEWORKS

FRAMEWORKS[bullet]="sum?op1=2&op2=3"
FRAMEWORKS[fatfree]="sum/2/3"
FRAMEWORKS[flight]="sum/2/3"
FRAMEWORKS[limonade]="sum/2/3"
FRAMEWORKS[noframework]="?op1=2&op2=3"
FRAMEWORKS[phalcon]="index.php?_url=/sum/2/3"
FRAMEWORKS[silex]="sum/2/3"
FRAMEWORKS[slim]="sum/2/3"
FRAMEWORKS[tonic]="sum/2/3"
FRAMEWORKS[zaphpa]="sum/2/3"
FRAMEWORKS[zf1]="?method=getSum&op1=2&op2=3"
FRAMEWORKS[zf2]="?method=getSum&op1=2&op2=3"

for FRAMEWORK in "${!FRAMEWORKS[@]}"
do
    echo "Testing $FRAMEWORK framework"
    cd "$CURRENT_DIR/$FRAMEWORK"
    rm nohup.out
    nohup php -S localhost:8000 index.php &
    PHP_PID=$!
    sleep 1
    ab -n $REQUESTS -c $CONCURRENCY "http://localhost:8000/${FRAMEWORKS[$FRAMEWORK]}" > ../benchmark.$FRAMEWORK.txt
    kill -9 $PHP_PID
done
