<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opencensus/proto/metrics/v1/metrics.proto

namespace GPBMetadata\Opencensus\Proto\Metrics\V1;

class Metrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Opencensus\Proto\Resource\V1\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af7130a296f70656e63656e7375732f70726f746f2f6d6574726963732f" .
            "76312f6d6574726963732e70726f746f121b6f70656e63656e7375732e70" .
            "726f746f2e6d6574726963732e76311a1e676f6f676c652f70726f746f62" .
            "75662f77726170706572732e70726f746f1a2b6f70656e63656e7375732f" .
            "70726f746f2f7265736f757263652f76312f7265736f757263652e70726f" .
            "746f22c9010a064d657472696312480a116d65747269635f646573637269" .
            "70746f7218012001280b322d2e6f70656e63656e7375732e70726f746f2e" .
            "6d6574726963732e76312e4d657472696344657363726970746f72123b0a" .
            "0a74696d6573657269657318022003280b32272e6f70656e63656e737573" .
            "2e70726f746f2e6d6574726963732e76312e54696d655365726965731238" .
            "0a087265736f7572636518032001280b32262e6f70656e63656e7375732e" .
            "70726f746f2e7265736f757263652e76312e5265736f7572636522ec020a" .
            "104d657472696344657363726970746f72120c0a046e616d651801200128" .
            "0912130a0b6465736372697074696f6e180220012809120c0a04756e6974" .
            "18032001280912400a047479706518042001280e32322e6f70656e63656e" .
            "7375732e70726f746f2e6d6574726963732e76312e4d6574726963446573" .
            "63726970746f722e5479706512390a0a6c6162656c5f6b65797318052003" .
            "280b32252e6f70656e63656e7375732e70726f746f2e6d6574726963732e" .
            "76312e4c6162656c4b657922a9010a0454797065120f0a0b554e53504543" .
            "49464945441000120f0a0b47415547455f494e543634100112100a0c4741" .
            "5547455f444f55424c45100212160a1247415547455f4449535452494255" .
            "54494f4e100312140a1043554d554c41544956455f494e54363410041215" .
            "0a1143554d554c41544956455f444f55424c451005121b0a1743554d554c" .
            "41544956455f444953545249425554494f4e1006120b0a0753554d4d4152" .
            "591007222c0a084c6162656c4b6579120b0a036b65791801200128091213" .
            "0a0b6465736372697074696f6e18022001280922b4010a0a54696d655365" .
            "7269657312330a0f73746172745f74696d657374616d7018012001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70123d0a" .
            "0c6c6162656c5f76616c75657318022003280b32272e6f70656e63656e73" .
            "75732e70726f746f2e6d6574726963732e76312e4c6162656c56616c7565" .
            "12320a06706f696e747318032003280b32222e6f70656e63656e7375732e" .
            "70726f746f2e6d6574726963732e76312e506f696e74222e0a0a4c616265" .
            "6c56616c7565120d0a0576616c756518012001280912110a096861735f76" .
            "616c75651802200128082280020a05506f696e74122d0a0974696d657374" .
            "616d7018012001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d7012150a0b696e7436345f76616c75651802200128034800" .
            "12160a0c646f75626c655f76616c75651803200128014800124c0a126469" .
            "73747269627574696f6e5f76616c756518042001280b322e2e6f70656e63" .
            "656e7375732e70726f746f2e6d6574726963732e76312e44697374726962" .
            "7574696f6e56616c7565480012420a0d73756d6d6172795f76616c756518" .
            "052001280b32292e6f70656e63656e7375732e70726f746f2e6d65747269" .
            "63732e76312e53756d6d61727956616c7565480042070a0576616c756522" .
            "c2050a11446973747269627574696f6e56616c7565120d0a05636f756e74" .
            "180120012803120b0a0373756d18022001280112200a1873756d5f6f665f" .
            "737175617265645f646576696174696f6e18032001280112540a0e627563" .
            "6b65745f6f7074696f6e7318042001280b323c2e6f70656e63656e737573" .
            "2e70726f746f2e6d6574726963732e76312e446973747269627574696f6e" .
            "56616c75652e4275636b65744f7074696f6e7312460a076275636b657473" .
            "18052003280b32352e6f70656e63656e7375732e70726f746f2e6d657472" .
            "6963732e76312e446973747269627574696f6e56616c75652e4275636b65" .
            "741a8e010a0d4275636b65744f7074696f6e7312590a086578706c696369" .
            "7418012001280b32452e6f70656e63656e7375732e70726f746f2e6d6574" .
            "726963732e76312e446973747269627574696f6e56616c75652e4275636b" .
            "65744f7074696f6e732e4578706c6963697448001a1a0a084578706c6963" .
            "6974120e0a06626f756e647318012003280142060a04747970651a620a06" .
            "4275636b6574120d0a05636f756e7418012001280312490a086578656d70" .
            "6c617218022001280b32372e6f70656e63656e7375732e70726f746f2e6d" .
            "6574726963732e76312e446973747269627574696f6e56616c75652e4578" .
            "656d706c61721adb010a084578656d706c6172120d0a0576616c75651801" .
            "20012801122d0a0974696d657374616d7018022001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d70125d0a0b6174746163" .
            "686d656e747318032003280b32482e6f70656e63656e7375732e70726f74" .
            "6f2e6d6574726963732e76312e446973747269627574696f6e56616c7565" .
            "2e4578656d706c61722e4174746163686d656e7473456e7472791a320a10" .
            "4174746163686d656e7473456e747279120b0a036b657918012001280912" .
            "0d0a0576616c75651802200128093a02380122a8030a0c53756d6d617279" .
            "56616c7565122a0a05636f756e7418012001280b321b2e676f6f676c652e" .
            "70726f746f6275662e496e74363456616c756512290a0373756d18022001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512440a08736e617073686f7418032001280b32322e6f70656e63656e" .
            "7375732e70726f746f2e6d6574726963732e76312e53756d6d6172795661" .
            "6c75652e536e617073686f741afa010a08536e617073686f74122a0a0563" .
            "6f756e7418012001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c756512290a0373756d18022001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c7565125f0a1170657263" .
            "656e74696c655f76616c75657318032003280b32442e6f70656e63656e73" .
            "75732e70726f746f2e6d6574726963732e76312e53756d6d61727956616c" .
            "75652e536e617073686f742e56616c7565417450657263656e74696c651a" .
            "360a1156616c7565417450657263656e74696c6512120a0a70657263656e" .
            "74696c65180120012801120d0a0576616c75651802200128014294010a1e" .
            "696f2e6f70656e63656e7375732e70726f746f2e6d6574726963732e7631" .
            "420c4d65747269637350726f746f50015a446769746875622e636f6d2f63" .
            "656e7375732d696e737472756d656e746174696f6e2f6f70656e63656e73" .
            "75732d70726f746f2f67656e2d676f2f6d6574726963732f7631ea021b4f" .
            "70656e43656e7375732e50726f746f2e4d6574726963732e563162067072" .
            "6f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

