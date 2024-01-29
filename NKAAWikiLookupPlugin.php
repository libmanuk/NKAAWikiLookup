<?php
/**
 * NKAAWikiLookup
 * 
 * @copyright Copyright 2017 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The NKAAWikiLookupplugin.
 * 
 * @package Omeka\Plugins\NKAAWikiLookup
 */
class NKAAWikiLookupPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array(
        'nkaalookuplinkc' => array('Display', 'Item', 'Item Type Metadata', 'Kentucky County & Region'),
        'nkaalookuplinkt' => array('Display', 'Item', 'Item Type Metadata', 'Kentucky Place (Town or City)'),
    );

    public function nkaalookuplinkc($text, $args) {
        return $this->_nkaalookupcField($text, $args);
    }

    public function nkaalookuplinkt($text, $args) {
        return $this->_nkaalookuptField($text, $args);
    }

    public function _nkaalookupcField($text, $args) {
        $pieces = explode(' - ', $text);
        return "Read about <a href=\"https://en.wikipedia.org/wiki/" . $pieces[0] . ",_Kentucky\" target=\"_blank\">" . $pieces[0] . ", Kentucky</a> in Wikipedia.";
    }

    public function _nkaalookuptField($text, $args) {
        return "Read about <a href=\"https://en.wikipedia.org/wiki/" . $text . ",_Kentucky\" target=\"_blank\">" . $text . ", Kentucky</a> in Wikipedia.";
    }

}
