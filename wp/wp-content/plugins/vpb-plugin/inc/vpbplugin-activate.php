<?php 
/**
* @package VPB Plugin
*/


class VPBPluginActivate
{
	public static function activate(){
		flush_rewrite_rules();
	}
}