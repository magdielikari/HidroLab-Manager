<?php 
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    public $title;
    public $message;
    public $action;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        "<div class='col-sm-6 col-md-4'>\n
          <div class='thumbnail'>\n
            <div class='caption bg-info'>\n
              <h3>$title;</h3>\n
                <p>$message;</p>\n"
                
        return Html::encode($this->message);
    }
}