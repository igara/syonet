<?php

namespace App\Http\Services\Contents\It\Event;

/**
 * ConnpassEventService.
 *
 * ConnpassEventを扱うService
 */
class ConnpassEventService
{
    /**
     * Create a new instance.
     */
    public function __construct()
    {
    }
    
    /**
     * ConnpassAPIにリクエストするURLの生成
     * @param リクエストパラム
     * @return string ConnpassAPIにリクエストするURL
     */
    private function _createRequestConnpassApiUrl($param) {
        $year = $param['year'];
        $month = $param['month'];
        $count = $param['count'];
        $firstMonth = date("$year-$month-01");
        $lastMonth = date("$year-$month-t");

        return "http://connpass.com/api/v1/event/?keyword=python";
    }

    /**
     * 今年の年数字を取得
     * 
     * @param array $param リクエストパラメータ
     * @return string 今年
     */
    public function getYear($param) {
        if (isset($param['year']) && is_numeric($param['year'])){
            return $param['year'];
        }
        return date('Y');
    }
    /**
     * 今月の月数字を取得
     * 
     * @param array $param リクエストパラメータ
     * @return string 今月
     */
    public function getMonth($param) {
        if (isset($param['month']) && is_numeric($param['month'])){
            return $param['month'];
        }
        return date('m');
    }

    /**
     * connpassのAPIからJSONを取得する.
     * 
     * @param array リクエストパラム
     * @return array connpassのイベントを取得
     */
    public function getConnpassApiOneMonthEventJson($param)
    {   
        $context = stream_context_create([
           'http' => array('ignore_errors' => true)
        ]);
        $response = file_get_contents(
            $this->_createRequestConnpassApiUrl($param),
            false,
            $context
        );

        // ステータスコードを取得する
        preg_match(
            '/HTTP\/1\.[0|1|x] ([0-9]{3})/',
            $http_response_header[0],
            $matches
        );
        $status_code = $matches[1];
        
        // APIのデータ取得用変数
        $eventData = [];

        switch ($status_code) {
            case '200':
                // JSONファイルは配列に変換しておく
                $jsonData = mb_convert_encoding($response, 'UTF8', 'auto');
                $eventData = json_decode($jsonData, true);
                break;
            case '403';
                // 403の場合
                $eventData = [
                    'status' => '403'
                ];
                break;
            case '404':
                // 404の場合
                $eventData = [
                    'status' => '404'
                ];
                break;
            default:
                $eventData = [
                    'status' => 'error'
                ];
                break;
        }
        return $eventData;
    }
}
