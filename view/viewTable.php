<?php 
$products = require (__DIR__ . '/../controller/controlTable.php');    
?>
<table id="productTable">
    <thead>
        <tr>
          <th>#</th>
          <th>Название</th>
          <th>Цена</th>
          <th>Артикул</th>
          <th>Количество</th>
          <th>Дата появления записи</th>
      </tr>
  </thead>
  <?php
  foreach ($products as $value){
    ?>
    <tbody>
        <tr>
          <th><?php echo $value['PRODUCT_ID'] ?></th>
          <td><?php echo $value['PRODUCT_NAME'] ?></td>
          <td><?php echo $value['PRODUCT_PRICE'] ?></td>
          <td><?php echo $value['PRODUCT_ARTICLE'] ?></td>
          <td>
            <button type="button" id="less">-</button>
            <label id="labelQuantity"><?php echo $value['PRODUCT_QUANTITY'] ?></label>            
            <button type="button" id="plus">+</button>        
          </td>
          <td><?php echo $value['DATE_CREATE'] ?></td>
          <td>
            <button type="button" id="hide">Скрыть</button>
        </td>
    </tr>
    <?php
}
?>
</tbody>
<table>
