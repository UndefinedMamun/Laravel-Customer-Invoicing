<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter {
  protected $safeParms = [
    'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    'customerId' => ['eq'],
    'status' => ['eq', 'ne'],
    'billedDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    'paidDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
  ];
  protected $safeColumnMap = [
    'billedDate' => 'billed_date',
    'paidDate' => 'paid_date',
    'customerId' => 'customer_id'
  ];
  protected $operatorMap = [
    'eq' => '=',
    'gt' => '>',
    'gte' => '>=',
    'lt' => '<',
    'lte' => '<=',
    'ne' => '!=',
  ];
}