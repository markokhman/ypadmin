<?php
        Yii::app()->clientScript->registerScriptFile('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');       
        Yii::app()->clientScript->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js');       

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.orderBars.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.pie.js');  
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/excanvas.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/flot/jquery.flot.resize.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/tables/jquery.dataTables.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/tables/colResizable.min.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/forms.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.autosize.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/autotab.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.validationEngine-en.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.validationEngine.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.dualListBox.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.select2.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.maskedinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.inputlimiter.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.tagsinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/forms/jquery.wysiwyg.js');  

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/other/calendar.min.js');        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/other/elfinder.min.js');        

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.html5.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/plupload.html4.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/uploader/jquery.plupload.queue.js');
        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.progress.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.jgrowl.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.tipsy.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.alerts.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.colorpicker.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.mousewheel.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/wizards/jquery.form.wizard.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/wizards/jquery.validate.js');       

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.breadcrumbs.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.collapsible.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.ToTop.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.listnav.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.sourcerer.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.timeentry.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/plugins/ui/jquery.prettyPhoto.js');

        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/custom.js');

        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/chart.js');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/auto.js');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/bar.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/hBar.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/pie.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/charts/bar2.js');        
        $today = time();
        $aaa = Yii::app()->dateFormatter->format('dd.MM.yyyy', $today);
        $todInt = strtotime($aaa);        
        $certs = Certificate::model()->findAllByAttributes(array('cid'=>Yii::app()->user->id));
        $orders = 0;
        $ord1 = 0;
        $ord2 = 0;
        $ord3 = 0;
        $ord4 = 0;
        $ord5 = 0;
        $ord6 = 0;
        $ord7 = 0;
        $ord8 = 0; 
        $ord9 = 0; 
        $ord10 = 0;
        $ord11 = 0;
        $ord12 = 0;
        $ord13 = 0;
        $ord14 = 0;
        $ord15 = 0;
        $ord16 = 0;
        $ord17 = 0;
        $ord18 = 0;
        $ord19 = 0;
        $ord20 = 0;
        $ord21 = 0;
        $ord22 = 0;
        $ord23 = 0;
        $ord24 = 0;
        $ord25 = 0;
        $ord26 = 0;
        $ord27 = 0;
        $ord28 = 0;
        $ord29 = 0;
        $ord30 = 0;
        $ord31 = 0;
        $count = 0;
        $varProposalOrder = array();
        $varProposalMark = array();
        $varProposalNames = array();
        foreach ($certs as $cert) {
          $varProposalOrder[] = array($count, Order::model()->countByAttributes(array('cert_id'=>$cert->cert_id, 'status'=>1)));
          $varProposalMark[] = array($count, 0);
          $varProposalNames[] = array($count, $cert->name);
          $count++;
          $orders += Order::model()->countByAttributes(array('cert_id'=>$cert->cert_id, 'status'=>1));
          $ord1 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close-86400<='.$todInt.' AND time_close>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord2 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close<='.$todInt.' AND time_close+86400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord3 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+86400<='.$todInt.' AND time_close+172800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord4 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+172800<='.$todInt.' AND time_close+259200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord5 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+259200<='.$todInt.' AND time_close+345600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord6 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+345600<='.$todInt.' AND time_close+432000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord7 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+432000<='.$todInt.' AND time_close+518400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord8 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+518400<='.$todInt.' AND time_close+604800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord9 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+604800<='.$todInt.' AND time_close+691200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord10 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+691200<='.$todInt.' AND time_close+777600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord11 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+777600<='.$todInt.' AND time_close+846000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord12 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+846000<='.$todInt.' AND time_close+950400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord13 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+950400<='.$todInt.' AND time_close+1036800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord14 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1036800<='.$todInt.' AND time_close+1123200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord15 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1123200<='.$todInt.' AND time_close+1209600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord16 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1209600<='.$todInt.' AND time_close+1296000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord17 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1296000<='.$todInt.' AND time_close+1382400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord18 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1382400<='.$todInt.' AND time_close+1468800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord19 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1468800<='.$todInt.' AND time_close+1555200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord20 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1555200<='.$todInt.' AND time_close+1641600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord21 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1641600<='.$todInt.' AND time_close+1728000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord22 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1728000<='.$todInt.' AND time_close+1814400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord23 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1814400<='.$todInt.' AND time_close+1900800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord24 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1900800<='.$todInt.' AND time_close+1987200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord25 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+1987200<='.$todInt.' AND time_close+2073600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord26 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2073600<='.$todInt.' AND time_close+2160000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord27 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2160000<='.$todInt.' AND time_close+2246400>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord28 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2246400<='.$todInt.' AND time_close+2332800>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord29 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2332800<='.$todInt.' AND time_close+2419200>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord30 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2419200<='.$todInt.' AND time_close+2505600>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
          $ord31 += Order::model()->countBySql('select count(*) from `order` WHERE (time_close+2505600<='.$todInt.' AND time_close+2592000>='.$todInt.') AND (status=1 AND cert_id='.$cert->cert_id.')');
        }

        $varWeekNames = array(                  
                  array(1, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt)), 
                  array(2, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-86400)), 
                  array(3, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-172800)), 
                  array(4, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-259200)), 
                  array(5, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-345600)),
                  array(6, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-432000)), 
                  array(7, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-518400)), 
                );

        $varMonthNames1 = array(
                  array(8, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-604800)), 
                  array(9, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-691200)), 
                  array(10, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-777600)), 
                  array(11, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-864000)), 
                  array(12, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-950400)),
                  array(13, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1036800)), 
                  array(14, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1123200)), 
                  array(15, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1209600)), 
                  array(16, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1296000)), 
                  array(17, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1382400)), 
                  array(18, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1468800)), 
                  array(19, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1555200)),
                  array(20, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1641600)), 
                  array(21, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1728000)), 
                  array(22, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1814400)), 
                  array(23, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1900800)), 
                  array(24, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-1987200)), 
                  array(25, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2073600)), 
                  array(26, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2160000)),
                  array(27, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2246400)), 
                  array(28, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2332800)), 
                  array(29, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2419200)), 
                  array(30, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2505600)), 
                  array(31, Yii::app()->dateFormatter->format('dd.MM.yy', $todInt-2592000)),
          );

        $varMonthNames = array_merge($varWeekNames, $varMonthNames1);

        $varWeekOrder = array(                  
                  array(1, $ord1), 
                  array(2, $ord2), 
                  array(3, $ord3), 
                  array(4, $ord4), 
                  array(5, $ord5),
                  array(6, $ord6), 
                  array(7, $ord7), 
                );
        $varMonthOrder1 = array(                  
                  array(8, $ord8), 
                  array(9, $ord9), 
                  array(10, $ord10), 
                  array(11, $ord11), 
                  array(12, $ord12),
                  array(13, $ord13), 
                  array(14, $ord14), 
                  array(15, $ord15), 
                  array(16, $ord16), 
                  array(17, $ord17), 
                  array(18, $ord18), 
                  array(19, $ord19),
                  array(20, $ord20), 
                  array(21, $ord21), 
                  array(22, $ord22), 
                  array(23, $ord23), 
                  array(24, $ord24), 
                  array(25, $ord25), 
                  array(26, $ord26),
                  array(27, $ord27), 
                  array(28, $ord28), 
                  array(29, $ord29), 
                  array(30, $ord30), 
                  array(31, $ord31),                   
                );
            $varMonthOrder = array_merge($varWeekOrder, $varMonthOrder1);
            
            $varWeekMark = array(
                  array(1, Mark::model()->countBySql('select count(*) from mark WHERE (time-86400<='.$todInt.' AND time>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                  array(2, Mark::model()->countBySql('select count(*) from mark WHERE (time<='.$todInt.' AND time+86400>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                  array(3, Mark::model()->countBySql('select count(*) from mark WHERE (time+86400<='.$todInt.' AND time+172800>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                  array(4, Mark::model()->countBySql('select count(*) from mark WHERE (time+172800<='.$todInt.' AND time+259200>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                  array(5, Mark::model()->countBySql('select count(*) from mark WHERE (time+259200<='.$todInt.' AND time+345600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
                  array(6, Mark::model()->countBySql('select count(*) from mark WHERE (time+345600<='.$todInt.' AND time+432000>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                  array(7, Mark::model()->countBySql('select count(*) from mark WHERE (time+432000<='.$todInt.' AND time+518400>='.$todInt.') AND cid = '.Yii::app()->user->id)), 
                );
            $varMonthMark1 = array(
              array(8, Mark::model()->countBySql('select count(*) from mark WHERE (time+518400<='.$todInt.' AND time+604800>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(9, Mark::model()->countBySql('select count(*) from mark WHERE (time+604800<='.$todInt.' AND time+691200>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(10, Mark::model()->countBySql('select count(*) from mark WHERE (time+691200<='.$todInt.' AND time+777600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(11, Mark::model()->countBySql('select count(*) from mark WHERE (time+777600<='.$todInt.' AND time+846000>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(12, Mark::model()->countBySql('select count(*) from mark WHERE (time+846000<='.$todInt.' AND time+950400>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(13, Mark::model()->countBySql('select count(*) from mark WHERE (time+950400<='.$todInt.' AND time+1036800>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(14, Mark::model()->countBySql('select count(*) from mark WHERE (time+1036800<='.$todInt.' AND time+1123200>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(15, Mark::model()->countBySql('select count(*) from mark WHERE (time+1123200<='.$todInt.' AND time+1209600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(16, Mark::model()->countBySql('select count(*) from mark WHERE (time+1209600<='.$todInt.' AND time+1296000>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(17, Mark::model()->countBySql('select count(*) from mark WHERE (time+1296000<='.$todInt.' AND time+1382400>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(18, Mark::model()->countBySql('select count(*) from mark WHERE (time+1382400<='.$todInt.' AND time+1468800>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(19, Mark::model()->countBySql('select count(*) from mark WHERE (time+1468800<='.$todInt.' AND time+1555200>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(20, Mark::model()->countBySql('select count(*) from mark WHERE (time+1555200<='.$todInt.' AND time+1641600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(21, Mark::model()->countBySql('select count(*) from mark WHERE (time+1641600<='.$todInt.' AND time+1728000>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(22, Mark::model()->countBySql('select count(*) from mark WHERE (time+1728000<='.$todInt.' AND time+1814400>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(23, Mark::model()->countBySql('select count(*) from mark WHERE (time+1814400<='.$todInt.' AND time+1900800>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(24, Mark::model()->countBySql('select count(*) from mark WHERE (time+1900800<='.$todInt.' AND time+1987200>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(25, Mark::model()->countBySql('select count(*) from mark WHERE (time+1987200<='.$todInt.' AND time+2073600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(26, Mark::model()->countBySql('select count(*) from mark WHERE (time+2073600<='.$todInt.' AND time+2160000>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(27, Mark::model()->countBySql('select count(*) from mark WHERE (time+2160000<='.$todInt.' AND time+2246400>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(28, Mark::model()->countBySql('select count(*) from mark WHERE (time+2246400<='.$todInt.' AND time+2332800>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(29, Mark::model()->countBySql('select count(*) from mark WHERE (time+2332800<='.$todInt.' AND time+2419200>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(30, Mark::model()->countBySql('select count(*) from mark WHERE (time+2419200<='.$todInt.' AND time+2505600>='.$todInt.') AND cid = '.Yii::app()->user->id)),
              array(31, Mark::model()->countBySql('select count(*) from mark WHERE (time+2505600<='.$todInt.' AND time+2592000>='.$todInt.') AND cid = '.Yii::app()->user->id)),
                  );
            $varMonthMark = array_merge($varWeekMark, $varMonthMark1);
        $erkew = '<div class="bars" id="vBar2" style="overflow:auto"></div>';
        $erkew2 = '<div id="tooltip2" class="tooltip">';
        
        Yii::app()->clientScript->registerScript('selector', "
          function onSelectChange(){
              
                  var dropdown = document.getElementById('developer');
                  var index = dropdown.selectedIndex;
                  var ddVal = dropdown.options[index].value;
                  var ddText = dropdown.options[index].text;                  
                  if(ddVal != 0) {                      
                      var er1, er2, erkewka;
                      switch (ddVal) {
                        case '1':
                          er2 = ".json_encode($varWeekOrder).";
                          er1 = ".json_encode($varWeekMark).";
                          erer = ".json_encode($varWeekNames).";
                          erkewka = 560;                          
                          break;
                        case '2':
                          er2 = ".json_encode($varMonthOrder).";
                          er1 = ".json_encode($varMonthMark).";
                          erer = ".json_encode($varMonthNames).";
                          erkewka = 2400;
                          break;
                        case '3':
                          er2 = ".json_encode($varProposalOrder).";
                          er1 = ".json_encode($varProposalMark).";
                          erer = ".json_encode($varProposalNames).";
                          erkewka = 80*".$count.";
                          break;
                        case '4':
                          er2 = ".json_encode($varMonthOrder).";
                          er1 = ".json_encode($varMonthMark).";
                          erkewka = 2400;
                          break;
                        case '5':
                          er2 = ".json_encode($varMonthOrder).";
                          er1 = ".json_encode($varMonthMark).";
                          erkewka = 2400;
                          break;
                        default:
                          
                          break;
                      }          
                      alert(erkewka);            
                      var br = document.getElementById('erke');                      
                      br.innerHTML= '".$erkew."';
                      var previousPoint;
                      var ds = new Array(); 
                       ds.push({
                          data:er1,
                          bars: {
                              show: true, 
                              barWidth: 0.2, 
                              order: 1,
                          }
                      });
                      ds.push({
                          data:er2,
                          bars: {
                              show: true, 
                              barWidth: 0.2, 
                              order: 2
                          }
                      });
                      console.log(er2);
                      function showTooltip(x, y, contents, areAbsoluteXY) {
                              var rootElt = 'body';
                        
                              $('".$erkew2."' + contents + '</div>').css( {
                                  position: 'absolute',
                                  display: 'none',
                                  top: y - 35,
                                  left: x - 5,
                                  border: '1px solid #000',
                                  padding: '1px 6px',
                            'z-index': '9999',
                                  'background-color': '#202020',
                            'color': '#fff',
                            'font-size': '11px',
                            'border-radius': '2px',
                            '-webkit-border-radius': '2px',
                            '-moz-border-radius': '2px',
                                  opacity: 0.8
                              }).prependTo(rootElt).show();
                      }

                      $.plot($('#vBar2'), ds, {
                        grid:{
                            hoverable:true
                        },
                       legend: true,                                
                    });
                    $('#vBar2').bind('plothover', function (event, pos, item) {
    if (item) {
        if (previousPoint != item.datapoint) {
            previousPoint = item.datapoint;
 
            //delete de prГ©cГ©dente tooltip
            $('.tooltip').remove();
 
            var x = item.datapoint[0];
            
            if (item.seriesIndex == 0) {
                x = 'Отметки';
            }            
            else x = 'Сертификаты';
            //All the bars concerning a same x value must display a tooltip with this value and not the shifted value
            /*if(item.series.bars.order){
                for(var i=0; i < item.series.data.length; i++){
                    if(item.series.data[i][3] == item.datapoint[0])
                        x = item.series.data[i][0];
                }
            }*/
 
            var y = item.datapoint[1];
 
            showTooltip(item.pageX+5, item.pageY+5,x+' = '+y);
 
        }
    }
    else {
        $('.tooltip').remove();
        previousPoint = null;
    }
 
});

                  }                                  
              }",CClientScript::POS_HEAD);


        ?>
<div class="wrapper">
	<!-- Left navigation -->
    <div class="leftNav">
        <ul id="menu">
            <?php echo "<script> var d1_h=".array()."; var d1 = ".array().";var d2 = ".array().";var d3 = ".array().";</script>";
            if (Yii::app()->user->name == 'admin'){?>
                <li class="dash"><?php echo CHtml::link('<span>Главная</span>', Yii::app()->createUrl('client/main'), array('class'=>'active'));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать предложение</span>', Yii::app()->createUrl('certificate/create'));?></li>
                <li class="login"><?php echo CHtml::link('<span>Создать клиента</span>', Yii::app()->createUrl('client/create'));?></li>
                <li class="graphs"><?php echo CHtml::link('<span>Статистика</span>', Yii::app()->createUrl('client/statistics'));?></li>
                <li class="contacts"><?php echo CHtml::link('<span>Каталог клиентов</span>', Yii::app()->createUrl('client/admin')); }?></li>   
            <?php if (Yii::app()->user->name != 'admin'){?>
                <li class="dash"><?php echo CHtml::link('<span>Главная</span>', Yii::app()->createUrl('client/view', array('id'=>$model->cid)));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать предложение</span>', Yii::app()->createUrl('certificate/create', array('id'=>$model->cid)));?></li>
                <li class="typo"><?php echo CHtml::link('<span>Создать уведомление</span>', Yii::app()->createUrl('notification/create', array('id'=>$model->cid)));?></li>
                <li class="graphs"><?php echo CHtml::link('<span>Статистика</span>', Yii::app()->createUrl('client/mainClient', array('id'=>$model->cid)), array('class'=>'active')); }?></li>   
        </ul>        
    </div>

	<!-- Content -->
    <div class="content" id="container">
        <div class="title"><h5>Последние данные</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
            <ul>                
                <li><a href="#" class="count grey" title=""><?php echo Mark::model()->countByAttributes(array('cid'=>Yii::app()->user->id));?></a><span>отметки</span></li>
                <li><a href="#" class="count grey" title=""><?php echo $orders;?></a><span>закрыто сертификатов</span></li>
                <li class="last"><a href="#" class="count grey" title=""><?php echo "13";?></a><span>завсегдатаев</span></li>
            </ul>
        </div>

        <div class="widget">
            <div class="head"><h5 class="iStats"> Отметки | Закрытые сертификаты</h5>
            <div style="float:right; margin: 8px;" class="timescale">                
                    <select name="select2" class="styled" id="developer" onChange="onSelectChange();">
                        <option value="1">Неделя</option>
                        <option value="2">Месяц</option>
                        <option value="3">По предложениям</option>
                        <option value="4">По возрасту</option>
                        <option value="5">По полу</option>
                    </select>
                </div></div>
            <div class="body">

            <?php                                         
            echo "<script> var er1 = ".json_encode($varWeekMark)."; var er2 = ".json_encode($varWeekOrder).";var erer = ".json_encode($varWeekNames).";var erkewka=560;</script>";?>            
                <div id="erke"><div class="bars" id="vBar2" width="350px" style="overflow:auto"></div></div>
            </div>
        </div>
        <br>       
        <br>        
        <!-- Calendar -->        
        <div class="title"><h5>За сегодня</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
            <ul>                
                <li><a href="#" class="count grey" title=""><?php echo Mark::model()->countBySql('select count(*) from mark WHERE (time-86400<='.$todInt.' AND time>='.$todInt.') AND cid = '.Yii::app()->user->id);?></a><span>отметки</span></li>
                <li><a href="#" class="count grey" title=""><?php echo $ord1;?></a><span>закрыто сертификатов</span></li>
                <li class="last"><a href="#" class="count grey" title=""><?php echo "13";?></a><span>завсегдатаев</span></li>                
            </ul>
        </div>
        <div class="widget first">
            <?php 
              $rows = array();              
              $list=Certificate::model()->findAllByAttributes(array('cid'=>Yii::app()->user->id));
                foreach($list as $model){
                  switch (Yii::app()->dateFormatter->format('MM', $model->time_begin)) {
                    case '01':
                      $erer = 'Jan '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '02':
                      $erer = 'Feb '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '03':
                      $erer = 'Mar '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '04':
                      $erer = 'Apr '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '05':
                      $erer = 'May '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '06':
                      $erer = 'Jun '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '07':
                      $erer = 'Jul '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '08':
                      $erer = 'Aug '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '09':
                      $erer = 'Sep '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '10':
                      $erer = 'Oct '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '11':
                      $erer = 'Nov '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    case '12':
                      $erer = 'Dec '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_begin);
                      break;
                    default:                      
                      break;
                  }
                  
                  switch (Yii::app()->dateFormatter->format('MM', $model->time_end)) {
                    case '01':
                      $erer1 = 'Jan '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '02':
                      $erer1 = 'Feb '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '03':
                      $erer1 = 'Mar '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '04':
                      $erer1 = 'Apr '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '05':
                      $erer1 = 'May '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '06':
                      $erer1 = 'Jun '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '07':
                      $erer1 = 'Jul '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '08':
                      $erer1 = 'Aug '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '09':
                      $erer1 = 'Sep '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '10':
                      $erer1 = 'Oct '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '11':
                      $erer1 = 'Nov '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    case '12':
                      $erer1 = 'Dec '.Yii::app()->dateFormatter->format('dd yyyy HH:mm:ss', $model->time_end);
                      break;
                    default:                      
                      break;
                  }

                  $var = array('start'=>$erer, 'end'=>$erer1,'title'=> $model->name, 'url'=>Yii::app()->createUrl('certificate/view', array('id'=>$model->cert_id)));                  
                  $rows[] = $var;
            }
            echo "<script>var arra1 = ".json_encode($rows).";</script>";
            ?>
            <div class="head"><h5 class="iDayCalendar">Календарь предложений</h5></div>
            <div id="calendar"></div>
        </div>   
        <div class="fluid">
            <div class="span6">
                <div class="widget"><!-- Pie chart 1 -->
                    <div class="head"><h5 class="iChart8">Возрастные группы</h5></div>
                    <div class="body">
                    <?php 
                    $today = time();
                    $aaa = Yii::app()->dateFormatter->format('yyyy-MM-dd HH:mm:ss', $today);                                            
                    $certs = Certificate::model()->findAllByAttributes(array('cid'=>Yii::app()->user->id));
                    $zero15 = 0;
                    $z1518 = 0;
                    $z1821 = 0;
                    $z2124 = 0;
                    $z2427 = 0;
                    $z2730 = 0;
                    $z3033 = 0;
                    $z3336 = 0;
                    $z36 = 0;
                    $varM = 0;
                    $varJ = 0;
                    foreach ($certs as $cert) {
                      $orders2 = Order::model()->findAllByAttributes(array('cert_id'=>$cert->cert_id, 'status'=>1));
                      foreach ($orders2 as $order) {
                        $zero15 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 15 AND uid = '.$order->uid);
                        $z1518 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 15 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 18 AND uid = '.$order->uid);
                        $z1821 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 18 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 21 AND uid = '.$order->uid);
                        $z2124 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 21 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 24 AND uid = '.$order->uid);
                        $z2427 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 24 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 27 AND uid = '.$order->uid);
                        $z2730 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 27 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 30 AND uid = '.$order->uid);
                        $z3033 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 30 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 33 AND uid = '.$order->uid);
                        $z3336 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 >= 33 AND DATEDIFF ("'.$aaa.'", dateofbirth)/365 < 36 AND uid = '.$order->uid);
                        $z36 += User::model()->countBySql('select count(*) from user WHERE DATEDIFF ("'.$aaa.'", dateofbirth)/365 > 36 AND uid = '.$order->uid);

                        $us = User::model()->findByPk($order->uid);
                        if ($us->gender == 'мужской') {
                          $varM++;
                        }
                        else
                          $varJ++;
                      } 
                    }
                $var11 = array(                  
                  array($zero15, 15), 
                  array($z1518, 18), 
                  array($z1821, 21), 
                  array($z2124, 24), 
                  array($z2427, 27),
                  array($z2730, 30),
                  array($z3033, 33), 
                  array($z3336, 36), 
                  array($z36, 39), 
                );
                $rows = array();                                                 
                $rows[] = array('label'=>'Муж', 'data'=>$varM);                      
                $rows[] = array('label'=>'Жен', 'data'=>$varJ);
            
      echo "<script> var yne = ['меньше 15', '15-18', '18-21', '21-24', '24-27', '27-30', '30-33', '33-36', '36 и выше']; var d1_h = ".json_encode($var11).";var data1 = ".json_encode($rows).";</script>";?>
                        <div id="hBar" class="pieWidget"></div>
                    </div>
                </div>
            </div>
            
            <div class="span6">
                <div class="widget"><!-- Pie chart 2 -->
                    <div class="head"><h5 class="iChart8">Пол</h5></div>
                    <div class="body">
                        <div id="pie" class="pieWidget"></div>
                    </div>
                </div>
            </div>
        </div>             
    </div>
</div>