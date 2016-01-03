<?php 

/**
*           
*/
class regextTool
{
    private $validate = [
        'require' => '/.+/',
        'email' => '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',
        'url' => '/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/',
        'currency' => '/^\d+(\.\d+)?$/',
        'number' => '/^\d+$/',
        'zip' => '/^\d{6}$/',
        'integer' => '/^[-\+]?\d+$/',
        'double' => '/^[-\+]?\d+(\.\d+)?$/',
        'english' => '/[A-Za-z]+$/',
        'qq' => '/^\d{5,11}$/',
        'mobile' => '/^1(3|4|5|6|7|8)\d{9}$/',
    ];

	//返回的结果是数据还是真假
    private $returnMatchResult = false;
	//修正结果
    private $fixMode = null;
	//匹配结果
    private $matches = [];
	//是否匹配成功
    private $isMatch = false;


	/**
	 * @param bool|false $returnMatchResult
	 * @param null $fixMode
	 */
	function __construct( $returnMatchResult = false, $fixMode = null )
    {
        $this->returnMatchResult = $returnMatchResult;
        $this->fixMode = $fixMode;
    }

    private function regex( $pattern, $subject ) {
        if ( array_key_exists( strtolower( $pattern ), $this->validate ) ) {
            $pattern = $this->validate[$pattern].$this->fixMode;
        }
        $this->returnMatchResult ?
            preg_match_all( $pattern, $subject, $this->matches ) :
			$this->isMatch = preg_match( $pattern, $subject ) === 1;

		return $this->getRegexResult();
	}

	private function getRegexResult(){
		if ($this->returnMatchResult) {
			return $this->matches;
		}
		return $this->isMatch;
	}

	public function toggleRturnType($bool = null){
		if (empty($bool)) {
			$this->returnMatchResult = !$this->returnMatchResult;
		} else {
			$this->returnMatchResult = is_bool($bool) ? $bool : (bool)$bool;
		}
	}

	public function setFixMode($fixMode){
		$this->fixMode = $fixMode;
	}

	public function noEmpty( $str ) {
		return $this->regex( 'require', $str );
	}

	public function isEmail( $email ) {
		return $this->regex( 'email', $email );
	}

	public function isPhone( $mobile ) {
		return $this->regex( 'mobile', $mobile );
	}

	public function check( $pattern, $subject ) {
		return $this->regex( $pattern, $subject );
	}

	//更多的检查方法...


}