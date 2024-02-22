<?php

class MToken {
    private static $tokens = array();

    public static function generateToken($user) {
        $maxTokens = 10;

        if (!isset(self::$tokens[$user])) {
            self::$tokens[$user] = array();
        }
        $token = bin2hex(random_bytes(16));
        array_push(self::$tokens[$user], $token);

        if (count(self::$tokens[$user]) > $maxTokens) {
            array_shift(self::$tokens[$user]);
        }

        return $token;
    }

    public static function verifyToken($user, $token) {
        if (isset(self::$tokens[$user])) {
            $index = array_search($token, self::$tokens[$user]);

            if ($index !== false) {
                unset(self::$tokens[$user][$index]);
                return true;
            }
        }

        return false;
    }
}

$user = "testing_user";

$token1 = MToken::generateToken($user);
$token2 = MToken::generateToken($user);

echo "Token 1: $token1<br>";
echo "Token 2: $token2<br>";

$verification1 = MToken::verifyToken($user, $token1);
$verification2 = MToken::verifyToken($user, $token2);

echo "Verification Token 1: " . ($verification1 ? "Success" : "Failed") . "<br>";
echo "Verification Token 2: " . ($verification2 ? "Success" : "Failed") . "<br>";

?>
