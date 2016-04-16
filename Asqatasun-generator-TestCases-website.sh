#!/bin/bash

## WIP

# 
rm -rf ./www-build
rm -rf ./build-tmp

# 
mkdir -p ./build-tmp
cd ./build-tmp
git clone https://github.com/Asqatasun/Asqatasun.git

# 
cd ..
mkdir -p www-build
cp -vr www-src/* www-build/
mv -v ./build-tmp/Asqatasun/rules/rules-rgaa3.0/src/test/resources/testcases/rgaa30 ./www-build/rgaa-3.0-test-cases/
rm -rf ./build-tmp

#
php Asqatasun-generator-TestCases-website.php

