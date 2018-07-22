<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/7/7
 * Time: 下午8:16
 */

namespace App\Kong\Client\Kong\Plugins\Traits;

use App\Kong\Client\Kong\Plugins\Form\UploadForm;
use App\Kong\Client\Kong\Plugins\Request\UploadRequest;
use App\Kong\Client\Kong\Plugins\Response\UploadResponse;
use App\Kong\Manager\Kong;
use App\Src\Basic\Filter;

trait UploadTraits
{
    /**
     * @param Filter $filter
     * @param UploadForm $form
     * @param UploadRequest $request
     * @param UploadResponse $response
     * @param Kong $manager
     * @return mixed
     */
    public function upload(Filter $filter, UploadForm $form, UploadRequest $request, UploadResponse $response, Kong $manager)
    {
        return $this->run($filter, $form, $request, $response, $manager);
    }
}