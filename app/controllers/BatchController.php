<?php

class BatchController extends BaseController {

	public function index()
	{
		$batches=Batch::paginate(10);
		return View::make('batch.index')
						->with('title', 'All Batches')
						->with('batches', $batches);
	}
}
