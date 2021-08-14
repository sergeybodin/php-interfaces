<?php

try {
    if (!false) {
        throw new Error('E001');
    }
} catch (Error $e) {
    echo 'Выброшена ошибка: ', $e->getMessage(), "\n";
} finally {
    try {
        if (true) {
            throw new Exception('E002');
        }
    } catch (Exception $e) {
        echo 'Выброшено исключение: ', $e->getMessage(), "\n";
    }
}