<?php
/**
 * Created by PhpStorm.
 * User: code
 * Date: 2017/9/13
 * Time: 下午4:22
 */

namespace Modules\Admin\Controllers;

use Modules\Admin\Facades\AdminHelper;

class HomeController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return admin_view("index");
    }

}