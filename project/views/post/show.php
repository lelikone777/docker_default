<h1>Post</h1>
<h2>show.php</h2>

<button id="btn" class="btn btn-success">
    CLick me
</button>

<?php

//Если нужно подключить js файл, который идёт после jquery
//$this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']);

//Если нужно вставить код JS/JQUERY на страницу
//$this->registerJS("$('.container').append('<h3>script.js - JQUERY WORKS!!!</h3>');", \yii\web\View::POS_LOAD );


// Тоже самое с CSS файлами
//$this->registerCssFile('@web/css/style.css', ['depends' => 'yii\bootstrap4\BootstrapAsset']);
//$this->registerCss('.container{background: #ccc;}');


$js = <<<JS
    

    $('#btn').on('click', function (){
        $.ajax({
            url: 'index',
            data: {test: '123'},
            type: 'GET',
            success: function(res) {
                    console.log(res);
            },
            error: function() {
              alert('ERROR');
            }
        });
    });
JS;

$this->registerJS($js);

?>
