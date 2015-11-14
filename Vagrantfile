
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ieducar"
  config.vm.box_url = "https://s3-us-west-2.amazonaws.com/portabilis2/public/ieducar/ieducar.box"

  #Compartilhando portas
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "forwarded_port", guest: 5433, host: 5433

#  config.vm.provider "virtualbox" do |v|
#      v.gui = true
#      v.name = "ieducar"
#      v.memory = 1024
#  end

  #Compartilhando pasta do repositório
  config.vm.synced_folder ".", "/home/vagrant/ieducar"

  #public ip
  config.vm.network "public_network", ip: "192.168.0.17"
end
