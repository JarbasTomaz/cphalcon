<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Manager;

use UnitTester;

class AddInlineCssCest
{
    /**
     * Tests Phalcon\Assets\Manager :: addInlineCss()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function assetsManagerAddInlineCss(UnitTester $I)
    {
        $I->wantToTest('Assets\Manager - addInlineCss()');

        $I->skipTest('Need implementation');
    }
}