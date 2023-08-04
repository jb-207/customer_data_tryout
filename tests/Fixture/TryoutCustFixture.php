<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TryoutCustFixture
 */
class TryoutCustFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tryout_cust';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'kit_id' => 1,
                'customer_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
