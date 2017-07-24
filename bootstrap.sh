#!/usr/bin/env bash

# Update and upgrade packages at beggining 

sudo apt-get update
sudo apt-get -y upgrade


########  Install Docker ###########

# Add docker repository key to apt-key for package verification:
sudo apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D

# Add the docker repository to Apt sources:
echo "deb https://apt.dockerproject.org/repo ubuntu-trusty main" | sudo tee /etc/apt/sources.list.d/docker.list

sudo apt-get install docker-engine -y



########  Install Docker Compose ###########

sudo apt-get install python-pip -y
sudo pip install docker-compose



######## Add vagrant user to docker group ###########

sudo gpasswd -a vagrant docker
