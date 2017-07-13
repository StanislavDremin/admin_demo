<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PageSections;
use DB;

class PageSectionsCtrl extends Controller
{

	private $SectionEntity;

	public function __construct()
	{
		$this->SectionEntity = new PageSections();
	}


	public function sectionList()
	{
		return view('admin/main');
	}

	public function getColumns()
	{
		return $this->SectionEntity->getColumns();
	}

	public function getSections()
	{

	}

	public function saveSection()
	{

	}

	protected function resort()
	{

	}
}
