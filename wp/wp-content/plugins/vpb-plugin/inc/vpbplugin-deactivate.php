<?php 
/**
* @package VPB Plugin
*/


class VPBPluginDeactivate
{
	public static function activate(){
		flush_rewrite_rules();
	}
}