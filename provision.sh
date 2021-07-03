sudo yum -y install http://dev.mysql.com/get/mysql57-community-release-el7-7.noarch.rpm
sudo yum -y install mysql-community-server

sudo systemctl enable mysqld.service
sudo systemctl start mysqld.service
