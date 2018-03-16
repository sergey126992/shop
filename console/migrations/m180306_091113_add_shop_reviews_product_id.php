<?php

use yii\db\Migration;

/**
 * Class m180306_091113_add_shop_reviews_product_id
 */
class m180306_091113_add_shop_reviews_product_id extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $this->addColumn('{{%shop_reviews}}', 'product_id', $this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%shop_reviews}}', 'product_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180306_091113_add_shop_reviews_product_id cannot be reverted.\n";

        return false;
    }
    */
}
