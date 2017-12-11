###____________________Description____________________##
This extension reduce loading time of categories pages by loading product images on demand and save server resources. Images outside of Mageguru lazyloader is exclusive extension to improve the performances of the category's pages. Mageguru lazyloader extension reduce loading time of categories pages by loading product images on demand and save server resources. During page load images outside of customer viewport will not be loaded before user scrolls to them. 

###________________Installation Process________________##

Please follow these steps to install mageguru lazyloader extension
 * Download the extension
 * Unzip the file
 * Copy the content from the unzip folder and paste into {Magento root}/app/code/
 * Enable module and flush cache using these commands
   php -f bin/magento module:enable --clear-static-content Mageguru_Lazyload
   php -f bin/magento setup:upgrade
   php -f bin/magento cache:clean

###___________Enable/Disable Module From Admin Panel___________##

Log into your Magento Admin, then goto Stores -> Configuration -> Mageguru -> Settings

