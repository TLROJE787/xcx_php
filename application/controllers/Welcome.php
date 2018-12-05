<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
   
	public function index()
	{
   // //$pdo = DB::getInstance();
    $sql = "select fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null order by ren_wu_id DESC ";
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $jobs=$this->db->query($sql);
        $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
        echo json_encode($que_result);
 }
 public function jie_shu()
	{
// // $pdo = DB::getInstance();
 /*
 fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf，yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id
 */

   $sql = "select yong_hu, fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu,yong_hu_jie where(shi_fou_jie_shu = 1 and (ren_wu.id!='".$_POST["id"]."' and yong_hu_jie.id='".$_POST["id"]."'  and ren_wu_id=jie_ren_wu_id)) order by ren_wu_id DESC;";
  //$sql = "select * from ren_wu,yong_hu_jie where(shi_fou_jie_shu = 1 and (ren_wu.id!='3' and yong_hu_jie.id='3'  and ren_wu_id=jie_ren_wu_id)) order by ren_wu_id DESC;";
    /*select * from ren_wu,yong_hu_jie where(shi_fou_jie_shu = 1 and (ren_wu.id!='".$_POST["id"]."' and yong_hu_jie.id!='".$_POST["id"]."'  and ren_wu_id=jie_ren_wu_id)) order by ren_wu_id DESC;*/
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
  public function zheng_zai()
	{
// $pdo = DB::getInstance();
    $sql = "select yong_hu, fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu,yong_hu_jie where (ren_wu.id='".$_POST["id"]."'  and shi_fou_jie_shu = 0 and shi_fou_wan_cheng =0 and shi_fou_shi_bai =0 )and (yong_hu_jie.id='".$_POST["id"]."'and jie_ren_wu_id=4) or ((yong_hu_jie.id='".$_POST["id"]."'  and ren_wu_id=jie_ren_wu_id) and shi_fou_jie_shu = 0 and shi_fou_wan_cheng =0 and shi_fou_shi_bai =0 ) order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }  
 public function fa_bu()
	{
// // $pdo = DB::getInstance();
    $sql = "select yong_hu,fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where ren_wu.id='".$_POST["id"]."'and shi_fou_shi_bai=0 and shi_fou_wan_cheng=0 and shi_fou_jie_shu=0  order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function ge_ren_xin_xi()
	{
// $pdo = DB::getInstance();
    $sql = "select * from yong_hu where id='".$_POST["id"]."'" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 /*select fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null order by ren_wu_id DESC*/
 public function zhong_lei1()
	{
// $pdo = DB::getInstance();
    $sql = "select fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=1 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
   public function zhong_lei2()
	{
// $pdo = DB::getInstance();
    $sql = "select  fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=2 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
  public function zhong_lei3()
	{
// $pdo = DB::getInstance();
    $sql = "select  fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=3 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute(); 
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
  public function zhong_lei4()
	{
// $pdo = DB::getInstance();
    $sql = "select  fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=4 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
  public function zhong_lei5()
	{
// $pdo = DB::getInstance();
    $sql = "select  fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=5 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
  public function zhong_lei6()
	{
// $pdo = DB::getInstance();
    $sql = "select  fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id from ren_wu left join yong_hu_jie on ren_wu_id=jie_ren_wu_id where yong_hu is null and zhong_lei=6 order by ren_wu_id DESC;" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function zhen_fa_bu()
	{
// //$pdo = DB::getInstance();

/*$endd =$_POST['end_date'];
$zhong=$_POST['zhong_lei'];
$nei=$_POST["nei_rong"];
$ji=$_POST['ji_fen'];*/
/*echo $_POST['post_date'];*/
/*insert into ren_wu (fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_ji_fen,shi_fou_jie_shu) values('老冯',NOW(),'2018-06-22',1,'aaaaas',0,0,100,0);*/
   $sql = "insert into ren_wu (fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,id,avatarUrl) values('".$_POST["fa_bu_yong_hu_name"]."','".$_POST["post_date"]."','".$_POST["end_date"]."','".$_POST["zhong_lei"]."','".$_POST["nei_rong"]."',0,0,'".$_POST['ji_fen']."',0,'".$_POST["lian_xi_fang_shi"]."','".$_POST["id"]."','".$_POST["avatarUrl"]."')" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);

 }
  public function jie_bang()
	{
// //$pdo = DB::getInstance();
   $sql = "insert into yong_hu_jie (yong_hu,jie_ren_wu_id,id,avatarUrl) values('".$_POST["yong_hu"]."','".$_POST["jie_ren_wu_id"]."','".$_POST["id"]."','".$_POST["avatarUrl"]."')" ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function jin_che_xiao()
	{
// //$pdo = DB::getInstance();
   $sql = "update ren_wu
   set shi_fou_jie_shu=1,
   shi_fou_shi_bai=1,
   shi_fou_wan_cheng=0
   where ren_wu_id='".$_POST["ren_wu_id"]."'
   " ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function fa_jie_shu(){
   // //$pdo = DB::getInstance();
 /*
 fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf，yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id
 */

   $sql = "SELECT yong_hu,fa_bu_yong_hu_name,post_date,end_date,zhong_lei,nei_rong,shi_fou_wan_cheng,shi_fou_shi_bai,ren_wu_id,ren_wu_ji_fen,shi_fou_jie_shu,lian_xi_fang_shi,ren_wu.id as idf,yong_hu_jie.id as idj,ren_wu.avatarUrl as avatarUrlf,yong_hu_jie.avatarUrl as avatarUrlj,jie_ren_wu_id FROM `ren_wu`,`yong_hu_jie` where shi_fou_wan_cheng=0 and shi_fou_shi_bai=1 and shi_fou_jie_shu=1  and ren_wu.id='".$_POST["id"]."' and ren_wu_id=jie_ren_wu_id; order by ren_wu_id DESC;";
  //$sql = "select * from ren_wu,yong_hu_jie where(shi_fou_jie_shu = 1 and (ren_wu.id!='3' and yong_hu_jie.id='3'  and ren_wu_id=jie_ren_wu_id)) order by ren_wu_id DESC;";
    /*select * from ren_wu,yong_hu_jie where(shi_fou_jie_shu = 1 and (ren_wu.id!='".$_POST["id"]."' and yong_hu_jie.id!='".$_POST["id"]."'  and ren_wu_id=jie_ren_wu_id)) order by ren_wu_id DESC;*/
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   //  $jobs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function fa_wan_cheng()
	{
// //$pdo = DB::getInstance();
   $sql = "update ren_wu
   set shi_fou_jie_shu=1,
   shi_fou_shi_bai=0,
   shi_fou_wan_cheng=1
   where ren_wu_id='".$_POST["ren_wu_id"]."'
   " ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
 }
 public function fa_che_xiao()
	{
// //$pdo = DB::getInstance();
   $sql = "update ren_wu
   set shi_fou_jie_shu=1,
   shi_fou_shi_bai=0,
   shi_fou_wan_cheng=0
   where ren_wu_id='".$_POST["ren_wu_id"]."'
   " ;
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
   $que_result=$jobs->result();
         header("Access-Control-Allow-Origin: * ");
   echo json_encode($que_result);
 }
  public function deng_lu()
	{
// //$pdo = DB::getInstance();
   $sql = "insert into yong_hu (`yong_hu`, `wan_cheng_lv`, `wan_cheng_ci_shu`, `yong_hu_ji_fen`, `lian_xi_fang_shi`, `lian_xi_di_zhi`, `id`,`avatarUrl`) values('".$_POST["yong_hu"]."',0.000,0,0,'0','0','".$_POST["id"]."','".$_POST["avatarUrl"]."')" ;
   //insert into yong_hu (`yong_hu`, `wan_cheng_lv`, `wan_cheng_ci_shu`, `yong_hu_ji_fen`, `lian_xi_fang_shi`, `lian_xi_di_zhi`, `id`,`avatarUrl`)VALUES('test',0.000,0,0,'0','0','test','test');
   //  $stmt = $pdo -> prepare($sql);
   //  $stmt -> execute();
   $jobs=$this->db->query($sql);
       $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
       echo json_encode($que_result);
   $que_result=$jobs->result();
         header("Access-Control-Allow-Origin: * ");
   echo json_encode($que_result);
 }
 public function test(){
   //  echo 'THIS IS TEST FOR SERVER';
    $sql = 'select * from yong_hu_jie';
    $jobs=$this->db->query($sql);
        $que_result=$jobs->result();
          header("Access-Control-Allow-Origin: * ");
      //   echo json_encode($que_result);
      header("Access-Control-Allow-Origin: * ");
    echo json_encode($que_result);
   //  foreach ($que_result as $row)
   //      {
   //           echo($row->yong_hu);echo('|');
   //      }
   //  echo $jobs;
   //
 }
}
