<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/3
 * Time: 下午2:17
 */

namespace App\Support\Clients\Kong;


trait PluginTrait
{
    /**
     * @desc   新增插件
     * @author xl
     * @param $params
     * @return mixed
     */
    public function addPlugin($params)
    {
        return $this->post("/plugins/", [
            'json' => $params,
        ]);
    }

    /**
     * 获取插件详情
     * @author xl
     * @param $id
     * @return mixed
     */
    public function getPlugin($id)
    {
        return $this->get("/plugins/{$id}");
    }

    /**
     * 修改插件
     * @author xl
     * @param $id
     * @param $params
     * @return mixed
     */
    public function updatePlugins($id, $params)
    {
        return $this->patch("/plugins/{$id}", [
            'json' => $params,
        ]);
    }

    /**
     * @desc   插件列表
     * @author xl
     * @param $params
     * @return mixed
     */
    public function plugins($params = [])
    {
        return $this->get('/plugins/', [
            'json' => $params,
        ]);
    }

    /**
     * @desc   删除插件
     * @author xl
     * @param $idOrName
     * @return mixed
     */
    public function deletePlugins($idOrName)
    {
        return $this->delete("/plugins/{$idOrName}");
    }

    /**
     * @desc   启动插件
     * @author xl
     * @return mixed
     */
    public function pluginsEnabled()
    {
        return $this->get('/plugins/enabled');
    }
}