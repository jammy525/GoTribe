<?php
namespace App\Model\Table;
use Cake\ORM\Table;


class GymLocationTable extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior("Timestamp");		
		$this->belongsTo("GymMember",["foreignKey"=>"created_by"]);
		//$this->belongsTo("ClassSchedule");
	}
}