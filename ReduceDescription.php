<?php
namespace test\components;
use yii\base\widget;
use yii\helpers\html;

class ReduceDescription extends Widget
{
public $body;
public $count=50;
public function init()
{

parent::init();
$description=explode("",$this->body);
if(count($description)<= $this->count)
{
$description = $this->body;
}
else
{
array_splice($description ,$this->count);
$this->body = implode("",$this->body),'.......';
}
$this->body;
}



public function run()
{
return html::decode($this->body,$this->count);
}
}