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
 * A group of multiple reservations with common values for all sub-reservations.
 */
final class ReservationPackage extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'bookingTime',
        'broker',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'modifiedTime',
        'name',
        'potentialAction',
        'priceCurrency',
        'programMembershipUsed',
        'reservationFor',
        'reservationId',
        'reservationStatus',
        'reservedTicket',
        'sameAs',
        'subReservation',
        'subjectOf',
        'totalPrice',
        'underName',
        'url',
    ];
}
