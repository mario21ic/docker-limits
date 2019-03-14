#!/bin/bash

docker build -t mario21ic/stress .

echo "### Try ###"
echo "docker run -ti mario21ic/stress bash"
echo "docker run -ti --cpuset-cpus='0' --cpus=1 --cpu-shares=256 -m 300M --memory-swap -1 mario21ic/stress bash"

echo "### Stress ###"
echo "stress --cpu 8 --io 4 --vm 2 --vm-bytes 1024M --timeout 10s"
