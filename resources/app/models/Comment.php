<?php

class Comment extends Eloquent {
    public static function findBy($field, $value) {
        $result = DB::table('comments')
                ->where($field, $value)->get();
        return $result;
    }
}