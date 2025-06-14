<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LeaveController;
use App\Models\User;
use App\Models\Receipt;
use App\Models\Building;
use App\Models\Service;
use App\Models\RoomHasService;
use App\Models\Floor;
use App\Models\Room;
use App\Models\Branch;
use App\Models\Renter;
use App\Models\Province;
use App\Models\District;
use App\Models\Subdistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

DB::beginTransaction();

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($receipt_id)
    {
        $data['receipt'] = Receipt::find($receipt_id);

        return view('pdf/index', $data);
    }
    
    public function receipt($receipt_id)
    {
        $receipt = Receipt::find($receipt_id);
        $data['receipt'] = $receipt;
        $data['branch'] = Branch::find(session("branch_id"));
        $data['renter'] = Renter::find($receipt->ref_renter_id);
        $data['amount_thai'] = $this->convertToThaiBaht($receipt->amount);

        return view('pdf/index', $data);
    }
    // public function receipt()
    // {

    //     $html = view('pdf/receipt')->render();

    //     // $pdf = new \Mpdf\Mpdf();
    //     $pdf = new \Mpdf\Mpdf([
    //         'default_font_size' => 10,
    //         'default_font' => 'sarabun',
    //         'margin_top' => 3,
    //         'margin_left' => 3
    //     ]);
    //     $pdf->autoScriptToLang = true;
    //     $pdf->autoLangToFont = true;
    //     $pdf->WriteHTML($html);
    //     $pdf->Output();
    // }
    private function convertToThaiBaht($number)
    {
        $number = number_format($number, 2, '.', '');
        [$int, $dec] = explode('.', $number);

        $result = $this->readThaiNumber($int) . 'บาท';

        if ($dec == '00') {
            $result .= 'ถ้วน';
        } else {
            $result .= $this->readThaiNumber($dec) . 'สตางค์';
        }

        return $result;
    }

    private function readThaiNumber($number)
    {
        $position_call = ["", "สิบ", "ร้อย", "พัน", "หมื่น", "แสน", "ล้าน"];
        $number_call = ["", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า"];
        $number = (string)(int)$number;

        $result = '';
        $len = strlen($number);

        for ($i = 0; $i < $len; $i++) {
            $num = $number[$i];
            $pos = $len - $i - 1;

            if ($num == 0) continue;

            if ($pos == 0 && $num == 1 && $len > 1) {
                $result .= 'เอ็ด';
            } elseif ($pos == 1 && $num == 2) {
                $result .= 'ยี่' . $position_call[$pos];
            } elseif ($pos == 1 && $num == 1) {
                $result .= $position_call[$pos];
            } else {
                $result .= $number_call[$num] . $position_call[$pos];
            }
        }

        return $result;
    }

}
