<?php
/**
 * Contains EWSType_ResolveNamesResponseMessageType.
 */

/**
 * Defines the status and result of a ResolveNames operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_ResolveNamesResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Contains an array of resolutions for an ambiguous name.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResolutionType
     */
    public $ResolutionSet;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
