<?php
namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
  protected $safeParms = [];
  protected $safeColumnMap = [];
  protected $operatorMap = [];

  public function transformation(Request $request) {
    $eloQuery = [];

    foreach($this->safeParms as $parm => $operators) {
      $query = $request->query($parm);

      if(!isset($query)) {
        continue;
      }

      $column = $this->safeColumnMap[$parm] ?? $parm;
      foreach($operators as $operator) {
        if(isset($query[$operator])) {
          $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
        }
      }

    }

    return $eloQuery;
  }
}