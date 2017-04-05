<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 05-Apr-17
 * Time: 2:52 PM
 */

class ObjectAssembler
{
    private $components = [];

    /**
     * ObjectAssembler constructor.
     * @param array $components
     */
    public function __construct(string $conf)
    {
        $this->configure($conf);
    }

    private function configure(string $conf)
    {
        $data = simplexml_load_file($conf);
        foreach ($data->class as $class) {
            $args = [];
            $name = (string)$class['name'];
            foreach ($class->arg as $arg) {
                $argclass = (string)$arg['inst'];
                $args[(int)$arg['num']] = $argclass;
            }
            ksort($args);
            $this->components[$name] = function () use ($name, $args) {
                $expandedargs = [];
                foreach ($args as $arg) {
                    $expandedargs[] = new $arg();
                }
                $rclass = new \ReflectionClass($name);
                return $rclass->newInstanceArgs($expandedargs);
            };
        }
    }

    public function getComponent(string $class)
    {
        if (!isset($this->components[$class])) {
            throw new \Exception("unknown component '$class''");
        }
        $ret = $this->components[$class]();
        return $ret;
    }
}