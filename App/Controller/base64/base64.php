<?php
    function encodeText($text) {
        return base64_encode($text);
    }

    function decodeText($encodedText) {
        return base64_decode($encodedText);
    }
?>