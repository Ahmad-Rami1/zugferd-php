<?php

namespace Easybill\ZUGFeRD211\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class BillingSpecifiedPeriod
{
    /**
     * @Type("Easybill\ZUGFeRD211\Model\DateTime")
     * @XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("StartDateTime")
     */
    public DateTime $startDateTime;
    /**
     * @Type("Easybill\ZUGFeRD211\Model\DateTime")
     * @XmlElement(cdata=false, namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("EndDateTime")
     */
    public DateTime $endDateTime;
}
