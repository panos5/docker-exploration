# Defines our Vagrant environment
#
# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
   
   # proxy setup if needed
   # config.proxy.http     = "http://172.22.250.177:80"
   # config.proxy.https    = "http://172.22.250.177:80"
   # config.proxy.no_proxy = "localhost,127.0.0.1"
   
   config.vm.box = "ubuntu/trusty64"
   config.vm.hostname = "hermes"
   config.vm.box_check_update = true
  
   # Run the following to install the vagrant guest plugin -- "vagrant plugin install vagrant-vbguest"
   config.vbguest.auto_update = true
   
   config.vm.network :forwarded_port, host: 8080, guest: 8080
   config.vm.network :forwarded_port, host: 27017, guest: 27017
   config.vm.network :forwarded_port, host: 3000, guest: 3000
   
   # Create a private network, which allows host-only access to the machine
   # using a specific IP.
   config.vm.network "private_network", ip: "192.168.33.58"
  
   # Share an additional folder to the guest VM. The first argument is
   # the path on the host to the actual folder. The second argument is
   # the path on the guest to mount the folder. And the optional third
   # argument is a set of non-required options.
   config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=777"]    
    
    
   # Install ansible in order to provision the machine
   config.vm.provision :shell, :path => "./bootstrap.sh" , run: 'always'
end
