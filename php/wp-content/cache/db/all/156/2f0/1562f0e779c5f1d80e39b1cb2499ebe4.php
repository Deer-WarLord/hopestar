"QÔY<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:313:"SELECT
				`wp_cptch_images`.`name` AS `file`,
				`wp_cptch_packages`.`folder` AS `folder`
			FROM
				`wp_cptch_images`
			LEFT JOIN
				`wp_cptch_packages`
			ON
				`wp_cptch_packages`.`id`=`wp_cptch_images`.`package_id`
			WHERE
				`wp_cptch_images`.`package_id` =3
				AND
				`wp_cptch_images`.`number`=1;";s:11:"last_result";a:1:{i:0;O:8:"stdClass":2:{s:4:"file";s:5:"1.png";s:6:"folder";s:9:"arabic_bw";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:4:"file";s:5:"table";s:15:"wp_cptch_images";s:3:"def";s:0:"";s:10:"max_length";i:9;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:6:"folder";s:5:"table";s:17:"wp_cptch_packages";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}