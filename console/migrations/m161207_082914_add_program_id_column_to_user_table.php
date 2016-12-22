<?php

use yii\db\Migration;

/**
 * Handles adding program_id to table `user`.
 */
class m161207_082914_add_program_id_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'program_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropColumn('user', 'program_id');
    }
}
