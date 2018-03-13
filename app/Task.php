<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $serial_no;
    protected $date;
    protected $receive_date;
    protected $paper_hndlr;
    protected $name;
    protected $desc;
    protected $notes;

}
