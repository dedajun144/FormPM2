<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgnieter\Database\ConnectionInterface;

/**
 * Description of UserModel
 *
 * @author 
 */
class Kwh_Model extends Model {
    protected $table = 'kwh';
    protected $primatyKey = 'id';
    protected $allowedFields = [
        'namepop','dayalistrik','cos','arester',
        'idpelanggan','phasa','tipecos','tipearester',
        'rn','tn','rt','ng','sn','rs','st','r','s','t',
        'rmcb','smcb','tmcb','rwarna','nwarna','swarna',
        'gwarna','twarna','rmm','nmm','smm','gmm','tmm',
        'temuan','rekomendasi'
    ];

   

/* 
    private $kwh_table = 'kwh'; */

   /*  function __construct() {
        parent::__construct();
    } */

   /*  function insert_kwh($namepop, 
    $dayalistrik, 
    $cos, 
    $arester, 
    $idpelanggan, 
    $phasa, 
    $tipecos, 
    $tipearester, 
    $rn, 
    $tn, 
    $rt, 
    $ng, 
    $sn, 
    $rs, 
    $st, 
    $r,
    $s,
    $t,
    $rmcb,
    $smcb,
    $tmcb,
    $rwarna, 
    $nwarna, 
    $swarna, 
    $gwarna, 
    $twarna,
    $rmm,
    $nmm,
    $smm,
    $gmm,
    $tmm,
    $temuan,
    $rekomendasi) {
        $data = array('namepop' => $namepop, 
        'dayalistrik' => $dayalistrik, 
        'cos' => $cos, 
        'arester' => $arester, 
        'idpelanggan' => $idpelanggan, 
        'phasa' => $phasa, 
        'tipecos' => $tipecos, 
        'tipearester' =>$tipearester, 
        'rn'=>$rn, 
        'tn'=>$tn, 
        'rt' =>$rt, 
        'ng'=>$ng, 
        'sn'=>$sn,
        'rs' => $rs, 
        'st'=>$st,
         'r' =>$r, 
         's'=>$s,
         't'=>$t, 
         'rmcb'=>$rmcb,
         'smcb'=>$smcb,
         'tmcb'=>$tmcb,
         'rwarna'=>$rwarna, 
         'nwarna'=>$nwarna,
         'swarna' => $swarna, 
         'gwarna'=>$gwarna,
         'twarna' =>$twarna, 
          'rmm'=>$rmm, 
          'nmm'=>$nmm,
          'smm' => $smm, 
          'gmm'=>$gmm,
          'tmm' =>$tmm,
          'temuan'=>$temuan,
          'rekomendasi' =>$rekomendasi );
        $result = $this->db->insert($this->kwh_table, $data);
        //$result = $this->db->insert('kwh', $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    } */

}