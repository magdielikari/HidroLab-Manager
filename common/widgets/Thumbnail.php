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
	 * @var [array]
	 */
	public $bottom;

	/**
	 * [$htmlOptions Html options for the base container]
	 * @var [array]
	 */
	public $htmlOptions = [];

	/**
	 * [$innerHtmlOptions Html options for the inner container]
	 * @var [array]
	 */
	public $innerHtmlOptions = [];

	/**
	 * [$labelOptions Html options for heading]
	 * @var [array]
	 */
	public $labelOptions = [];

	/**
	 * [$contentOptions Html options for the content]
	 * @var [array]
	 */
	public $contentOptions = [];

	/**
	 * [$bottomOptions Html options for the bottom of the thumbnail]
	 * @var [array]
	 */
	public $bottomOptions = [];

	/**
	 * [$keepDefaultClasses Option to add default classes for base and inner container]
	 * @var [boolean]
	 */
	public $keepDefaultClasses = true;

	/**
	 * [$html Variable where data will be encoded to html]
	 * @var [string]
	 */
	protected $html;

	/**
	 * [$container Variable where inner data will be encoded to html]
	 * @var [string]
	 */
	protected $container;

	/**
	 * [$defaultClasses The default classes to add into base and inner containers]
	 * @var [array]
	 */
	protected $defaultClasses = ['thumbnail', 'caption'];


	/**
	 * [init primary function]
	 */
	public function init()
	{
		parent::init();

		$this->addClasses();

		$this->encapsulate();


		$this->html = Html::tag('div', $this->html, $this->htmlOptions);
	}

	/**
	 * [encapsulate Creates the header, content and button of the thumbnail]
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
	 * [addClasses Add classes if keepDefaultClasses property is true]
	 */
	protected function addClasses()
	{
		if($this->keepDefaultClasses)
		{
			Html::addCssClass($this->htmlOptions, $this->defaultClasses[0]);
			Html::addCssClass($this->innerHtmlOptions, $this->defaultClasses[1]);
		}

	}

	/**
	 * [createButtons Get all data from button array and create html Links/Buttons]
	 */
	protected function createButtons()
	{
		$buttonHtml = '';

		foreach($this->bottom as $bottom)
		{
			$name = $bottom['name'];
			$htmlOptions = $bottom['options'];
			
			if(isset($bottom['url']))
				$buttonHtml .= Html::a($name, $bottom['url'], $htmlOptions)."\n";

			else
			{
				$value = Url::to($bottom['value']);
				
				$buttonOptions = ArrayHelper::merge(['value'=>$value], $htmlOptions);

				$buttonHtml .= Html::button($name, $buttonOptions)."\n";		
			}
		}

		return $buttonHtml;
	}

	/**
	 * [addParent Merge all the content inside a div with a class]
	 */
	protected function addParent()
	{
		$caption = Html::tag('div', $this->container, $this->innerHtmlOptions);

		$this->html = $caption;
	}

	/**
	 * [run Ouptput the html widget]
	 */
	public function run()
	{
		return $this->html;
	}
}

?>