<?php
namespace Ydalbj\Ocr;

use Illuminate\Support\Facades\Facade;

class OcrFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        // todo 已在OrcServiceProvider注册,但报错未找到OcrManage类,暂时用类名
        // return 'OcrManager';
        return OcrManager::class;
    }
}
