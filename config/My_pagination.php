<?php

/**
 * easy and simple php pagination class 
 *
 * @version 1.0
 * @author wildantea <wildannudin@gmail.com>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright august 2012
 */
 

class My_pagination 
{

	//connect to db
	protected $con;

	//store url get page
	public $page;

	//filename
	protected $url;

	//total row 
	public $_count_row;

	//store query 
	protected $_query;

	//store how many link in one page
	public $range;

	//parameter
	private $param;

	//parameter name
	private $pname;
	function __construct()
	{
		
		$this->perpage=10;

		 try {
                    $this->pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD );
                    $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                }
                catch( PDOException $e ) {
                    echo "error ". $e->getMessage();
                }

           $this->param=array(
           	'range'=>10,
           	'url'=>basename($_SERVER['PHP_SELF']),
           	'pname'=>'page',
           	'open_tag'=>'<li>',
           	'close_tag'=>'</li>',
           	'class'=>'',
           	'class_current'=>'',
           	'open_tag_current'=>'',
           	'close_tag_current'=>'',
           	'class_left'=>'',
           	'class_right'=>'',
           	'display_first'=>false,
           	'display_last'=>false,
           	'display_num_page'=>false,
           	'title_first'=>'Go to First Page',
           	'title_previous'=>'Go to Previous Page',
           	'title_next'=>'Go to Next Page',
           	'title_last'=>'Go to Last Page',
           	'text_first'=>'First',
           	'text_prev'=>'Previous',
           	'text_next'=>'Next',
           	'text_last'=>'Last'
           	);
          
	}

	/**
	 * method for select data from table and limit data base on defined by user
	 * @param  string $sql sql string without limit   
	 * @param  int $limit limit requested for query
	 * @return resultset result from query with limit 
	 */
	function myquery($sql,$limit)
	{
			
			$get=$this->getParameter('pname');
			$res=$this->fetch_all($sql);
			$num=$res->rowCount();

			

			$this->_count_row=intval($num/$limit)+($num%$limit==0?0:1);
			if ($this->_count_row<1) {
				$this->_count_row=1;
			}

			//set page=1 as default
			$page=isset($_GET[$get])?(int)$_GET[$get]:1;

			//if user entry 0 on url set page=1
			if ($page<1) {
				$page=1;
			}
			//if user entry more than availabe page, then set page to max page
			elseif ($page>$this->_count_row) {
				$page=$this->_count_row;
			}
			$this->page=$page;

			

			$offset=($page-1)*$limit;

			$offset=" limit ".$offset.", ".$limit;

			$result=$this->fetch_all($sql.$offset);

			return $result;

	}

	/**
	 * method for querying and fetch the data
	 * @param  $string $sql query needed
	 * @return resultset query
	 */
	   public function fetch_all( $sql )
    {
       
        $sel = $this->pdo->prepare( $sql );
        $sel->execute();
        $sel->setFetchMode( PDO::FETCH_OBJ );
        return $sel;
    }


	/**
	 * method for creating iteration number
	 * @param int $limit this param value must d same with limit number on query
	 * @return number default on each page
	 */
	function Num($limit)
	{
		$get=$this->getParameter('pname');
		$page=$_GET[$get];
		if ($page<1) {
			$page=1;
		}
		elseif ($page>$this->_count_row) {
			$page=$this->_count_row;
		}
		$start =($page-1)*$limit;
		$no=$start+1;
		return $no;
	}

	function numpage()
	{
		$res=$this->getParameter('open_tag')." page ".$this->page." of ".$this->_count_row.$this->getParameter('close_tag');
		return $res;
	}
	/**
	 * method for showing first link on page
	 * @param  array $first array list for setting properti and class
	 * @return string create first link on page
	 */
	function first()
	{
		$res=$this->getParameter('open_tag').'<a class="'.$first['class'].'"'.'title="'.$this->getParameter('title_first').'"'." href='".$this->url.$this->pname."1'>".$this->getParameter('text_first')."</a>".$this->getParameter('close_tag');
		if ($this->page==1) {
			//$res=$this->getParameter('open_tag').'<a class="'.$first['class'].'"'.'title="'.$this->getParameter('title_first').'">'.$this->getParameter('text_first')."</a>".$this->getParameter('close_tag');
			$res='';
		} else {
			$res=$this->getParameter('open_tag').'<a class="'.$first['class'].'"'.'title="'.$this->getParameter('title_first').'"'." href='".$this->url."1'>".$this->getParameter('text_first')."</a>".$this->getParameter('close_tag');
		}
		
		return $res;
	}

	/**
	 * method for creating previous link on page
	 * @param  array $text array list for setting properti and class
	 * @return string create previous link on page
	 */
	function prev()
	{
		$page=($this->page==1)?1:$this->page-1;
		if ($this->page==1) {
			//$prev=$this->getParameter('open_tag').'<a class="'.$this->getParameter('class').'"'.'title="'.$this->getParameter('title_previous').'">'.$this->getParameter('text_prev')."</a>".$this->getParameter('close_tag');
			$prev='';
		} else {
			$prev=$this->getParameter('open_tag').'<a class="'.$this->getParameter('class').'"'.'title="'.$this->getParameter('title_previous').'"'."href='".$this->url."$page'>".$this->getParameter('text_prev')."</a>".$this->getParameter('close_tag');
		
		}
		return $prev;
	}
	
	/**
	 * method create list link
	 * @param  array  $text array list propery range=number of range, open_tag, n close tag property
	 * @return string   create link
	 */
	function list_link()
	{
		
	$this->range=$this->getParameter('range');
		
		
		 if($this->page%$this->range==0)
			{
				$start=($this->page-$this->range)+1;
			} 
		if($this->page>=$this->_count_row-$this->range)
			{
				$start=($this->_count_row-$this->range)+1;
			}
		if($this->page<=$this->range)
			{
				$start=$this->page/$this->page;
			}
		else {
		
			$start=intval($this->page/$this->range)*$this->range+1;

		}

		$end=(($start+$this->range-1)<=$this->_count_row) ? ($start+$this->range) : $this->_count_row+1; 

		$data='';
			for ($i=$start; $i<$end; $i++) { 
				if ($i==$this->page) { //if current page, change class property to highligth active link
					$data.=$this->getParameter('open_tag_current').'<a '.$this->getParameter('class_current')." href='".$this->url."$i'>$i</a>".$this->getParameter('close_tag_current');
				}else {
					$data.=$this->getParameter('open_tag').'<a class="'.$this->getParameter('class').'"'." href='".$this->url."$i'>$i</a>".$this->getParameter('close_tag');
				}
				
			
		}
		return $data;

	}

	/**
	 * method create next link
	 * @param  array $text just like previous
	 * @return string       create next link
	 */
	function next()
	{
		$page=($this->page==$this->_count_row)?$this->_count_row:$this->page+1;
		if ($this->page==$this->_count_row) {
			//$next=$this->getParameter('open_tag').'<a class="'.$this->getParameter('class').'"'.'title="'.$this->getParameter('title_next').'">'.$this->getParameter('text_next')."</a>".$this->getParameter('close_tag');
			$next='';
		} else {
			$next=$this->getParameter('open_tag').'<a class="'.$this->getParameter('class').'"'.'title="'.$this->getParameter('title_next').'"'."href='".$this->url."$page'>".$this->getParameter('text_next')."</a>".$this->getParameter('close_tag');

		}
	return $next;
	}

	/**
	 * method create last link on page
	 * @param  array $last just as same as next or previous
	 * @return string       create last link
	 */
	function last()
	{
		if ($this->page==$this->_count_row) {
		//$last=$this->getParameter('open_tag').'<a class="'.$first['class'].'"'.'title="'.$this->getParameter('title_last').'">'.$this->getParameter('text_last')."</a>".$this->getParameter('close_tag');
		$last='';	
			} else {
		$last=$this->getParameter('open_tag').'<a class="'.$first['class'].'"'.'title="'.$this->getParameter('title_last').'"'." href='".$this->url.$this->_count_row."'>".$this->getParameter('text_last')."</a>".$this->getParameter('close_tag');
		
		}
		return $last;
	}

	/**
	 * set parameter
	 */

	public function setParameter($param)
	{
		foreach ($param as $key => $value) {
			if (array_key_exists($key, $this->param)) {
				$this->param[$key]=$value;
			}
		}
	}


	public function getParameter($name)
	{
		return($this->param[$name]);
	}
	
	public function create()
	{
		//echo $this->_count_row/$this->range;

		$this->pname=$this->getParameter('pname');
		$this->url=$this->getParameter('url')."&".$this->pname."=";
		
		

		$data='';
		if ((bool)($this->getParameter('display_num_page'))) {
			$data.=$this->numpage();
		}
		
		if ((bool)($this->getParameter('display_first'))) {
			$data.=$this->first();
		}
		$data.=$this->prev();
		$data.=$this->list_link();

		$data.=$this->next();
		if ((bool)($this->getParameter('display_last'))) {
			$data.=$this->last();
		}
		return $data;
	}

}