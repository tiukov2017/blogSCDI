<?php

namespace resources\views;

use App\Post;

class testFunction
{


    public function mySortArr (Post $bloqs)
    {
        foreach($bloqs as $post)
        {
            $wordCount = 0;
            $words = str_word_count($post->body, 1);

            foreach ($words as $word) {
                if ($word != '') {
                    $wordCount++;

                    if (empty($arr[$word])) $arr[$word] = 1;
                    else $arr[$word]++;
                }
            }

        }
            arsort($arr);
            $top=array_slice($arr,0,10);
            $i=0;

        return $top;
    }
}

