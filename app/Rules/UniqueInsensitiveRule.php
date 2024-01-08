<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueInsensitiveRule implements ValidationRule
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table;

    /**
     * The column name.
     *
     * @var string
     */
    protected $column;

    /**
     * Create a new rule instance.
     *
     * @param  string  $table
     * @param  string  $column
     * @return void
     */
    public function __construct($table, $column)
    {
        $this->table = $table;
        $this->column = $column;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $count = DB::table($this->table)
                ->whereRaw('LOWER(' . $this->column . ') = LOWER(?)', [$value])
                ->count();

        if($count > 0)
            $fail("Data sudah ada");
    }
}
