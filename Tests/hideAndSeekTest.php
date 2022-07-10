<?php

use App\HideAndSeek;

test("should return all lowercase letters", function () {
    $hideAndSeek = new HideAndSeek();
    expect($hideAndSeek->seek("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect($hideAndSeek->seek("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect($hideAndSeek->seek("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});