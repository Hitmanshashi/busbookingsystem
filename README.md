# Saral Yatra Mitra


## What is Saral Yatra Mitra?


Saral Yatra Mitra aims to make the long wait in queues obsolete. Tickets of all buses at all the time slots are made available for a comfortable booking experience, from anywhere. BusKaro provides the users the choice and comfort to plan their travel and evening get-outs from the comfort of their hostels and houses.

The buses are not owned or operated by BusKaro. The tickets for the same are available on BusKaro and are also available with the respective bus contractors.

## The Motivation

BusKaro was conceived as a part of the final year project . The primary motivation however was to get rid of the hassle of engaging in queues for booking bus tickets for students and staffs.

## Installing

- #### Windows
  - Install [WAMP Server](http://www.wampserver.com/en/) or [XAMPP Server](https://www.apachefriends.org/download.html)
  - Navigate to the relevant  directory: 
    - WAMP:   `(install location)/wamp/www` 
    - XAMPP:  `(install location)/htdocs`
  - Clone the repository: `git clone https://github.com/ajwad-shaikh/BusKaro.git`
  - Start the server:
    - WAMP:   `(install location)/wamp/wampmanager.exe`
    - XAMPP:  `(install location)/xampp-control.exe`
  - Open Browser and navigate to `http://localhost/BusKaro`

- #### Apple
  - Install [MAMP Server](https://www.mamp.info/en/downloads/)
  - Navigate to `Applications/MAMP/htdocs/`
  - Clone the repository: `git clone https://github.com/ajwad-shaikh/BusKaro.git`
  - Start MAMP `Applications/MAMP/MAMP`
  - Open Browser and navigate to 'http://localhost:80/BusKaro` 

- #### Linux
  - Install [LAMP Server](https://bitnami.com/stack/lamp/installer)
  - Open the console (Ctrl + Alt + T) and navigate to the download location of the LAMP installation file
  - Change permissions of the Bitnami LAMP file (change filname to the file you have downloaded):
    `chmod +x bitnami-lampstack-YOUR-VERSION-linux-x64-installer.run`
  - Start the installer:
    `./bitnami-lampstack-YOUR-VERSION-linux-x64-installer.run`
  - Follow the installation steps.
    - Deselect *"Launch lampstack in the cloud with Bitnami"* when presented with the  *"Deploy lampstack to the Cloud in One Click"* window.
  - Navigate to `/home/USERNAME/lampstack-YOUR-VERSION/apache2/htdocs/`
  - Clone the repository: `git clone https://github.com/ajwad-shaikh/BusKaro.git`
  - Start LAMP `/home/USERNAME/lampstack-YOUR-VERSION/manager-linux-x64.run`
  - Open Browser and navigate to `http://localhost:8080/BusKaro/`



