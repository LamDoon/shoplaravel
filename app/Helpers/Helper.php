<?php


namespace App\Helpers;


class Helper
{

    public function menu($menus, $parent_id = 0, $char = ''){
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id){
                $html .= '
                 <tr class="even pointer">
                      <td class=" ">'. $menu->id .'</td>
                      <td class=" ">'. $char . $menu->name .'</td>
                      <td class=" ">'. self::active($menu->active)  .'</td>
                      <td class=" ">'. $menu->updated_at .'</td>
                      <td class=" " style="width: 120px;">
                          <a class="btn btn-info" href="/admin/menus/edit/'.$menu->id.'">
                             <i class="fa fa-edit"></i>
                          </a>
                          <a class="btn btn-danger" href="#" onclick="removeRow('.$menu->id.',\'/admin/menus/destroy\')">
                             <i class="fa fa-trash"></i>
                          </a>
                      </td>
                 </tr>';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char .'|--');
            }
        }
        return $html;
    }

    public static function active($active = 0){
        return $active ==0 ? '<span style="font-size: 13px;" class="btn btn-round btn-danger">NO</span>'
            : '<span style="font-size: 13px;" class="btn btn-round btn-success">YES</span>';
    }
}
