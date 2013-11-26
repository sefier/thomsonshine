<?php

defined('IN_MOPEN') or exit;

/**
* The PHP compiling template engine
* 
* @author shouji.baidu.com
* @version 1.0
*/

/**
 * @author shouji.baidu.com
 * @access public
 */
class Template
{
	/**
	 * Template File Directory Path
	 * 
	 * @access private
	 */
	var $dir = '';

	/**
	 * Compile File Directory Path
	 * 
	 * @access private
	 */
	var $compileDir = '';

	/**
	 * Template File Name
	 * 
	 * @access private
	 */
	var $file;

	/**
	 * String Variable
	 * 
	 * @access private
	 */
	var $var = array();

	/**
	 * Condition Variable
	 * 
	 * @access private
	 */
	var $if = array();

	/**
	 * Loop Variable
	 * 
	 * @access private
	 */
	var $loop = array();

	/**
	 * Compile Mode
	 * 0: Development mode
	 * 1: Check mode
	 * 2: No Check mode
	 * 
	 * @access private
	 */
	var $compileMode = 0;
	
	/**
	 * HTTP Content Type
	 * 
	 * @access private
	 */
	var $contentType;
	 
	/**
	 * 
	 */
	function Template()
	{
		
	}
	
	/**
	 * Set HTTP Content Type
	 * 
	 * @param String contentType
	 * @access public
	 */
	function setContentType($contentType)
	{
		$this->contentType = $contentType;
	}
	
	
	/**
	 * Set Template Compile Mode
	 * 
	 * @param String mode
	 * @access public
	 */
	function setCompileMode($mode)
	{
		$this->compileMode = $mode;
	}
	
	/**
	 * Set a path of the template file directory
	 * 
	 * @param String dir
	 * @access public
	 */
	function setDir($dir)
	{
		$this->dir = $dir;
	}

	/**
	 * Set a path of the compile directory
	 * 
	 * @param String dir
	 * @access public
	 */
	function setCompileDir($dir)
	{
		$this->compileDir = $dir;
	}
	
	/**
	 * Set a template file
	 * 
	 * @param String mode
	 * @access public
	 */
	function setFile($file)
	{
		$this->file = $file;
	}
	
	/**
	 * Set a variable
	 * 
	 * @param String arg1
	 * @param Array arg1
	 * @param String arg2
	 * @param Array arg2
	 * @param Boolean arg2
	 * @access public
	 */
	function setVar($arg1, $arg2='')
	{
		if (is_array($arg1)) {
			$this->var = $arg1;
		} else if (is_array($arg2)) {
			$this->loop[$arg1] = $arg2;
		} else if (is_bool($arg2)) {
			$this->if[$arg1] = $arg2;
		} else {
			$this->var[$arg1] = $arg2;
		}
	}
	
	function setVariable($arg1, $arg2='')
	{
		$this->var[$arg1] = $arg2;
	}
	
	function setArray($arg1, $arg2='')
	{
		$this->loop[$arg1] = $arg2;
	}
	
	function setBool($arg1, $arg2='')
	{
		$this->if[$arg1] = $arg2;
	}
	/**
	 * Compile and print HTML
	 * 
	 * @param Integer mode 0:Print 1:Return
	 * @return String
	 * @access public
	 */
	function show($mode = 0)
	{
		$bCompile = true;
		if ($this->compileMode == 0) {
			$bCompile = $this->compile($this->file);
		} else if ($this->compileMode == 1) {
			if (is_file($this->compileDir.$this->file.'.php') == false || 
				filemtime($this->dir.$this->file) > filemtime($this->compileDir.$this->file.'.php')) {
				$bCompile = $this->compile($this->file);
			}
		}
		$VAR = $this->var;
		$IF = $this->if;
		$LOOP = $this->loop;
		
		if($bCompile){
			ob_start();
			include $this->compileDir.$this->file.'.php';
			$str = ob_get_contents();
			ob_end_clean();
			$str = str_replace("&lt;?", "<?", $str);
			if ($mode == 0) {
				if (empty($this->contentType) == false){
					header("Content-type: ".$this->contentType);
				}
				echo $str;
			} else {
				return $str;
			}
		}
	}
	
	/**
	 * Check key exists in Array
	 * 
	 * @param String key
	 * @param Array array
	 * @param Array lastLoopVarName
	 * @param Integer depth
	 * @param Integer i
	 * @return Boolean
	 * @access private
	 */
	function loopKeyExists($key, $array, $lastLoopVarName, $depth, $i = 0)
	{
		if (count($array) > 0) {
			foreach ($array as $val) {
				if ($depth == 0) {
					if (array_key_exists($key, $val)) 
						return true;
					else 
						return false;
				} else {
					$depth--;
					$i++;
					return $this->loopKeyExists($key, $val[$lastLoopVarName[$i]], $lastLoopVarName, $depth, $i);
				}
			}
		}
		return true;//modify
	}

	/**
	 * Mark Array
	 * 
	 * @param Array strArr
	 * @return Array
	 * @access private
	 */
	function mark($strArr)
	{
		$blockStatus = '';
		$elseloopStatus = false;
		$globalStatus = true;
		$newStrArr = array();
		$loopVarName = '';
		$topVarName = '';
		$lastLoopVarName = array();
		$loopDepth = 0;
		$ifDepth = 0;
		$loopStatus = '';
		$ifStatus = '';
		$length = count($strArr);
		$j = 0;
		for ($i = 0; $i < $length; $i++) {
			if ($strArr[$i] == '{' && isset($strArr[$i+1]) && $strArr[$i+1] != '}') {
				$nextBlock = $strArr[$i+1];
				if (preg_match("/^include:([\w\-\.\/]+)$/", $nextBlock, $matches) > 0) {
					$includeFile = $matches[1];
					if (file_exists($this->dir.$includeFile)) $blockStatus = 'INCLUDE';
					else $blockStatus = '';
					$globalStatus = false;
				} else if (preg_match("/^if:([\w\-\.]+)$/", $nextBlock, $matches) > 0) {
					$ifVarName = $matches[1];
					if ($loopDepth > 0) {
						$lastIfVarName = $this->getLastVarName($ifVarName);
						if ($this->loopKeyExists($lastIfVarName, $this->loop[$lastLoopVarName[0]], $lastLoopVarName, $loopDepth - 1)) {
							$blockStatus = 'IF';
							$globalStatus = false;
							$ifStatus = 'IF';
							$ifDepth++;
						} else if (array_key_exists($ifVarName, $this->if)) {
							$blockStatus = 'IF';
							$globalStatus = true;
							$ifStatus = 'IF';
							$ifDepth++;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					} else {
						if (array_key_exists($ifVarName, $this->if)) {
							$blockStatus = 'IF';
							$globalStatus = true;
							$ifStatus = 'IF';
							$ifDepth++;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					}
				} else if (preg_match("/^elseif:([\w\-\.]+)$/", $nextBlock, $matches) > 0) {
					$elseifVarName = $matches[1];
					if ($loopDepth > 0) {
						$lastElseifVarName = $this->getLastVarName($elseifVarName);
						if ($this->loopKeyExists($lastElseifVarName, $this->loop[$lastLoopVarName[0]], $lastLoopVarName, $loopDepth - 1)) {
							if ($ifStatus == 'IF') {
								$blockStatus = 'IF_ELSEIF';
								$globalStatus = false;
							} else {
								$blockStatus = '';
								$globalStatus = false;
							}
						} else if (array_key_exists($elseifVarName, $this->if)) {
							if ($ifStatus == 'IF') {
								$blockStatus = 'IF_ELSEIF';
								$globalStatus = true;
							} else {
								$blockStatus = '';
								$globalStatus = false;
							}
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					} else {
						if (array_key_exists($elseifVarName, $this->if)) {
							if ($ifStatus == 'IF') {
								$blockStatus = 'IF_ELSEIF';
								$globalStatus = true;
							} else {
								$blockStatus = '';
								$globalStatus = false;
							}
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					}
				} else if (preg_match("/^loop:([\w\-\.]+)$/", $nextBlock, $matches) > 0) {
					//$loopKeyName = $matches[1];
					$loopVarName = $matches[1];
					$lastLoopVarName[$loopDepth] = $this->getLastVarName($loopVarName);
					if ($loopDepth > 0) {
						if ($this->loopKeyExists($lastLoopVarName[$loopDepth], $this->loop[$lastLoopVarName[0]], $lastLoopVarName, $loopDepth - 1)) {
							$blockStatus = 'LOOP';
							$globalStatus = false;
							$loopStatus = 'LOOP';
							$loopDepth++;
						} else if (array_key_exists($loopVarName, $this->loop)) {
							$blockStatus = 'LOOP';
							$globalStatus = false;
							$loopStatus = 'LOOP';
							$loopDepth++;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					} else {
						if (array_key_exists($loopVarName, $this->loop)) {
							$topVarName = $loopVarName;
							$blockStatus = 'LOOP';
							$globalStatus = false;
							$loopStatus = 'LOOP';
							$loopDepth++;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					}
				} else if (preg_match("/^elseloop$/", $nextBlock, $matches) > 0) {
					if ($loopStatus == 'LOOP') {
						$blockStatus = 'LOOP_ELSE';
						$elseloopStatus = true;
						$globalStatus = false;
					} else {
						$blockStatus = '';
						$globalStatus = false;
					}
				} else if (preg_match("/^else$/", $nextBlock, $matches) > 0) {
					if ($ifStatus == 'IF') {
						$blockStatus = 'IF_ELSE';
					} else {
						$blockStatus = '';
						$globalStatus = false;
					}
				} else if (preg_match("/^\/loop$/", $nextBlock, $matches) > 0) {
					if ($loopStatus == 'LOOP') {
						$blockStatus = 'LOOP_END';
						if ($loopDepth == 1) $loopStatus = '';
						$loopDepth--;
					} else {
						$blockStatus = '';
						$globalStatus = false;
					}
				} else if (preg_match("/^\/if$/", $nextBlock, $matches) > 0) {
					if ($ifStatus == 'IF') {
						$blockStatus = 'IF_END';
						if ($ifDepth == 1) $ifStatus = '';
						$ifDepth--;
					} else {
						$blockStatus = '';
						$globalStatus = false;
					}
				} else if (preg_match("/^([#:&=]?)([\w\-\.]+)$/", $nextBlock, $matches) > 0) {
					$firstChar = $matches[1];
					$varName = $matches[2];
					if ($loopDepth > 0) {
						$lastVarName = $this->getLastVarName($varName);
						if ($this->loopKeyExists($lastVarName, $this->loop[$lastLoopVarName[0]], $lastLoopVarName, $loopDepth - 1)) {
							$blockStatus = 'VAR';
							$globalStatus = false;
						} else if (array_key_exists($varName, $this->var)) {
							$blockStatus = 'VAR';
							$globalStatus = true;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					} else {
						if (array_key_exists($varName, $this->var)) {
							$blockStatus = 'VAR';
							$globalStatus = true;
						} else {
							$blockStatus = '';
							$globalStatus = false;
						}
					}
				} else {
					$blockStatus = '';
					$globalStatus = false;
				}
			} else {
				$blockStatus = '';
				$globalStatus = false;
			}
			if ($blockStatus == 'LOOP_ELSE') {
				$newStrArr[$j]['varName'] = $loopVarName;
				$newStrArr[$j]['topVarName'] = $topVarName;
			} else if ($blockStatus == 'LOOP_END') {
				$newStrArr[$j]['elseloopStatus'] = $elseloopStatus;
			} else if ($blockStatus == 'LOOP'){
				//$newStrArr[$j]['keyVarName'] = $loopKeyName;
				$newStrArr[$j]['varName'] = $loopVarName;
				$newStrArr[$j]['topVarName'] = $topVarName;
			} else if ($blockStatus == 'IF_ELSEIF'){
				$newStrArr[$j]['varName'] = $elseifVarName;
			} else if ($blockStatus == 'IF'){
				$newStrArr[$j]['varName'] = $ifVarName;
			} else if ($blockStatus == 'VAR') {
				$newStrArr[$j]['firstChar'] = $firstChar;
				$newStrArr[$j]['varName'] = $varName;
			} else if ($blockStatus == 'INCLUDE') {
				$newStrArr[$j]['varName'] = $includeFile;
			}
			$newStrArr[$j]['globalStatus'] = $globalStatus;
			$newStrArr[$j]['loopDepth'] = $loopDepth;
			$newStrArr[$j]['blockStatus'] = $blockStatus;
			$newStrArr[$j]['code'] = $strArr[$i];
			$j++;
		}
		$length = count($newStrArr);
		for ($i = 0; $i < $length; $i++) {
			$blockStatus = $newStrArr[$i]['blockStatus'];
			if ($ifStatus == 'IF' && $loopStatus == 'LOOP') {
				if ($newStrArr[$i]['loopDepth'] > 0 || (strlen($blockStatus) >= 4 && substr($blockStatus, 0, 4) == 'LOOP')) {
					$newStrArr[$i]['blockStatus'] = '';
				} else if (strlen($blockStatus) >= 2 && substr($blockStatus, 0, 2) == 'IF') {
					$newStrArr[$i]['blockStatus'] = '';
				} else if ($blockStatus != '') {
					$newStrArr[$i+1]['code'] = '';
					$newStrArr[$i+2]['code'] = '';
				}
			} else if ($loopStatus == 'LOOP') {
				if ($newStrArr[$i]['loopDepth'] > 0 || (strlen($blockStatus) >= 4 && substr($blockStatus, 0, 4) == 'LOOP')) {
					$newStrArr[$i]['blockStatus'] = '';
				} else if ($blockStatus != '') {
					$newStrArr[$i+1]['code'] = '';
					$newStrArr[$i+2]['code'] = '';
				}
			} else if ($ifStatus == 'IF') {
				if (strlen($blockStatus) >= 2 && substr($blockStatus, 0, 2) == 'IF') {
					$newStrArr[$i]['blockStatus'] = '';
				} else if ($blockStatus != '') {
					$newStrArr[$i+1]['code'] = '';
					$newStrArr[$i+2]['code'] = '';
				}
			} else {
				if ($blockStatus != '') {
					$newStrArr[$i+1]['code'] = '';
					$newStrArr[$i+2]['code'] = '';
				}
			}
		}
		return $newStrArr;
	}

		/**
	 * Get a first variable name
	 * 
	 * @param String varName
	 * @return String
	 * @access private
	 */
	function getFirstVarName($varName)
	{
		return array_shift(explode(".", $varName));
	}
	
	/**
	 * Get a last variable name
	 * 
	 * @param String varName
	 * @return String
	 * @access private
	 */
	function getLastVarName($varName)
	{
		return array_pop(explode(".", $varName));
	}

	/**
	 * Replace a variable
	 * 
	 * @param String firstChar
	 * @param String varName
	 * @param String prefix
	 * @return String
	 * @access private
	 */
	function getVarPhpCode($firstChar, $varName, $prefix)
	{
		switch ($firstChar) {
			case '=':
				$functionStart = 'nl2br(htmlspecialchars(';
				$functionEnd = '))';
				break;
			case ':':
				$functionStart = 'nl2br(';
				$functionEnd = ')';
				break;
			case '&':
				$functionStart = 'strip_tags(';
				$functionEnd = ')';
				break;				
			case '#':
				$functionStart = '';
				$functionEnd = '';
				break;
			default:
				$functionStart = 'htmlspecialchars(';
				$functionEnd = ')';
				break;
		}
		$lastVarName = $this->getLastVarName($varName);
		$phpCode = '<?php echo '.$functionStart.'$'.$prefix.'["'.$lastVarName.'"]'.$functionEnd.'; ?>';
		return $phpCode;
	}

	/**
	 * Compile Template file
	 * 
	 * @param String file
	 * @access private
	 */
	function compile($file)
	{
		$str = $this->read($this->dir.$file);
		$str .= "\n\n";
		$str = str_replace("<?", "&lt;?", $str);
		$strArr = preg_split("/({)|(})/", $str, -1, PREG_SPLIT_DELIM_CAPTURE);
		$strArr = $this->removeEmptyVar($strArr);
		$strArr = $this->mark($strArr);
		$str = '';
		foreach ($strArr as $val) {
			$blockStatus = $val['blockStatus'];
			$globalStatus = $val['globalStatus'];
			$loopDepth = $val['loopDepth'];
			if ($blockStatus == 'LOOP'){
				$loopVarName = $val['varName'];
				$topVarName = $val['topVarName'];
				if ($loopDepth == 1) {
					$str .= '<?php if (count($LOOP["'.$topVarName.'"]) > 0) { ';
					$str .= 'foreach ($LOOP["'.$topVarName.'"] as $val'.$loopDepth.') { ?>';
				} else {
					$lastLoopVarName = $this->getLastVarName($loopVarName);
					$str .= '<?php if (count($val'.($loopDepth-1).'["'.$lastLoopVarName.'"]) > 0) { ';
					$str .= 'foreach ($val'.($loopDepth-1).'["'.$lastLoopVarName.'"] as $val'.$loopDepth.') { ?>';
				}
			}  else if ($blockStatus == 'LOOP_ELSE'){
				$loopVarName = $val['varName'];
				$topVarName = $val['topVarName'];
				if ($loopDepth == 1) {
					$str .= '<?php }} if (count($LOOP["'.$topVarName.'"]) == 0) { ?>';
				} else {
					$lastLoopVarName = $this->getLastVarName($loopVarName);
					$str .= '<?php }} if (count($val'.($loopDepth-1).'["'.$lastLoopVarName.'"]) == 0) { ?>';
				}
			} else if ($blockStatus == 'LOOP_END') {
				$elseloopStatus = $val['elseloopStatus'];
				if ($elseloopStatus == false) $str .= '<?php }} ?>';
				else $str .= '<?php } ?>';
			} else if ($blockStatus == 'IF'){
				$ifVarName = $val['varName'];
				if ($globalStatus == true) {
					$str .= '<?php if ($IF["'.$ifVarName.'"]) { ?>';
				} else {
					$lastIfVarName = $this->getLastVarName($ifVarName);
					$str .= '<?php if ($val'.$loopDepth.'["'.$lastIfVarName.'"]) { ?>';
				}
			} else if ($blockStatus == 'IF_ELSEIF'){
				$elseifVarName = $val['varName'];
				if ($globalStatus == true) {
					$str .= '<?php } else if ($IF["'.$elseifVarName.'"]) { ?>';
				} else {
					$lastElseifVarName = $this->getLastVarName($elseifVarName);
					$str .= '<?php } else if ($val'.$loopDepth.'["'.$lastElseifVarName.'"]) { ?>';
				}
			} else if ($blockStatus == 'IF_ELSE'){
				$str .= '<?php } else { ?>';
			} else if ($blockStatus == 'IF_END') {
				$str .= '<?php } ?>';
			} else if ($blockStatus == 'VAR') {
				if ($globalStatus == true) {
					$str .= $this->getVarPhpCode($val['firstChar'], $val['varName'], 'VAR');
				} else {
					$str .= $this->getVarPhpCode($val['firstChar'], $val['varName'], 'val'.$val['loopDepth']);
				}
			} else if ($blockStatus == 'INCLUDE') {
				$includeFile = $val['varName'];
				$this->compile($includeFile);
				$str .= '<?php include \''.$includeFile.'.php'.'\'; ?>';
			} else {
				$str .= $val['code'];
			}
		}
		$headStr = '<?php /* Created:'.date("Y-m-d H:m:s").' */ ?>'."\n";
		$str = $headStr.$str;
		return $this->write($this->compileDir.$file.'.php', $str);		
	}
	
	/**
	 * Read a file
	 * 
	 * @param String path
	 * @return String
	 * @access private
	 */
	function read($path)
	{
		$str = file_get_contents($path);
		return $str;
	}
	
	/**
	 * Write a file
	 * 
	 * @param String path
	 * @param String msg
	 * @access private
	 */
	function write($path, $msg, $mode = 'w')
	{
		$fp = fopen($path, $mode);
		if ($fp){
			if (flock($fp,2)) {
				fwrite($fp, $msg);
				flock($fp,3);
			}
			fclose($fp);
			return true;
		}
		else{
			echo "Permission Deny ";
			return false;
		}
	}
	
	/**
	 * Delete empty variable in Array
	 * 
	 * @param Array arr
	 * @return Array
	 * @access private
	 */
	function removeEmptyVar($arr)
	{
		$newArr = array();
		foreach ($arr as $val) {
			if ($val == '') continue;
			$newArr[] = $val;
		}
		return $newArr;
	}
	
}

?>