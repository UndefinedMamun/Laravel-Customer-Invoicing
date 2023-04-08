<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter {
  protected $safeParms = [
    'name' => ['eq'],
    'type' => ['eq'],
    'email' => ['eq'],
    'address' => ['eq'],
    'city' => ['eq'],
    'state' => ['eq'],
    'postalCode' => ['eq', 'gt', 'lt'],
  ];
  protected $safeColumnMap = [
    'postalCode' => 'postal_code'
  ];
  protected $operatorMap = [
    'eq' => '=',
    'gt' => '>',
    'gte' => '>=',
    'lt' => '<',
    'lte' => '<=',
  ];
}