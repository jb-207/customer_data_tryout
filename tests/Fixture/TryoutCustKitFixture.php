<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TryoutCustKitFixture
 */
class TryoutCustKitFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tryout_cust_kit';
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
                'kit_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
