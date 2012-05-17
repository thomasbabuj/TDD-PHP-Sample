<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-05-17 at 23:15:30.
 */
class CartItem
{
	public $product;
	private $qty = 0;

	public function __construct(Product $product = null, $qty = 0)
	{
		$this->product = $product;
		$this->qty = $qty;
	}
	
    /**
     * @todo Implement getQty().
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @todo Implement getSubTotal().
     */
    public function getSubTotal()
    {
        return $this->qty * $this->product->unit_price;
    }

    /**
     * @todo Implement setQty().
     */
    public function setQty($new_qty=0)
    {
        $this->qty = $new_qty;
        return $this->qty;
    }
}
