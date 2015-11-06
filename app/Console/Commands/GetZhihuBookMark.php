<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GetZhihuBookMark extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:getzhihubookmark';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = '获取知乎的收藏夹';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
		echo '2222';
	}


}
