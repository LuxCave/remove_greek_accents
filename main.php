if (!function_exists('remove_greek_accents')) {
    function remove_greek_accents($str)
    {
        $unwanted_array = array('Ά' => 'Α', 'ά' => 'α', 'Έ' => 'Ε', 'έ' => 'ε', 'Ή' => 'Η', 'ή' => 'η', 'Ί' => 'Ι', 'ί' => 'ι', 'Ό' => 'Ο', 'ό' => 'ο', 'Ύ' => 'Υ', 'ύ' => 'υ', 'Ώ' => 'Ω', 'ώ' => 'ω');
        $str = strtr($str, $unwanted_array);
        return $str;
    }
