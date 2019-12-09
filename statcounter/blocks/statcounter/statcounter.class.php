<?php
namespace Block;
/**
 * Stat Counter - Main Class
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package statcounter
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
class StatCounter extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $project_number = (int) $this->config['str_statcounter_project_number'];
                $security_code = $this->config['str_security_code'];
                $invisible = $this->config['bool_invisible'];
                
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
