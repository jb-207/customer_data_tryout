<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TryoutCustDescTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TryoutCustDescTable Test Case
 */
class TryoutCustDescTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TryoutCustDescTable
     */
    protected $TryoutCustDesc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TryoutCustDesc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TryoutCustDesc') ? [] : ['className' => TryoutCustDescTable::class];
        $this->TryoutCustDesc = $this->getTableLocator()->get('TryoutCustDesc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TryoutCustDesc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TryoutCustDescTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
