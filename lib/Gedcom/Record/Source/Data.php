<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2011, Kristopher Wilson
 * @package         php-gedcom 
 * @license         http://php-gedcom.kristopherwilson.com/license
 * @link            http://php-gedcom.kristopherwilson.com
 * @version         SVN: $Id$
 */

namespace Gedcom\Record\Source;

use \Gedcom\Record\Noteable;

/**
 *
 */
class Data extends \Gedcom\Record implements Noteable
{
    public $events = array();
    protected $_agnc = null;
    protected $_date = null;
    
    protected $_text = array();
    
    /**
     *
     */
    protected $_note = array();
    
    /**
     *
     */
    public function addText($text)
    {
        $this->_text[] = $text;
    }
    
    /**
     *
     */
    public function addNote(\Gedcom\Record\NoteRef &$note)
    {
        $this->_note[] = &$note;
    }
}
