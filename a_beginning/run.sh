#!/bin/bash
# Script for:
# 1- Build or not an image
# 2- Running the container (detached, volume and exposed ports)
# It will prepare the "practising" directory for sharing it
# to the container, this way we can 
# use the lxc as a localserver
# ############################
# All variables are defined before execution for better understanding and modifying

CYAN='\033[0;36m'
NO_COLOR='\033[0m'

yes_capital="Y"
yes_min="y"

image_name="php-beginner"
container_name=$image_name

host_port=3000
container_port=80

host_dir="$(pwd)/practising/"
container_dir="/var/www/html"

info_log_sym="$CYAN[COMMAND]$NO_COLOR ->"

building_img_cmd="docker image build . -t $image_name"
running_cmd="docker run -p $host_port:$container_port --name $container_name -d -v $host_dir:$container_dir $container_name"


echo -n "Do you need to build the image? [y/Y]"
read OPT

if [ $OPT == $yes_min ] || [ $OPT == $yes_capital ]
then
  echo -e "$info_log_sym $building_img_cmd"
  $building_img_cmd
fi

echo -e "$info_log_sym $running_cmd"
$running_cmd