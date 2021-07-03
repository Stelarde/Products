<?php 
$products = require (__DIR__ . '/../controller/controlTable.php');    
?>
<table class="table" id="productTable">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Название</th>
          <th scope="col">Цена</th>
          <th scope="col">Артикул</th>
          <th scope="col">Количество</th>
          <th scope="col">Дата появления записи</th>
      </tr>
  </thead>
  <?php
  foreach ($products as $value){
    ?>
    <tbody>
        <tr>
          <th scope="row"><?php echo $value['PRODUCT_ID'] ?></th>
          <td><?php echo $value['PRODUCT_NAME'] ?></td>
          <td><?php echo $value['PRODUCT_PRICE'] ?></td>
          <td><?php echo $value['PRODUCT_ARTICLE'] ?></td>
          <td>
            <button type="button" class="btn btn-secondary btn-sm" id="less">-</button>
            <label id="labelQuantity"><?php echo $value['PRODUCT_QUANTITY'] ?></label>            
            <button type="button" class="btn btn-secondary btn-sm" id="plus">+</button>        
          </td>
          <td><?php echo $value['DATE_CREATE'] ?></td>
          <td>
            <button type="button" class="btn btn-secondary" id="hide">Скрыть</button>
        </td>
    </tr>
    <?php
}
?>
</tbody>
<table>
