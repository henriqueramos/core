<?php
/**
 * SQL WHERE clause constructor class.
 *
 * @copyright 2016 Fernando Val
 * @author    Fernando Val <fernando.val@gmail.com>
 * @license   https://github.com/fernandoval/Springy/blob/master/LICENSE MIT
 *
 * @version   1.0.0
 */

namespace Springy\Database\Query;

class Where extends Conditions
{
    /**
     * Convert the objet to a string in database WHERE form.
     *
     * The values of the parameter will be in question mark form and can be obtained with params() method.
     */
    public function __toString()
    {
        $where = parent::__toString();

        return (!empty($where) ? ' WHERE ' : '').$where;
    }
}
