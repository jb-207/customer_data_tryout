<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TryoutCustKitTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TryoutCustKitTable Test Case
 */
class TryoutCustKitTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TryoutCustKitTable
     */
    protected $TryoutCustKit;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TryoutCustKit',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TryoutCustKit') ? [] : ['className' => TryoutCustKitTable::class];
        $this->TryoutCustKit = $this->getTableLocator()->get('TryoutCustKit', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TryoutCustKit);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TryoutCustKitTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TryoutCustKitTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
