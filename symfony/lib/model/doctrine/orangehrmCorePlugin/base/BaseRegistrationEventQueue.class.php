<?php

/**
 * BaseRegistrationEventQueue
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                     $id                         Type: integer(4), primary key
 * @property int                     $eventType                  Type: integer(4)
 * @property bool                    $published                  Type: boolean
 * @property string                  $eventTime                  Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                  $publishTime                Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                  $eventData                  Type: string(2147483647)
 *  
 * @method int                       getId()                     Type: integer(4), primary key
 * @method int                       getEventtype()              Type: integer(4)
 * @method bool                      getPublished()              Type: boolean
 * @method string                    getEventtime()              Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                    getPublishtime()            Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                    getEventdata()              Type: string(2147483647)
 *  
 * @method RegistrationEventQueue    setId(int $val)             Type: integer(4), primary key
 * @method RegistrationEventQueue    setEventtype(int $val)      Type: integer(4)
 * @method RegistrationEventQueue    setPublished(bool $val)     Type: boolean
 * @method RegistrationEventQueue    setEventtime(string $val)   Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method RegistrationEventQueue    setPublishtime(string $val) Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method RegistrationEventQueue    setEventdata(string $val)   Type: string(2147483647)
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistrationEventQueue extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_registration_event_queue');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('event_type as eventType', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('published', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('event_time as eventTime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('publish_time as publishTime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('data as eventData', 'string', 2147483647, array(
             'type' => 'string',
             'length' => 2147483647,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}