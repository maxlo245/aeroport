<?php

test('example test', function () {
    expect(true)->toBeTrue();
});

test('database connection config exists', function () {
    expect(file_exists(__DIR__ . '/../config/db.php'))->toBeTrue();
});
