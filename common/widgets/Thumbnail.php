<?php

namespace common\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class Thumbnail extends Widget
{
	/**
	 * [$label The title of the thumbnail]
	 * @var [string]
	 */
	public $label;

	/**
	 * [$content The Content of the Thumbnail]
	 * @var [string]
	 */
	public $content;

	/**
	 * [$bottom The bottom content of the Thumbnail]
	 * @var [array|string]
	 */
	public $bottom;

	/**
	 * [$htmlOptions Html options for the base container]
	 * @var [array]
	 */
	public $htmlOptions = ['class'=>'thumbnail'];

	public $labelOptions = [];
	public $contentOptions = [];
	public $bottomOptions = [];

	public $keepDefaultClasses = true;

	/**
	 * [$html Variable where data will be encoded to html]
	 * @var [string]
	 */
	protected $html;

	protected $container;


	/**
	 * [init primary function]
	 * @return [type] [description]
	 */
	public function init()
	{
		parent::init();

		$this->encapsulate();

		$this->html = Html::tag('div', $this->html, $this->htmlOptions);
	}

	/**
	 * [encapsulate Creates the header, content and button of the thumbnail]
	 * @return [null]
	 */
	protected function encapsulate()
	{
		$label = Html::tag('h3', $this->label, $this->labelOptions);
		$content = Html::tag('p', $this->content, $this->contentOptions);
		$bottom = Html::tag('p', $this->createButtons(), $this->bottomOptions);

		$this->container = $label.$content.$bottom;

		$this->addParent();
	}

	/**
	 * [createButtons Get all data from button array and create html Buttons]
	 * @return [string] [Html buttons]
	 */
	protected function createButtons()
	{
		$buttonHtml = '';

		foreach($this->bottom as $bottom)
		{
			$name = $bottom['name'];
			$value = Url::to($bottom['value']);
			$htmlOptions = $bottom[0];
			
			$buttonOptions = ArrayHelper::merge(['name'=>$value], $htmlOptions);

			$buttonHtml .= Html::button($name, $buttonOptions);
		}

		return $buttonHtml;
	}

	/**
	 * [addParent Merge all the content inside a div with a class]
	 */
	protected function addParent()
	{
		$caption = Html::tag('div', $this->container, ['class'=>'caption']);

		$this->html = $caption;
	}

	public function run()
	{
		return $this->html;
	}
}

?>