<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PageSections extends Model
{
	private $langCols = [
		'created_at' => 'Создано',
		'updated_at' => 'Обновлено',
		'title' => 'Заголовок',
		'code' => 'Код',
		'guide' => 'Внешний код',
		'user_create' => 'Кто создал',
		'user_update' => 'Кто изменил',
		'level' => 'Уровень',
		'sort' => 'Сортировка',
		'picture' => 'Фото',
		'description' => 'Описание',
		'parent_section' => 'Родительская категория',
	];

	public function getColumns()
	{
		$result = [];
		$cols = DB::select('SHOW COLUMNS FROM '.$this->getTable());
		foreach ($cols as $value){
			$value = (array)$value;
			$item = [
				'name' => $value['Field'],
				'default' => $value['Default'],
				'type' => $value['Type'],
				'title' => $value['Field']
			];
			if(array_key_exists($value['Field'], $this->langCols)){
				$item['title'] = $this->langCols[$value['Field']];
			}

			$result[] = $item;
		}

		return $result;
	}
}
