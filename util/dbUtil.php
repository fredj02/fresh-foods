<?php
    class DbUtil {
        /**
         * @return the hardcoded password string to frederick's
         */
        public static function getMyPwd($whosDb = "") {
            if ($whosDb == "" || $whosDb == "Shyam")
                return "";
            else if ($whosDb == "Fred")
                return "FPJ@mysql";
        }
    }

?>