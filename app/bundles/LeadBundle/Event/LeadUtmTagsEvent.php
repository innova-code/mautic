<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\LeadBundle\Event;

use Mautic\CoreBundle\Event\CommonEvent;
use Mautic\LeadBundle\Entity\Lead;

/**
 * Class PointsChangeEvent
 *
 * @package Mautic\LeadBundle\Event
 */
class LeadUtmTagsEvent extends CommonEvent
{
    /**
     * @param Lead $lead
     * @param bool $isNew
     */
    public function __construct(Lead &$lead, $utmTag)
    {
        $this->entity =& $lead;
        $this->utmtags = $utmTag;
    }

    /**
     * Returns the Lead entity
     *
     * @return Lead
     */
    public function getLead()
    {
        return $this->entity;
    }

    /**
     * Returns the new points
     *
     * @return int
     */
    public function getUtmTags()
    {
        return $this->utmtags;
    }
}