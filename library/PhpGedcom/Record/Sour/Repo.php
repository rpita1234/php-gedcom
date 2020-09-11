<?php
/**
 * php-gedcom.
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @license         MIT
 *
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Sour;

use PhpGedcom\Record\Noteable;

class Repo extends \PhpGedcom\Record implements Noteable
{
    protected $_repo = null;
    /**
     * array PhpGedcom\Record\Sour\Repo\Caln.
     */
    protected $_caln = [];

    /**
     * array PhpGedcom\Record\NoteRef.
     */
    protected $_note = [];

    public function addNote($note = [])
    {
        $this->_note[] = $note;
    }

    public function addCaln($caln = [])
    {
        $this->_caln[] = $caln;
    }
}
