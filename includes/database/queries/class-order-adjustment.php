<?php
/**
 * Order Adjustment Query Class.
 *
 * @package     EDD
 * @subpackage  Database\Queries
 * @copyright   Copyright (c) 2018, Easy Digital Downloads, LLC
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.0.0
 */
namespace EDD\Database\Queries;

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Class used for querying order discounts.
 *
 * @since 3.0
 *
 * @see \EDD\Database\Queries\Order_Adjustment::__construct() for accepted arguments.
 */
class Order_Adjustment extends Base {

	/** Table Properties ******************************************************/

	/**
	 * Name of the database table to query.
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $table_name = 'order_adjustments';

	/**
	 * String used to alias the database table in MySQL statement.
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $table_alias = 'oa';

	/**
	 * Name of class used to setup the database schema
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $table_schema = '\\EDD\\Database\\Schemas\\Order_Adjustments';

	/** Item ******************************************************************/

	/**
	 * Name for a single item
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $item_name = 'order_adjustment';

	/**
	 * Plural version for a group of items.
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $item_name_plural = 'order_adjustments';

	/**
	 * Callback function for turning IDs into objects
	 *
	 * @since 3.0
	 * @access public
	 * @var mixed
	 */
	protected $item_shape = '';

	/** Cache *****************************************************************/

	/**
	 * Group to cache queries and queried items in.
	 *
	 * @since 3.0
	 * @access public
	 * @var string
	 */
	protected $cache_group = 'order_adjustments';

	/** Methods ***************************************************************/

	/**
	 * Sets up the order query, based on the query vars passed.
	 *
	 * @since 3.0
	 * @access public
	 *
	 * @param string|array $query {
	 *     Optional. Array or query string of order query parameters. Default empty.
	 *
	 *     @type int          $id                   An order item ID to only return that order. Default empty.
	 *     @type array        $id__in               Array of order item IDs to include. Default empty.
	 *     @type array        $id__not_in           Array of order item IDs to exclude. Default empty.
	 *     @type string       $object_id            An object ID to only return those objects. Default empty.
	 *     @type array        $object_id__in        Array of object IDs to include. Default empty.
	 *     @type array        $object_id__not_in    Array of IDs object to exclude. Default empty.
	 *     @type string       $object_type          An object types to only return that type. Default empty.
	 *     @type array        $object_type__in      Array of object types to include. Default empty.
	 *     @type array        $object_type__not_in  Array of object types to exclude. Default empty.
	 *     @type string       $type_id              A type ID to only return that type. Default empty.
	 *     @type array        $type_id__in          Array of types IDs to include. Default empty.
	 *     @type array        $type_id__not_in      Array of types IDS to exclude. Default empty.
	 *     @type string       $type                 A type to only return that type. Default empty.
	 *     @type array        $type__in             Array of types to include. Default empty.
	 *     @type array        $type__not_in         Array of types to exclude. Default empty.
	 *     @type string       $amount               Limit results to those affiliated with a given total. Default empty.
	 *     @type array        $amount__in           Array of amounts to include. Default empty.
	 *     @type array        $amount__not_in       Array of amounts to exclude. Default empty.
	 *     @type array        $date_query           Query all datetime columns together. See WP_Date_Query.
	 *     @type array        $date_created_query   Date query clauses to limit by. See WP_Date_Query.
	 *                                              Default null.
	 *     @type array        $date_modified_query  Date query clauses to limit by. See WP_Date_Query.
	 *                                              Default null.
	 *     @type bool         $count                Whether to return a order count (true) or array of order objects.
	 *                                              Default false.
	 *     @type string       $fields               Site fields to return. Accepts 'ids' (returns an array of order IDs)
	 *                                              or empty (returns an array of complete order objects). Default empty.
	 *     @type int          $number               Limit number of orders to retrieve. Default null (no limit).
	 *     @type int          $offset               Number of orders to offset the query. Used to build LIMIT clause.
	 *                                              Default 0.
	 *     @type bool         $no_found_rows        Whether to disable the `SQL_CALC_FOUND_ROWS` query. Default true.
	 *     @type string|array $orderby              Accepts 'id', 'object_id', 'object_type', 'discount_id', 'amount'
	 *                                              'date_created', 'id__in', 'object_id__in', 'object_type__in',
	 *                                              'discount_id__in', 'amount__in', 'status__in', 'quantity__in'.
	 *                                              Also accepts false, an empty array, or 'none' to disable `ORDER BY` clause.
	 *                                              Default 'id'.
	 *     @type string       $order                How to order retrieved orders. Accepts 'ASC', 'DESC'. Default 'DESC'.
	 *     @type string       $search               Search term(s) to retrieve matching orders for. Default empty.
	 *     @type bool         $update_cache         Whether to prime the cache for found orders. Default false.
	 * }
	 */
	public function __construct( $query = array() ) {
		parent::__construct( $query );
	}
}
