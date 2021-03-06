<?php
namespace catsalad\V1\Rest\Cat_activity;

class Cat_activityEntity
{
	public $id;
    public $battle_id;
	public $time;
    public $hit_type;
    public $exp;
    public $score;
    public $created_at;

	public function getArrayCopy()
    {
        return array(
            CatActivityJsonKey::Id 				 	=> $this->id,
            CatActivityJsonKey::BattleId            => $this->battle_id,
            CatActivityJsonKey::Time 				=> $this->time,
            CatActivityJsonKey::HitType             => $this->hit_type,
            CatActivityJsonKey::Exp                 => $this->exp,
            CatActivityJsonKey::Score           	=> $this->score,
            CatActivityJsonKey::CreatedAt           => $this->created_at,
        );
    }
 
    public function exchangeArray(array $array)
    {
    	$this->id = $array[CatActivityJsonKey::Id];
        $this->battle_id = $array[CatActivityJsonKey::BattleId];
    	$this->time = $array[CatActivityJsonKey::Time];
        $this->hit_type = $array[CatActivityJsonKey::HitType];
        $this->exp = $array[CatActivityJsonKey::Exp];
        $this->score = $array[CatActivityJsonKey::Score];
    	$this->created_at = $array[CatActivityJsonKey::CreatedAt];
    }
}
