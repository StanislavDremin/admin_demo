<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageCtrl extends Controller
{
	protected $metaData = [
		'title' => 'Страницы'
	];

	/** @var  Pages */
	protected $Page;
	/**
	 * Index constructor.
	 */
	public function __construct()
	{
		$this->Page = new Pages();
	}


	private function showView($name, $options = null)
	{
		if(view()->exists($name)){
			return view($name)->with($this->metaData);
		}

		return view('admin.errors', ['adminError' => array('Шаблон не найден'), 'title' => 'Ошибка']);
	}

	public function exec()
	{
		$this->addMetaOption('title', 'Список страниц');

		$pageCollection = $this->Page->select('*')->get();

		return $this->showView('admin.page')->with($this->getMetaData())->with(['pageItems' => $pageCollection]);
    }

	public function addPage()
	{
		$this->addMetaOption('title', 'Новая страница');
		return $this->showView('admin.forms.pageAdd', $this->getMetaData());
    }

	public function savePage(Request $request)
	{

    }

    public function addMetaOption($name, $value)
    {
    	$this->metaData[$name] = $value;
    }

    public function getMetaData()
    {
    	return $this->metaData;
    }
}
