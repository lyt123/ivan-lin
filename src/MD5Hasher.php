<?php
/* User:lyt123; Date:2017/4/20; QQ:1067081452 */

namespace Ivanlin\Hasher;

class MD5Hasher
{
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value . $salt);
    }

    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value . $salt) === $hashValue;
    }
}