<?php

namespace App\Controllers;

class KwhController extends BaseController
{

    function __construct()
    {
        $this->model = new \App\Models\Kwh_Model();
    }


    public function simpan()
    {
        
		$validasi  = \Config\Services::validation();
		$aturan = [
			'namepop' => [
				'label' => 'Nama POP',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'dayalistrik' => [
				'label' => 'Daya Listrik',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'cos' => [
				'label' => 'Cos',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'arester' => [
				'label' => 'Arester',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'idpelanggan' => [
				'label' => 'ID Pelanggan',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'phasa' => [
				'label' => 'Phasa',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'tipecos' => [
				'label' => 'Tipe COS',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'tipearester' => [
				'label' => 'Tipe Arester',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'rn' => [
				'label' => 'R-N',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'ng' => [
				'label' => 'N-G',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'sn' => [
				'label' => 'S-N',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'rs' => [
				'label' => 'R-S',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'st' => [
				'label' => 'S-T',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'r' => [
				'label' => 'R',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			's' => [
				'label' => 'S',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            't' => [
				'label' => 'T',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'rmcb' => [
				'label' => 'R',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'smcb' => [
				'label' => 'S',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'tmcb' => [
				'label' => 'T',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'rwarna' => [
				'label' => 'R Warna',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'nwarna' => [
				'label' => 'N Warna',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
					
				]
			],
			'swarna' => [
				'label' => 'S Warna',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'twarna' => [
				'label' => 'T Warna',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'rmm' => [
				'label' => 'R mm',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'nmm' => [
				'label' => 'N mm',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'smm' => [
				'label' => 'S mm',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'gmm' => [
				'label' => 'G mm',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'tmm' => [
				'label' => 'T mm',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			],
			'temuan' => [
				'label' => 'Temuan',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]
			],
            'rekomendasi' => [
				'label' => 'Rekomendasi',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi'
                    ]
			]
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$namepop = $this->request->getPost('namepop');
			$dayalistrik = $this->request->getPost('dayalistrik');
			$cos = $this->request->getPost('cos');
			$arester = $this->request->getPost('arester');
			$idpelanggan = $this->request->getPost('idpelanggan');
            $phasa = $this->request->getPost('phasa');
			$tipecos = $this->request->getPost('tipecos');
			$tipearester = $this->request->getPost('tipearester');
			$rn = $this->request->getPost('rn');
			$tn = $this->request->getPost('tn');
            $rt = $this->request->getPost('rt');
			$ng = $this->request->getPost('ng');
			$sn = $this->request->getPost('sn');
			$rs = $this->request->getPost('rs');
			$st = $this->request->getPost('st');
            $r = $this->request->getPost('r');
			$s = $this->request->getPost('s');
			$t = $this->request->getPost('t');
			$rmcb = $this->request->getPost('rmcb');
			$smcb = $this->request->getPost('smcb');
            $tmcb = $this->request->getPost('tmcb');
			$rwarna = $this->request->getPost('rwarna');
			$nwarna = $this->request->getPost('nwarna');
			$swarna = $this->request->getPost('swarna');
			$gwarna = $this->request->getPost('gwarna');
            $twarna = $this->request->getPost('twarna');
			$rmm = $this->request->getPost('rmm');
			$nmm = $this->request->getPost('nmm');
			$smm = $this->request->getPost('smm');
			$gmm = $this->request->getPost('gmm');
            $tmm = $this->request->getPost('tmm');
			$temuan = $this->request->getPost('temuan');
			$rekomendasi = $this->request->getPost('rekomendasi');
			
			$data = [
                'namepop' => $namepop,
                'dayalistrik' =>  $dayalistrik,
                'cos' => $cos,
                'arester' => $arester,
                'idpelanggan' => $idpelanggan,
                'phasa' => $phasa,
                'tipecos' => $tipecos,
                'tipearester' => $tipearester,
                'rn' => $rn,
                'tn' => $tn,
                'rt' => $rt,
                'ng' => $ng,
                'sn' => $sn,
                'rs' => $rs,
                'st' => $st,
                'r' => $r,
                's' => $s,
                't' => $t,
                'rmcb' => $rmcb,
                'smcb' => $smcb,
                'tmcb' => $tmcb,
                'rwarna' => $rwarna,
                'nwarna' => $nwarna,
                'swarna' => $swarna,
                'gwarna' => $gwarna,
                'twarna' => $twarna,
                'rmm' => $rmm,
                'nmm' => $nmm,
                'smm' => $smm,
                'gmm' => $gmm,
                'tmm' => $tmm,
                'temuan' => $temuan,
                'rekomendasi' => $rekomendasi
			];

			$this->model->save($data);

			$hasil['sukses'] = "Berhasil memasukkan data";
			$hasil['error'] = true;
		} else {
			$hasil['sukses'] = false;
			$hasil['error'] = $validasi->listErrors();
		}


		return json_encode($hasil);
	}


    public function index()
    {

        
        return view('Kwh');
    }
}