<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\Fields\Generic\Shipment;

use Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Meta;
use Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Source;

/**
 * Temando API Shipment Error Field
 *
 * @package  Temando\Shipping\Rest
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.temando.com/
 */
class Error
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Meta
     */
    private $meta;

    /**
     * @var string
     */
    private $code;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Source
     */
    private $source;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     * @return void
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Meta $meta
     * @return void
     */
    public function setMeta(Meta $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return void
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Source
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Shipment\Error\Source $source
     * @return void
     */
    public function setSource(Source $source)
    {
        $this->source = $source;
    }
}
