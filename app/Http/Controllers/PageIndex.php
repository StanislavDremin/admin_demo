<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageIndex extends Controller
{
	protected static $pathTemple = 'templates/index';

	public function index()
	{

		return view(self::$pathTemple.'/site')->with(
			['description' => 'Новый лендинг', 'title' => 'Ландинг на Laravel']
		);
	}

	public function detail($CODE)
	{

		$element = Article::where('CODE', $CODE)->first();
		$metaInfo = [
			'title' => $element->TITLE,
			'description' => '',
		];
		return view(self::$pathTemple.'/detailArticle')->with($metaInfo)->with(['arResult' => $element]);
	}

	public function add()
	{
		$metaInfo = ['title' => 'Добавление новой статьи', 'description' => '',];
		$colForm = ['left' => 3, 'right' => 9];

		return view(self::$pathTemple.'/articleAdd')
			->with($metaInfo)
			->with($colForm);
	}

	public function save(Request $request)
	{
		$this->validate($request, [
			'TITLE' => 'required|max:255|min:3',
			'CODE' => 'required|unique:articles',
		]);

		$Article = new Article();
		$Article->fill($request->all());
		$Article->save();

		return redirect('/');
	}

	public function delete($id)
	{
		$Article = new Article();
		$Article->where('ID', $id)->delete();

		return redirect('/');
	}
}
