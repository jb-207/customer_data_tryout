<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TryoutCustTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TryoutCustTable Test Case
 */
class TryoutCustTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TryoutCustTable
     */
    protected $TryoutCust;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TryoutCust',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TryoutCust') ? [] : ['className' => TryoutCustTable::class];
        $this->TryoutCust = $this->getTableLocator()->get('TryoutCust', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TryoutCust);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TryoutCustTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
