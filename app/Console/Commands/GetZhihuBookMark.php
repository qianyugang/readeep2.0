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
	public function __construct(){
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire(){

		for( $i = 1;$i<=2;$i++ ){
			$url = "http://www.zhihu.com/collection/".$i;
			$data = self::curl_get($url);
			//preg_match("/<title>(.*)<\/title>/i",$data, $title);
			echo $data;
		}



	}

	/**
	 * 获取url中的内容
	 * @param string $url
	 * @return bool|mixed
	 */
	public function curl_get($url){
		echo $url;
		if(!$url){ return false; }
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$contents = curl_exec($ch);
		curl_close($ch);
		return $contents;
	}

}
