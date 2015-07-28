# ph-deployment
Vagrant + Ansible scripts for deployment of an environment with everything necessary for the development of  PixelHumain. With these set of tools, it is possible to replicate a PixelHumain instance in a quick and easy way.

This scripts provision an Ubuntu 14.04 64bit machine with Apache2, PHP and MongoDB. PixelHumain code is deployed along with the following modules:
*  https://github.com/pixelhumain/communecter
*  https://github.com/pixelhumain/citizenToolkit
*  https://github.com/pixelhumain/cityData
*  https://github.com/pixelhumain/opendata

## Configuration and dependencies

1. Install Vagrant. Follow instructions on http://docs.vagrantup.com/v2/installation/index.html
2. Modify **ansible/stage.sample** according to your needs and rename it to **ansible/stage**
3. Modify **ansible/group_vars/vagrant-box.sample** according to your needs and rename it to **ansible/group_vars/vagrant-box**
4. Run ```vagrant up```. Once the machine boots, you can ssh into it by typing ```vagrant ssh```
5. Access the PH instance by browsing http://192.168.33.20/ph/

# License

This material is open and licensed under the GNU General Public License (GPL) v3.0 whose full text may be found at:

http://www.fsf.org/licensing/licenses/gpl-3.0.html
