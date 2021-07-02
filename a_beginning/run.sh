#!/bin/bash
# Script for:
# 1- Build or not an image
# 2- Running the container (detached, volume and exposed ports)
# It will prepare the "practising" directory for sharing it
# to the container, this way we can 
# use the lxc as a localserver
# ############################
# All variables are defined before execution for better understanding and modifying
#
# Log variables:
#   - xxx_log_sym  (where xxx can be an action or descriptive name)
#       :: This will be pattern for these variables,
#          and they will give the user details while execution
# -----eHLui-----
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

command_log_sym="$CYAN[COMMAND]$NO_COLOR ->"
info_log_sym="$CYAN[INFO]$NO_COLOR ->"


building_img_cmd="docker image build . -t $image_name"
running_cmd="docker run -p $host_port:$container_port --name $container_name -d -v $host_dir:$container_dir $container_name"

no_images_deleted="No images are deleted"

while true; do
    read -p  "Do you need to build the image? [y/n]: " opt
    case $opt in
        [Yy]* ) 
              echo -e $command_log_sym $building_img_cmd
              break
              ;;
        [Nn]* )
              echo -e $info_log_sym $no_images_deleted
              break
              ;;
        * ) echo "Please answer yes or no. [y/n]";;
    esac
done

echo -e "$command_log_sym $running_cmd"
$running_cmd