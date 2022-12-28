<?php

namespace Foo\CodingStandard;

class Foo
{
    /**
     * @param string $variable
     *
     * @return bool
     */
    public function bar(string $variable): bool
    {
        return $variable !== '';
    }

    /**
     * @param list<int> $list
     *
     * @return bool
     */
    public function baz(array $list): bool
    {
        return count($list) > 0;
    }

    /**
     * @param int $one
     * @param list<int> $two
     * @param string $three
     * @param string $regex This is a description of the regex pattern
     *
     * @return bool
     */
    public function mix(
        $one,
        array $two,
        string $three,
        string $regex,
    ): bool {
        return true;
    }
}
