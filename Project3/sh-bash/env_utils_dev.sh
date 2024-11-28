#!/bin/bash

#Utils for back-end coder
#Editor: VSCodium and IDE NetBEANS
#Repo_Code_Utils
#Client Git_GitKraken
#Meld
apt install -y meld

#Downloaded packages
url=" https://github.com/VSCodium/vscodium/releases/download/1.94.2.24286/codium_1.94.2.24286_amd64.deb https://dlcdn.apache.org/netbeans/netbeans-installers/23/apache-netbeans_23-1_all.deb https://release.axocdn.com/linux/gitkraken-amd64.deb"

cd /tmp
wget $url
# INSTALL DEB
sudo dpkg -i codium_1.94.2.24286_amd64.deb apache-netbeans_23-1_all.deb gitkraken-amd64.deb

#Browsers

#Chromium
apt install -y chromium

#Firefox Developer

# START
set -e

## UNINSTALL
# Remove binaries
sudo rm -rf /opt/firefox-developer/ /usr/bin/firefox-developer

# DOWNLOAD
wget https://download-installer.cdn.mozilla.net/pub/devedition/releases/132.0b9/linux-x86_64/en-US/firefox-132.0b9.tar.bz2

# EXTRACT
tar -xf firefox-132.0b9.tar.bz2
rm -rf firefox-132.0b9.tar.bz2
mv firefox firefox-developer

# INSTALL
mv firefox-developer /opt

# Copy and Create Links
cp /opt/firefox-developer/browser/chrome/icons/default/default128.png /opt/firefox-developer/icons/ && ln -s /opt/firefox-developer/firefox /usr/bin/firefox-developer

# DESKTOP INTEGRATION
echo -e "[Desktop Entry]\nEncoding=UTF-8\nName=Firefox Developer Edition\nComment=Firefox Developer Edition\nExec=/opt/firefox-developer/firefox %u\nTerminal=false\nIcon=/opt/firefox-developer/browser/chrome/icons/default/default128.png\nStartupWMClass=Firefox Developer\nType=Application\nCategories=Network;WebBrowser;\nMimeType=text/html;text/xml;application/xhtml+xml;application/xml;application/vnd.mozilla.xul+xml;application/rss+xml;application/rdf+xml;x-scheme-handler/http;x-scheme-handler/https;\nStartupNotify=true\n" | sudo tee -a /usr/local/share/firefox-developer.desktop

# NOTIFY
echo "Installed!"


#Containers

#Orchestration and Manadgment Container
#Docker Swarm
#Docker Engine

# Add Docker's official GPG key:
apt install -y  ca-certificates curl &&sudo install -m 0755 -d /etc/apt/keyrings &&sudo curl -fsSL https://download.docker.com/linux/debian/gpg -o /etc/apt/keyrings/docker.asc
sudo chmod a+r /etc/apt/keyrings/docker.asc

# Add the repository to Apt sources:
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/debian \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
sudo apt-get update

#Install Docker
apt install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
#Verify installed docker
sudo docker run hello-world

#VM_Manage VM
#QEMO+Virt-manager
apt install -y qemu-kvm qemu-system qemu-utils python3 python3-pip libvirt-clients libvirt-daemon-system bridge-utils virtinst libvirt-daemon virt-manager -y

#VirtualBox
#Add VirtualBox APT Repository
curl -fsSL https://www.virtualbox.org/download/oracle_vbox_2016.asc|sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/vbox.gpg && curl -fsSL https://www.virtualbox.org/download/oracle_vbox.asc|sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/oracle_vbox.gpg && echo "deb [arch=amd64] http://download.virtualbox.org/virtualbox/debian $(lsb_release -cs) contrib" | sudo tee /etc/apt/sources.list.d/virtualbox.list
#Install VirtualBox
apt update -y && apt install linux-headers-$(uname -r) dkms -y && apt install virtualbox-7.0. -y
#Add Your User to the vboxusers Group
usermod -aG vboxusers $USER && newgrp vboxusers
#Install VirtualBox Extension Pack
wget https://download.virtualbox.org/virtualbox/7.0.22/Oracle_VM_VirtualBox_Extension_Pack-7.0.22.vbox-extpack && VBoxManage extpack install --replace Oracle_VM_VirtualBox_Extension_Pack-7.0.22.vbox-extpack && VBoxManage list extpacks -y

#Auto deployment_testing VM
wget https://cdn.localwp.com/releases-stable/9.1.0+6719/local-9.1.0-linux.deb && dpkg -i local-9.1.0-linux.deb


#Terminal: ZSH + Framework Oh My Zsh
apt install -y zsh && which zsh /usr/bin/zsh && echo $SHELL && chsh -s $(which zsh) && wget https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh -O - | zsh && ls ~/.oh-my-zsh && cp ~/.oh-my-zsh/templates/zshrc.zsh-template ~/.zshrc && source ~/.zshrc

