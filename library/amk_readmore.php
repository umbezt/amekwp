<?php

    /*
     * Read More function. For displaying a substring of the content if author
     * did not add read more in editor
     */

    function amk_readmore($len = 100, $txt = 'Read More')
    {
        $the_text = get_the_content();
        $short_text = substr($the_text, 0, $len);
        // strip line breaks
        $short_text = str_replace('<br />', '', $short_text);
        echo $short_text . '... <a href="' . get_permalink() . '">' . $txt . '</a>';
    }