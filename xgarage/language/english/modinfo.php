<?php

define('_MI_NAME', 'Garages');
define('_MI_DESC', 'XOOPS module for garage content management.');

define("_MI_SUBMIT","Submit");
define("_MI_GARAGES_ADMINMENU1","Active Garages");
define("_MI_CANUSERSUBMITTITLE","Can a user submit new garage?");
define("_MI_CANUSERSUBMITDESC","If this is set to NO, you can provide a page for them to view.");
define("_MI_HOWTOADDTITLE","URL");
define("_MI_HOWTOADDDESC","If user cannot submit garage, send them to this page, which will usually contain information about how they can get a garage added.");
define("_MI_AUTOAPPROVETITLE","Are new garage automatically approved?");
define("_MI_AUTOAPPROVEDESC","If this is set to NO, Admin will need to approve a garage before its available on site.");
define("_MI_ADMINAPPROVAL","Admin Approval");
define("_MI_AUTOAPP","Auto-Approved");
define("_MI_ADMINSEDITTITLE","Can site admins edit any garage?");
define("_MI_ADMINSEDITDESC","If this is set to NO, only users who created their garage can edit it.");
define("_MI_USEREDITTITLE","Can users edit their own garage?");
define("_MI_USEREDITDESC","If this is set to NO, you can provide a page for them to view.");
define("_MI_HOWTOCHANGETITLE","URL");
define("_MI_HOWTOCHANGEDESC","If user cannot edit their own garage, send them to this page, which will usually contain information about how to change their garage.");
define("_MI_ALLOWCOMMENTSTITLE","Allow user comments on garage?");
define("_MI_ALLOWCOMMENTSDESC","This will let registered users add comments to garage pages.");
define("_MI_LISTFORMAT","How would you like to format the list?");
define("_MI_LISTFORMATDESC","This will display the list as either a comma seperated line or bulleted list.");
define("_MI_COMMAS","Commas");
define("_MI_BULLETS","Bullets");
define("_MI_ALLOWUPLOADS","Allow users to upload garage images");
define("_MI_ALLOWUPLOADSDSC","This will allow users to upload JPG,PNG,GIF images as an alternative to simply providing the image URL");
define("_MI_MAXFILESIZE","Maximum file size of image uploads");
define("_MI_MAXFILESIZEDSC","This is in bytes.");
define("_MI_IMGWIDTH","Maximum image width");
define("_MI_IMGWIDTHDSC","This is in pixels.");
define("_MI_IMGHEIGHT","Maximum image height");
define("_MI_IMGHEIGHTDSC","This is in pixels.");
define("_MI_USECATS","Would you like to enable categories system?");
define("_MI_USECATSDESC","This will allow garage to be part of a category tree.");
define("_MI_MULTIPLEGARAGE","Can users maintain multiple garage?");
define("_MI_MULTIPLEPROFSDESC","If this is set to no, then users can only have 1 garage each.");
define("_MI_ADDIMAGES","Would you like image URL/image upload to be part of ADDING a garage?");
define("_MI_ADDIMAGESDESC","If this is set to NO, then users can only add images in EDIT mode (after add).");
define("_MI_LINKGARAGE","Can the user link to their XOOPS garage?");
define("_MI_LINKGARAGEDESC","If this is set to NO, then users are not allowed to link to their XOOPS garage.");
define("_MI_USEDESCRIPT2","Would you like to turn on Additional Description?");
define("_MI_USEDESCRIPT2DESC","If this is set to YES, then garage can have additional description field.");
define("_MI_LIST","Featuring");
define("_MI_LIST_T","List Name");
define("_MI_LIST_D","What to name the list feature for your application. <br/>Example: Members, Highlights, Features, Interests, Details, Skills, Abilities, Credentials, Experience, Qualifications, Education");
define("_MI_EDITOR","Editor to use:");
define("_MI_LIST_EDITORS","Select the editor to use.");



// Notification event descriptions and mail templates


define ('_MI_GARAGE_CATEGORY_NOTIFY', 'Category'); 
define ('_MI_GARAGE_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current category.');
define ('_MI_GARAGE_NOTIFY', 'Listing'); 
define ('_MI_GARAGE_NOTIFYDSC', 'Notification options that apply to the current listing.');	
define ('_MI_GARAGE_GLOBAL_NOTIFY', 'Whole Module ');
define ('_MI_GARAGE_GLOBAL_NOTIFYDSC', 'Global advert notification options.');

//event

define ('_MI_GARAGE_NEWPOST_NOTIFY', 'New Listing');
define ('_MI_GARAGE_NEWPOST_NOTIFYCAP', 'Notify me of new listings in the current category.');
define ('_MI_GARAGE_NEWPOST_NOTIFYDSC', 'Receive notification when a new listing is posted to the current category.');
define ('_MI_GARAGE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_VALIDATE_NEWPOST_NOTIFY', 'New Listing');
define ('_MI_GARAGE_VALIDATE_NEWPOST_NOTIFYCAP', 'Notify me of new listings in the current category.');
define ('_MI_GARAGE_VALIDATE_NEWPOST_NOTIFYDSC', 'Receive notification when a new listing is posted to the current category.');
define ('_MI_GARAGE_VALIDATE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_UPDATE_NEWPOST_NOTIFY', 'Listing Updated');
define ('_MI_GARAGE_UPDATE_NEWPOST_NOTIFYCAP', 'Notify me of updated listings in the current category.');
define ('_MI_GARAGE_UPDATE_NEWPOST_NOTIFYDSC', 'Receive notification when an listing is updated in the current category.');
define ('_MI_GARAGE_UPDATE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_DELETE_NEWPOST_NOTIFY', 'Listing Deleted');
define ('_MI_GARAGE_DELETE_NEWPOST_NOTIFYCAP', 'Notify me of new listings in the current category.');
define ('_MI_GARAGE_DELETE_NEWPOST_NOTIFYDSC', 'Receive notification when an listing is deleted from the current category.');
define ('_MI_GARAGE_DELETE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_GLOBAL_NEWPOST_NOTIFY', 'New Listing');
define ('_MI_GARAGE_GLOBAL_NEWPOST_NOTIFYCAP', 'Notify me of new listings in all categories.');
define ('_MI_GARAGE_GLOBAL_NEWPOST_NOTIFYDSC', 'Receive notification when a new listing is posted to all categories.');
define ('_MI_GARAGE_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_GLOBAL_VALIDATE_NEWPOST_NOTIFY', 'New Listing');
define ('_MI_GARAGE_GLOBAL_VALIDATE_NEWPOST_NOTIFYCAP', 'Notify me of new listings in all categories.');
define ('_MI_GARAGE_GLOBAL_VALIDATE_NEWPOST_NOTIFYDSC', 'Receive notification when a new listing is posted to all categories.');
define ('_MI_GARAGE_GLOBAL_VALIDATE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : New listing in category');
define ('_MI_GARAGE_GLOBAL_UPDATE_NEWPOST_NOTIFY', 'Listing Updated');
define ('_MI_GARAGE_GLOBAL_UPDATE_NEWPOST_NOTIFYCAP', 'Notify me of updated listings in all categories.');
define ('_MI_GARAGE_GLOBAL_UPDATE_NEWPOST_NOTIFYDSC', 'Receive notification when an listing is updated in all categories.');
define ('_MI_GARAGE_GLOBAL_UPDATE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : Listing updated in categories');
define ('_MI_GARAGE_GLOBAL_DELETE_NEWPOST_NOTIFY', 'Listing Deleted');
define ('_MI_GARAGE_GLOBAL_DELETE_NEWPOST_NOTIFYCAP', 'Notify me of deleted listings in all categories.');
define ('_MI_GARAGE_GLOBAL_DELETE_NEWPOST_NOTIFYDSC', 'Receive notification when an listing is deleted in all categories.');
define ('_MI_GARAGE_GLOBAL_DELETE_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: auto-notify : Listing deleted in categories');

?>