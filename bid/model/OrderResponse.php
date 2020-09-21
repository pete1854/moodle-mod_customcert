<?php

namespace mod_customcert\bid\model;

/**
 * Class OrderResponse
 *
 * Response from auth and sign methods
 *
 * @property string $orderRef Used to collect the status of the order.
 * @property string $autoStartToken Used as reference to this order when the client is started automatically.
 */
class OrderResponse extends AbstractResponseModel
{

}
