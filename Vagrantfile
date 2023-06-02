Vagrant.configure("2") do |config|

    # Use Ubuntu 22.04 to match live server
    config.vm.box = "ubuntu/jammy64"

    # Give the VM an externally visible IP address
    config.vm.network "private_network", type: "dhcp"

    config.vm.provision "ansible" do |ansible|
        ansible.playbook = "einstein.yml"
        ansible.verbose = "vv"

        # Default user is vagrant, so become root
        ansible.become = true
    end

end
