<?php

use yii\db\Migration;

/**
 * Class m180212_103344_edit_shop_product_key
 */
class m180212_103344_edit_shop_product_key extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropForeignKey('fk-shop_orders-delivery_method_id','{{%shop_orders}}');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addForeignKey('{{%fk-shop_orders-delivery_method_id}}', '{{%shop_orders}}', 'user_id', '{{%shop_delivery_methods}}', 'id', 'CASCADE');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180212_103344_edit_shop_product_key cannot be reverted.\n";

        return false;
    }
    */
}
