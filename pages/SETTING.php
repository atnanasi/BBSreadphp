<?php
echo mb_convert_encoding(file_get_contents($BoardPath."/".$BoardID."/SETTING.TXT" ,true), "SJIS", "UTF-8");
