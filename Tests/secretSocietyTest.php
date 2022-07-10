<?php

use App\SecretSociety;

test("should return a string of first letters from array items", function () {
    $secretSociety = New SecretSociety();
    expect($secretSociety->name(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
    expect($secretSociety->name(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
    expect($secretSociety->name(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
});