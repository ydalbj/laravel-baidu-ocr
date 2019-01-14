<?php
namespace Ydalbj\Ocr;

require_once('baidu/AipOcr.php');

class OcrManager
{
    /**
     * AipOcr
     */
    private $client;

    /**
     * 构造函数
     */
    public function __construct()
    {
        $cfg = config('baidu.ocr.auth');
        $this->client = new \AipOcr($cfg['id'], $cfg['key'], $cfg['secret'], $cfg['file_path']);
    }

    /**
     * 通用文字识别, 图片参数为远程url图
     * @param string $url
     * @param array $options
     * @return array 识别结果
     */
    public function basicGeneralUrl(string $url, array $options = [])
    {
        return $this->client->basicGeneralUrl($url, $options);
    }
}
