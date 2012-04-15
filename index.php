<?php
  /**
   * Created by JetBrains PhpStorm.
   * User: cyrill
   * Date: 15.04.12
   * Time: 13:34
   * To change this template use File | Settings | File Templates.
   */

  include 'RtfTemplate.php';

  $map = array('name'=>'Кирилл', 'greet' => 'дорогой', 'censored'=>'млять', 'table'=>array(array('Наименование 1','Цена 1'), array('Наименование 2','Цена 2')));

   if (RtfTemplate::createFileFromTemplate('test-in.rtf','test-out.rtf',$map)) {
     echo 'DONE!';
   } else {
     echo 'some errors?';
   }