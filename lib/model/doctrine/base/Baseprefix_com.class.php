<?php

/**
 * Baseprefix_com
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $prefix
 * @property integer $com_id
 * 
 * @method integer    getPrefix() Returns the current record's "prefix" value
 * @method integer    getComId()  Returns the current record's "com_id" value
 * @method prefix_com setPrefix() Sets the current record's "prefix" value
 * @method prefix_com setComId()  Sets the current record's "com_id" value
 * 
 * @package    cmovil-cl
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseprefix_com extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('prefix_com');
        $this->hasColumn('prefix', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'unique' => true,
             ));
        $this->hasColumn('com_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}