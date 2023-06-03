<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Services\Base\HelloWorld;

/**
 */
class HelloWorldServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Services\Base\HelloWorld\HelloWorldRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Demo(\Services\Base\HelloWorld\HelloWorldRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Services.Base.HelloWorld.HelloWorldService/Demo',
        $argument,
        ['\Services\Base\HelloWorld\HelloWorldResponse', 'decode'],
        $metadata, $options);
    }

}
