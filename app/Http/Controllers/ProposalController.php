<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Students;

class ProposalController extends Controller
{
    public function viewPenilaian()
    {
        return view("penilaian-proposal");
    }

    public function viewTinjauProposal()
    {
        return view("tinjau-proposal");
    }

    public function viewStatusProposal()
    {
        return view("status-proposal");
    }

    public function viewRiwayatProposal()
    {
        return view("riwayat-proposal");
    }
    public function viewBuatProposal( Request $request)
    {
        //ambil data json dari public/json
        $dataSet = json_decode(file_get_contents(public_path('json/dataSet.json')), true);

        $targetId = $request->input('id'); // Mengambil ID dari form
        $indexFound = null;
        $dataDetail = [];

        foreach ($dataSet['data'] as $index => $item) {
            if ($item['id'] === $targetId) {
                $indexFound = $index;
                break;
            }
        }

        if ($indexFound !== null) {
            $item = $dataSet['data'][$indexFound];
            $dataDetail['main'] = $item;

            if (isset($item['data']) && is_array($item['data'])) {
                $dataDetail['nestedData'] = $item['data'];

                if (isset($item['data']['module']) && is_array($item['data']['module'])) {
                    $dataDetail['module'] = $item['data']['module'];
                }
            }
        }
        $matakuliahStudents = Students::with('nilai_mahasiswa')->where('nim', auth()->user()->username)->firstOrFail();

        return view("buat-proposal", ['dataDetail' => $dataDetail, 'matakuliahStudents' => $matakuliahStudents]);;

        // return view('dataSet', ['dataDetail' => $dataDetail]);
        // $matakuliahStudents = Students::with('nilai_mahasiswa')->where('nim', auth()->user()->username)->firstOrFail();
        // return view("buat-proposal", compact('matakuliahStudents', 'data'));
    }
    public function viewPengajuanProposalBerhasil()
    {
        return view("pengajuan-proposal-berhasil");
    }



    //untuk view pengajuan proposal melalui id (tahap pencarian proposal)
    public function viewPengajuanProposal(Request $request)
    {
        return view("pengajuan-proposal");
    }
}