<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\FieldRelation class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator\Specifications;
use eZ\Publish\API\Repository\Values\Content\Query\CriterionInterface;

/**
 * A criterion that matches Content based on the relations of relation field.
 * This includes Relation and RelationList field types in standard installation, but also any
 * other field type storing {@link \eZ\Publish\API\Repository\Values\Content\Relation::FIELD}
 * type relation.
 *
 * Supported operators:
 * - IN: will match if Content relates to one or more of the given ids through given relation field
 * - CONTAINS: will match if Content relates to all of the given ids through given relation field
 */
class FieldRelation extends Criterion implements CriterionInterface
{
    public function getSpecifications()
    {
        $types = Specifications::TYPE_INTEGER | Specifications::TYPE_STRING;
        return array(
            new Specifications( Operator::CONTAINS, Specifications::FORMAT_SINGLE | Specifications::FORMAT_ARRAY, $types ),
            new Specifications( Operator::IN, Specifications::FORMAT_ARRAY, $types ),
        );
    }

    public static function createFromQueryBuilder( $target, $operator, $value )
    {
        return new self( $target, $operator, $value );
    }
}
