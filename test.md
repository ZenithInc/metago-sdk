帮我实现业绩页面（`src/views/contracts/performance/index.vue`）的表格上方，除了【设定业绩目标】和【批量设定业绩目标】按钮以外，增加一个【删除】的按钮并实现批量删除的功能：

1. 表格的第一列为多选框；
2. 用户通过第一列选择多条记录，然后点击表格右上方的【删除】按钮，可以实现删除多条记录的功能；
3. 批量删除采用循环调用删除接口，删除接口可以参考每一行中的操作列中的删除按钮的实现；
4. 没有选中的时候，删除按钮可以置灰，不可以跨页选择；

在 `app/Http/Controllers/Users/EmployeeController.php` 控制器中新增一个接口，这个接口用来获取销售部门的员工的 options, 可以参考 `\App\Http\Controllers\Users\EmployeeController::queryOptions` 这个接口的实现，不同的是这个接口是所有员工的，而我现在新增的接口是销售部门下的所有员工。

1. 销售部门的 ID 可以通过  `\App\Logic\Impls\Common\SystemStatusLogic::get` 这个方法传入 `\App\Enums\SystemStatusKey::SALES_DEPARTMENT_ID` 来获取；
2. 要获取的是整个销售部门包括下级部门的员工，可以调用 `\App\Logic\Interfaces\Org\IDepartmentLogic::querySubDepartmentEmployeesIds` 这个方法，但是这个方法是传入 `userId` 然后，查出 `userId` 所在部门的 path，然后在查出下级部门的用户，不能直接使用这个方法，要参考这个方法，在 DepartmentLogic 中新增一个方法查询给定部门 ID 的子部门的员工信息。

在 `\App\Http\Controllers\Contracts\SalesTargetController` 控制器中，除了删除接口外，其他的接口都需要新增一个字段，销售毛利目标：

1. 创建的时候，除了已有的销售额目标外，还要增加销售毛利目标；
2. 读取列表的时候，也需要返回新增的这个字段；

帮我实现业绩页面（`src/views/contracts/performance/index.vue`）中：

1. 表格增加了一列，销售毛利率目标（`gross_profit_margin_target`）；
2. 创建和批量创建也需要将这个字段加上，其中批量创建需要和用户、销售额目标加在同一行；