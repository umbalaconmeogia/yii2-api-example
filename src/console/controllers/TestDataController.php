<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\People;
use batsg\models\BaseBatsgModel;
use common\models\Skill;
use common\models\PeopleSkill;

class TestDataController extends Controller
{
    public function actionIndex()
    {
        // Create Skill
        $skills = [];
        for ($i = 1; $i <= 10; $i++) {
            $skill = $this->createByName(Skill::class, "Skill $i");
            $skill->saveThrowError();
            $skills[$skill->id] = $skill;
        }
        // Create People
        for ($i = 1; $i <= 10; $i++) {
            $people = $this->createByName(People::class, "People $i");
            $people->gender = $i % 2 + 1;
            $people->saveThrowError();
            // Create PeopleSkill
            foreach ($skills as $skill) {
                // Decide if these People and Skill are related.
                $relate = ($people->id + $skill->id) % 2;
                if ($relate) {
                    $peopleSkill = PeopleSkill::findOneCreateNew([
                        'people_id' => $people->id,
                        'skill_id' => $skill->id,
                    ]);
                    $peopleSkill->saveThrowError();
                }
            }
        }
    }

    /**
     * Create a model object specified by name.
     * Return an object from DB if exists.
     * @param string $class
     * @param string $name
     * @return BaseBatsgModel
     */
    private function createByName($class, $name)
    {
        return $class::findOneCreateNew([
            'name' => $name,
        ]);
    }
}