<?php

namespace TheOpenEyes\SortAssociativeArray;

class SortAssociativeArray
{
    public static function column($array, $column, $dir = SORT_ASC)
    {
        $sort_col = array();
		foreach ($array as $key => $row) {
			$sort_col[$key] = $row[$column];
		}
		array_multisort($sort_col, $dir, $array);
		return $array;
    }
	
	public static function columnWithChild($array, $column, $child_column, $dir = SORT_ASC)
    {
        $sort_col = array();
		foreach ($array as $key => $row) {  
			$sort_col[$key] = $row[$column][$child_column];
		}
		array_multisort($sort_col, $dir, $array);
		return $array;
    }
}
