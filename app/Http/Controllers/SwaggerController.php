<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/swager",
     *     summary="测试列表写法",
     *     tags={"swager测试"},
     *     description="用户资料列表",
     *     operationId="user.index",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="page",
     *         in="query",
     *         description="分页编号,默认1",
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         name="pagesize",
     *         in="query",
     *         description="每页显示条数,默认10",
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="用户列表",
     *         @SWG\Schema(
     *            type="json",
     *            @SWG\Property(
     *                  property="pages",
     *                  @SWG\Property(
     *                     property="totalnum",
     *                     type="integer",
     *                     description="记录总数",
     *                 ),
     *                 @SWG\Property(
     *                     property="totalpage",
     *                     type="integer",
     *                     description="总页数",
     *                 ),
     *                 @SWG\Property(
     *                     property="pagesize",
     *                     type="integer",
     *                     description="每页显示记录数",
     *                 ),
     *                 @SWG\Property(
     *                     property="page",
     *                     type="integer",
     *                     description="当前页数",
     *                 ),
     *            ),
     *            @SWG\Property(
     *               property="lists",
     *               @SWG\Items(
     *                  @SWG\Property(
     *                     property="id",
     *                     type="integer",
     *                     description="id",
     *                  ),
     *                  @SWG\Property(
     *                     property="source",
     *                     type="string",
     *                     description="数据来源",
     *                  ),
     *                  @SWG\Property(
     *                     property="industry_no",
     *                     type="integer",
     *                     description="行业编号",
     *                  ),
     *                  @SWG\Property(
     *                     property="channel_id",
     *                     type="integer",
     *                     description="渠道id",
     *                  ),
     *                  @SWG\Property(
     *                     property="name",
     *                     type="string",
     *                     description="名称",
     *                  ),
     *              )
     *            ),
     *         ),
     *     ),
     *     @SWG\Response(
     *         response=422,
     *         description="error",
     *     )
     * )
     */
    public function index(Request $request)
    {
        $data = [
            'name' => 'xiaolin',
            'email' => '462441355@qq.com'
        ];

        return api_response($data);
    }
}
