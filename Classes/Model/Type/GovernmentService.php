<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 */
final class GovernmentService extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'aggregateRating',
        'alternateName',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broker',
        'category',
        'description',
        'disambiguatingDescription',
        'hasOfferCatalog',
        'hoursAvailable',
        'identifier',
        'image',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'mainEntityOfPage',
        'name',
        'offers',
        'potentialAction',
        'providerMobility',
        'review',
        'sameAs',
        'serviceOperator',
        'serviceOutput',
        'serviceType',
        'slogan',
        'subjectOf',
        'url',
    ];
}
