<?php

function sortColumn($field, $column, $direction){
    if ($field === $column) {
            return $direction = $direction === 'asc' ? 'desc' : 'asc';
        } else {
            $column = $field;
            $direction = 'asc';
        }
}