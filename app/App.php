<?php

namespace App;

use Grpc\ChannelCredentials;
use Services\Base\HelloWorld\HelloWorldRequest;

/**
 * grpc请求案例
 */
class App
{
    public $client;

    public static function run()
    {
        (new self())->grpc()->Main();
    }

    public function grpc()
    {
        $this->client = $this->client();
        return $this;
    }

    public function client()
    {
        return new \Services\Base\HelloWorld\HelloWorldServiceClient('127.0.0.1:8000', [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }

    public function Main()
    {
        $request = new HelloWorldRequest();
        $request->setName("梓晨博客");
        $get = $this->client->Demo($request)->wait();
        list($reply, $status) = $get;
        if($status->code === 0) {
        print_r($reply->getMessage());
        }
        echo '获取返回内容失败';
    }

}