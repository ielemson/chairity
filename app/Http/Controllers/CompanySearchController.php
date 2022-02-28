<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanySearchController extends Controller
{
    
    

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('company_locations')
         ->where('country', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('state', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('company_locations')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <div class="col-md-6 col-lg-4">
        <div class="xs-contact-details">
            <div class="xs-widnow-wraper">
                <div class="xs-window-top">
                    <img class="location_image" src="/assets/image/location/'.$row->picture.'" alt="'.$row->country.'">
                </div>
               
            </div>

            <ul class="xs-unorder-list">
                <li>
                    <i class="fa fa-phone color-green"></i>'.$row->phone.'</li>
                <li>
                    <i class="fa fa-envelope-o color-green"></i>
                    <a href="" class="__cf_email__" >'.$row->email.'</a>
                </li>
                <li>
                    <i class="fa fa-map-marker color-green"></i>'.$row->country.' , '.$row->state.' , '.$row->address.'</li>
            </ul>
        </div>

    </div>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'company_data'  => $output,
       'total_data'  => $total_row
      );

    //   echo json_encode($data);
    return Response($data);
     }
    }


}
