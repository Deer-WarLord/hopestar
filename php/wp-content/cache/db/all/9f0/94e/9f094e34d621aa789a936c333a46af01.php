dZ�Y<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:282:"SELECT links.custom_link_id, links.text, links.image_url, urls.url
      FROM wp_book_review_custom_links AS links
      LEFT OUTER JOIN wp_book_review_custom_link_urls AS urls ON links.custom_link_id = urls.custom_link_id
        AND urls.post_id = 333
      WHERE links.active = 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":4:{s:14:"custom_link_id";s:1:"1";s:4:"text";s:14:"Скачать";s:9:"image_url";s:0:"";s:3:"url";s:77:"https://drive.google.com/file/d/0B4NHGLWj9ydaWVA3MXNEMDVDYzA/view?usp=sharing";}}s:8:"col_info";a:4:{i:0;O:8:"stdClass":13:{s:4:"name";s:14:"custom_link_id";s:5:"table";s:5:"links";s:3:"def";s:0:"";s:10:"max_length";i:77;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"text";s:5:"table";s:5:"links";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"image_url";s:5:"table";s:5:"links";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:3:"url";s:5:"table";s:4:"urls";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}