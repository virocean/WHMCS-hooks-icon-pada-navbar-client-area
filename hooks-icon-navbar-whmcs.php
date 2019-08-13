<?php

#alamat hook Cheatsheet >>  https://docs.whmcs.com/Client_Area_Navigation_Menus_Cheatsheet

add_hook('ClientAreaPrimaryNavbar', 1, function(MenuItem $primaryNavbar)

{

   if (!is_null($primaryNavbar->getChild('Home'))) {

             $primaryNavbar->getChild('Home')

                           ->setIcon('fa-home');

   }



   if (!is_null($primaryNavbar->getChild('Services'))) {

             $primaryNavbar->getChild('Services')

                           ->setIcon('fa-bars');

   }



   if (!is_null($primaryNavbar->getChild('Domains'))) {

             $primaryNavbar->getChild('Domains')

                           ->setIcon('fa-globe');

   }   



   if (!is_null($primaryNavbar->getChild('Billing'))) {

             $primaryNavbar->getChild('Billing')

                           ->setIcon('fa-credit-card');

   }   



   if (!is_null($primaryNavbar->getChild('Support'))) {

             $primaryNavbar->getChild('Support')

                           ->setIcon('fa-support');

   }   



    if (!is_null($primaryNavbar->getChild('Open Ticket'))) {

             $primaryNavbar->getChild('Open Ticket')

                           ->setIcon('fa-ticket');

   }



if (!is_null($primaryNavbar->getChild('Announcements'))) {

             $primaryNavbar->getChild('Announcements')

                           ->setIcon('fa-newspaper-o');

   }





if (!is_null($primaryNavbar->getChild('Contact Us'))) {

             $primaryNavbar->getChild('Contact Us')

                           ->setIcon('fa-phone');

   }



if (!is_null($primaryNavbar->getChild('Network Status'))) {

             $primaryNavbar->getChild('Network Status')

                           ->setIcon('fa-plug');

   }



if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {

             $primaryNavbar->getChild('Knowledgebase')

                           ->setIcon('fa-mortar-board');

   }



});
