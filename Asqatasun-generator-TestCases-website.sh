#!/bin/bash

## WIP

# 
rm -rf ./www
rm -rf ./tmp-build

# 
mkdir -p ./tmp-build
cd ./tmp-build
git clone https://github.com/Asqatasun/Asqatasun.git

# 
cd ..
mv -v ./tmp-build/Asqatasun/rules/rules-rgaa3.0/src/test/resources/testcases/rgaa30 www
rm -rf ./tmp-build

