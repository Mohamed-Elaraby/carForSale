<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bank
 *
 * @property int $id
 * @property float $amount_paid
 * @property float $final_amount
 * @property string|null $notes
 * @property int|null $processType
 * @property int $user_id
 * @property int|null $sale_order_id
 * @property int|null $purchase_order_id
 * @property int|null $branch_id
 * @property int|null $expenses_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \App\Models\Expenses|null $expenses
 * @property-read \App\Models\PurchaseOrder|null $purchaseOrder
 * @property-read \App\Models\SaleOrder|null $saleOrder
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 */
	class Bank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Branch
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $building_number
 * @property string|null $street_name
 * @property string|null $district
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $vat_number
 * @property string $status 0=>close, 1=>open
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Engineer[] $engineers
 * @property-read int|null $engineers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Expenses[] $expenses
 * @property-read int|null $expenses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenPurchaseOrder[] $openPurchaseOrders
 * @property-read int|null $open_purchase_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenSaleOrder[] $openSaleOrders
 * @property-read int|null $open_sale_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseOrder[] $purchaseOrders
 * @property-read int|null $purchase_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleOrder[] $saleOrders
 * @property-read int|null $sale_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Technical[] $technicals
 * @property-read int|null $technicals_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Branch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Branch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Branch query()
 */
	class Branch extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $chassis_number
 * @property string $plate_number
 * @property string $car_color
 * @property int $client_id
 * @property int $car_type_id
 * @property int $car_size_id
 * @property int|null $car_model_id
 * @property int|null $car_engine_id
 * @property int|null $car_development_code_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarDevelopmentCode|null $carDevelopmentCode
 * @property-read \App\Models\CarEngine|null $carEngine
 * @property-read \App\Models\CarModel|null $carModel
 * @property-read \App\Models\CarSize $carSize
 * @property-read \App\Models\CarType $carType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @property-read \App\Models\Client $client
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarDevelopmentCode
 *
 * @property int $id
 * @property string $name
 * @property int $car_size_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarSize $carSize
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarDevelopmentCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarDevelopmentCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarDevelopmentCode query()
 */
	class CarDevelopmentCode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarEngine
 *
 * @property int $id
 * @property string $name
 * @property int $car_size_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarSize $carSize
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarEngine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarEngine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarEngine query()
 */
	class CarEngine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarModel
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel query()
 */
	class CarModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarSize
 *
 * @property int $id
 * @property string $name
 * @property int $car_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarType $carType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarDevelopmentCode[] $developmentCodes
 * @property-read int|null $development_codes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarEngine[] $engines
 * @property-read int|null $engines_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarSize query()
 */
	class CarSize extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarSize[] $carSizes
 * @property-read int|null $car_sizes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Client[] $clients
 * @property-read int|null $clients_count
 * @method static \Illuminate\Database\Eloquent\Builder|CarType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarType query()
 */
	class CarType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SubCategories[] $subCategories
 * @property-read int|null $sub_categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Check
 *
 * @property int $id
 * @property string $check_number
 * @property string $counter_number
 * @property string $chassis_number
 * @property string $plate_number
 * @property string $car_color
 * @property string|null $driver_name
 * @property string $fuel_level
 * @property string $car_status_report
 * @property string|null $car_status_report_note
 * @property string|null $car_images_note
 * @property int $check_status_id 1=>carUnderCheck, 2=>waitingClientResponse, 3=>clientApproved, 4=>carUnderMaintenance, 5=>maintenanceComplete, 6=>carExit
 * @property string $car_type
 * @property string $car_size
 * @property string|null $car_model
 * @property string|null $car_engine
 * @property string|null $car_development_code
 * @property int $client_id
 * @property int $user_id
 * @property int $branch_id
 * @property int|null $car_id
 * @property int|null $engineer_id
 * @property int $client_approved 0=>disabled, 1 =>enabled
 * @property string|null $management_notes
 * @property \Illuminate\Support\Carbon|null $car_exit_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @property-read \App\Models\Car|null $car
 * @property-read \App\Models\CarDevelopmentCode $carDevelopmentCode
 * @property-read \App\Models\CarEngine $carEngine
 * @property-read \App\Models\CarModel $carModel
 * @property-read \App\Models\CarSize $carSize
 * @property-read \App\Models\CarType $carType
 * @property-read \App\Models\CheckStatus $checkStatus
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Engineer|null $engineer
 * @property-read \App\Models\File|null $file
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Images[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\CheckStatus $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Technical[] $technicals
 * @property-read int|null $technicals_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Check checkUserRole()
 * @method static \Illuminate\Database\Eloquent\Builder|Check newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Check newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Check query()
 * @method static \Illuminate\Database\Eloquent\Builder|Check selectBranchUser()
 */
	class Check extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CheckStatus
 *
 * @property int $id
 * @property string $name
 * @property string|null $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CheckStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckStatus query()
 */
	class CheckStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $building_number
 * @property string|null $street_name
 * @property string|null $district
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $vat_number
 * @property float $balance
 * @property string|null $employer
 * @property string|null $other_car
 * @property string|null $how_you_now_us
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarType[] $carTypes
 * @property-read int|null $car_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClientTransaction[] $clientTransactions
 * @property-read int|null $client_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenSaleOrder[] $openSaleOrders
 * @property-read int|null $open_sale_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleOrder[] $saleOrders
 * @property-read int|null $sale_orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClientCollecting
 *
 * @property int $id
 * @property float $amount
 * @property string|null $notes
 * @property string $collecting_date
 * @property int $user_id
 * @property int|null $branch_id
 * @property int $client_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClientTransaction[] $clientTransactions
 * @property-read int|null $client_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCollecting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCollecting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCollecting query()
 */
	class ClientCollecting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClientPayment
 *
 * @property int $id
 * @property float $amount
 * @property string|null $notes
 * @property string $payment_date
 * @property int $user_id
 * @property int|null $branch_id
 * @property int $client_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClientTransaction[] $clientTransactions
 * @property-read int|null $client_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPayment query()
 */
	class ClientPayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClientTransaction
 *
 * @property int $id
 * @property float $total_amount
 * @property float|null $amount_paid
 * @property float|null $amount_due
 * @property string $transaction_date
 * @property int $user_id
 * @property int $client_id
 * @property int|null $sale_order_id
 * @property int|null $client_payment_id
 * @property int|null $client_collecting_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\ClientCollecting|null $clientCollecting
 * @property-read \App\Models\ClientPayment|null $clientPayment
 * @property-read \App\Models\OpenSaleOrder $openSaleOrder
 * @property-read \App\Models\SaleOrder|null $saleOrder
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ClientTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientTransaction query()
 */
	class ClientTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Engineer
 *
 * @property int $id
 * @property string $name
 * @property int $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Check[] $checks
 * @property-read int|null $checks_count
 * @method static \Illuminate\Database\Eloquent\Builder|Engineer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Engineer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Engineer query()
 */
	class Engineer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Expenses
 *
 * @property int $id
 * @property float $amount
 * @property string|null $notes
 * @property string $expenses_date
 * @property string|null $payment_method
 * @property int $expenses_type_id
 * @property int $user_id
 * @property int $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bank[] $banks
 * @property-read int|null $banks_count
 * @property-read \App\Models\Branch $branch
 * @property-read \App\Models\ExpensesType $expensesType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses query()
 */
	class Expenses extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExpensesType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Expenses[] $expenses
 * @property-read int|null $expenses_count
 * @method static \Illuminate\Database\Eloquent\Builder|ExpensesType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpensesType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpensesType query()
 */
	class ExpensesType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\File
 *
 * @property int $id
 * @property string $name
 * @property int $type 2=>device_report_file
 * @property string|null $path
 * @property string $extension
 * @property int $check_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Check $check
 * @property-read mixed $check_files_path
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 */
	class File extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Images
 *
 * @property int $id
 * @property string $image_name
 * @property string $image_path
 * @property int $type 1=>chocks, 2=>device_report, 3=>client_signature_entry, 4=>client_signature_exit
 * @property int $check_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $check_images_path
 * @method static \Illuminate\Database\Eloquent\Builder|Images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images query()
 */
	class Images extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobTitle
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobTitle query()
 */
	class JobTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MoneySafe
 *
 * @property int $id
 * @property float $amount_paid
 * @property float $final_amount
 * @property string|null $notes
 * @property int|null $processType
 * @property int $user_id
 * @property int|null $sale_order_id
 * @property int|null $client_payment_id
 * @property int|null $client_collecting_id
 * @property int|null $expenses_id
 * @property int|null $purchase_order_id
 * @property int|null $supplier_payment_id
 * @property int|null $supplier_collecting_id
 * @property int|null $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \App\Models\ClientCollecting|null $clientCollecting
 * @property-read \App\Models\ClientPayment|null $clientPayment
 * @property-read \App\Models\Expenses|null $expenses
 * @property-read \App\Models\PurchaseOrder|null $purchaseOrder
 * @property-read \App\Models\SaleOrder|null $saleOrder
 * @property-read \App\Models\SupplierCollecting|null $supplierCollecting
 * @property-read \App\Models\SupplierPayment|null $supplierPayment
 * @method static \Illuminate\Database\Eloquent\Builder|MoneySafe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneySafe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoneySafe query()
 */
	class MoneySafe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpenPurchaseOrder
 *
 * @property-read \App\Models\Branch $branch
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseOrderProducts[] $openPurchaseOrderProducts
 * @property-read int|null $open_purchase_order_products_count
 * @property-read \App\Models\Supplier $supplier
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierTransaction[] $supplierTransactions
 * @property-read int|null $supplier_transactions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrder checkUserRole()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrder query()
 */
	class OpenPurchaseOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpenPurchaseOrderProducts
 *
 * @property-read \App\Models\PurchaseOrder $purchaseOrder
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrderProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrderProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenPurchaseOrderProducts query()
 */
	class OpenPurchaseOrderProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpenSaleOrder
 *
 * @property int $id
 * @property string|null $invoice_number
 * @property string $invoice_date
 * @property float $total
 * @property float|null $discount
 * @property float $taxable_amount
 * @property float $total_vat
 * @property float $total_amount_due
 * @property float|null $amount_paid
 * @property float|null $amount_paid_bank
 * @property float $amount_due
 * @property int $user_id
 * @property int $branch_id
 * @property int $client_id
 * @property int $check_id
 * @property string|null $payment_method
 * @property string|null $payment_method_bank
 * @property string|null $payment_receipt_number
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @property-read \App\Models\Check $check
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClientTransaction[] $clientTransactions
 * @property-read int|null $client_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenSaleOrderProducts[] $openSaleOrderProducts
 * @property-read int|null $open_sale_order_products_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrder checkUserRole()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrder query()
 */
	class OpenSaleOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OpenSaleOrderProducts
 *
 * @property int $id
 * @property string $item_code
 * @property string $item_name
 * @property int $item_quantity
 * @property float $item_purchasing_price
 * @property float $item_price
 * @property float $item_amount_taxable
 * @property float|null $item_discount
 * @property int|null $item_discount_type 0=> currency, 1=> percentage
 * @property float|null $item_discount_amount
 * @property float|null $item_sub_total_after_discount
 * @property float $item_tax_amount
 * @property float $item_sub_total
 * @property int $open_sale_order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\OpenSaleOrder $openSaleOrder
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrderProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrderProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OpenSaleOrderProducts query()
 */
	class OpenSaleOrderProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property float $price
 * @property float|null $selling_price
 * @property int $quantity
 * @property int $user_id
 * @property int|null $sub_category_id
 * @property int $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @property-read \App\Models\SubCategories|null $subCategory
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCode
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCode query()
 */
	class ProductCode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseOrder
 *
 * @property int $id
 * @property string|null $invoice_number
 * @property string $invoice_date
 * @property float $total
 * @property float|null $discount
 * @property float $taxable_amount
 * @property float $total_vat
 * @property float $total_amount_due
 * @property float|null $amount_paid
 * @property float|null $amount_paid_bank
 * @property float $amount_due
 * @property int $user_id
 * @property int $branch_id
 * @property int $supplier_id
 * @property string|null $payment_method
 * @property string|null $payment_method_bank
 * @property string|null $payment_receipt_number
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bank[] $banks
 * @property-read int|null $banks_count
 * @property-read \App\Models\Branch $branch
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseOrderProducts[] $purchaseOrderProducts
 * @property-read int|null $purchase_order_products_count
 * @property-read \App\Models\Supplier $supplier
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierTransaction[] $supplierTransactions
 * @property-read int|null $supplier_transactions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrder checkUserRole()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrder query()
 */
	class PurchaseOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseOrderProducts
 *
 * @property int $id
 * @property string $item_code
 * @property string $item_name
 * @property int $item_quantity
 * @property float $item_price
 * @property float $item_amount_taxable
 * @property float|null $item_discount
 * @property int|null $item_discount_type 0=> currency, 1=> percentage
 * @property float $item_tax_amount
 * @property float $item_sub_total
 * @property int $purchase_order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PurchaseOrder $openPurchaseOrder
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrderProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrderProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseOrderProducts query()
 */
	class PurchaseOrderProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Relation_check_technical
 *
 * @property int $id
 * @property int $check_id
 * @property int $technical_id
 * @method static \Illuminate\Database\Eloquent\Builder|Relation_check_technical newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relation_check_technical newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relation_check_technical query()
 */
	class Relation_check_technical extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleOrder
 *
 * @property int $id
 * @property string|null $invoice_number
 * @property string $invoice_date
 * @property float $total
 * @property float|null $discount
 * @property float $taxable_amount
 * @property float $total_vat
 * @property float $total_amount_due
 * @property float|null $amount_paid
 * @property float|null $amount_paid_bank
 * @property float $amount_due
 * @property int $user_id
 * @property int $branch_id
 * @property int $client_id
 * @property int $check_id
 * @property string|null $payment_method
 * @property string|null $payment_method_bank
 * @property string|null $payment_receipt_number
 * @property string|null $notes
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bank[] $banks
 * @property-read int|null $banks_count
 * @property-read \App\Models\Branch $branch
 * @property-read \App\Models\Check $check
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ClientTransaction[] $clientTransactions
 * @property-read int|null $client_transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleOrderProducts[] $saleOrderProducts
 * @property-read int|null $sale_order_products_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrder checkUserRole()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrder query()
 */
	class SaleOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleOrderProducts
 *
 * @property int $id
 * @property string $item_code
 * @property string $item_name
 * @property int $item_quantity
 * @property float $item_purchasing_price
 * @property float $item_price
 * @property float $item_amount_taxable
 * @property float|null $item_discount
 * @property int|null $item_discount_type 0=> currency, 1=> percentage
 * @property float|null $item_discount_amount
 * @property float|null $item_sub_total_after_discount
 * @property float $item_tax_amount
 * @property float $item_sub_total
 * @property int $sale_order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SaleOrder $saleOrder
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrderProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrderProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleOrderProducts query()
 */
	class SaleOrderProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubCategories
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories query()
 */
	class SubCategories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $building_number
 * @property string|null $street_name
 * @property string|null $district
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $vat_number
 * @property float $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenPurchaseOrder[] $openPurchaseOrders
 * @property-read int|null $open_purchase_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PurchaseOrder[] $purchaseOrders
 * @property-read int|null $purchase_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierCollecting[] $supplierCollectings
 * @property-read int|null $supplier_collectings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierPayment[] $supplierPayments
 * @property-read int|null $supplier_payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierTransaction[] $supplierTransactions
 * @property-read int|null $supplier_transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier query()
 */
	class Supplier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupplierCollecting
 *
 * @property int $id
 * @property float $amount
 * @property string|null $notes
 * @property string $collecting_date
 * @property int $user_id
 * @property int|null $branch_id
 * @property int $supplier_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \App\Models\Supplier $supplier
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierTransaction[] $supplierTransactions
 * @property-read int|null $supplier_transactions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCollecting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCollecting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCollecting query()
 */
	class SupplierCollecting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupplierPayment
 *
 * @property int $id
 * @property float $amount
 * @property string|null $notes
 * @property string $payment_date
 * @property int $user_id
 * @property int|null $branch_id
 * @property int $supplier_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch|null $branch
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoneySafe[] $moneySafes
 * @property-read int|null $money_safes_count
 * @property-read \App\Models\Supplier $supplier
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SupplierTransaction[] $supplierTransactions
 * @property-read int|null $supplier_transactions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierPayment query()
 */
	class SupplierPayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupplierTransaction
 *
 * @property int $id
 * @property float $total_amount
 * @property float|null $amount_paid
 * @property float|null $amount_due
 * @property string $transaction_date
 * @property int $user_id
 * @property int $supplier_id
 * @property int|null $purchase_order_id
 * @property int|null $supplier_payment_id
 * @property int|null $supplier_collecting_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\OpenPurchaseOrder $openPurchaseOrder
 * @property-read \App\Models\PurchaseOrder|null $purchaseOrder
 * @property-read \App\Models\Supplier $supplier
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierTransaction query()
 */
	class SupplierTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Technical
 *
 * @property int $id
 * @property string $name
 * @property int $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @method static \Illuminate\Database\Eloquent\Builder|Technical newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technical newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technical query()
 * @method static \Illuminate\Database\Eloquent\Builder|Technical spicColumn()
 */
	class Technical extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $image_path
 * @property string $image_name
 * @property int $role_id
 * @property int|null $branch_id
 * @property int|null $job_title_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Expenses[] $expenses
 * @property-read int|null $expenses_count
 * @property-read mixed $profile_picture_path
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenPurchaseOrder[] $openPurchaseOrders
 * @property-read int|null $open_purchase_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OpenSaleOrder[] $openSaleOrders
 * @property-read int|null $open_sale_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SaleOrder[] $saleOrders
 * @property-read int|null $sale_orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User orWherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 */
	class User extends \Eloquent {}
}

