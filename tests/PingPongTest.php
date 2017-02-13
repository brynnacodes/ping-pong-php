<?php

    require_once 'src/PingPong.php';

    class PingPongedTest extends PHPUnit_Framework_TestCase
    {
        function test_pingPongify_firstTest()
        {
            $input = 2;
            $test_PingPongedTest = new PingPonged($input);
            $result = $test_PingPongedTest->pingPongify($input);
            $this->assertEquals([1, 2], $result);
        }

        function test_pingPongify_secondTest()
        {
            $input = 3;
            $test_PingPongedTest = new PingPonged($input);
            $result = $test_PingPongedTest->pingPongify($input);
            $this->assertEquals([1, 2, "ping"], $result);
        }

        function test_pingPongify_thirdTest()
        {
            $input = 5;
            $test_PingPongedTest = new PingPonged($input);
            $result = $test_PingPongedTest->pingPongify($input);
            $this->assertEquals([1, 2, "ping", 4, "pong"], $result);
        }

        function test_pingPongify_fourthTest()
        {
            $input = 15;
            $test_PingPongedTest = new PingPonged($input);
            $result = $test_PingPongedTest->pingPongify($input);
            $this->assertEquals([1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "ping pong"], $result);
        }
    }
?>
