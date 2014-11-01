<?php

	class Moko
	{

        public static function translate($string = null)
		{
            $json_file = file_get_contents(__DIR__.'/translate.json');

            $json_data = json_decode($json_file);

            foreach($json_data as $key => $word){
                $string = str_replace($key,$word,$string);
            }

            $string.='やで';

            return $string;
		}

	}



