    <?php
    use yii\bootstrap\Modal;
     Modal::begin([
    'header'=>'<h2 class="modal-title"></h2>',
        'id'=>'modal',
        'size'=>'modal-lg',
        ]);
      echo "<div id='modalContent'></div>";
      Modal::end();
    ?>    

